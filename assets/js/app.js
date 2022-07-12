jQuery(function($){
  //swiper
  const swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      autoplay: {
          delay: 5000,
        },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
  });
  //Swiper sobre nos
  const swiper_marcos = new Swiper('.swiper-marcos', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      920:{
        slidesPerView: 3,
        spaceBetween: 20
      }
    },
    autoplay: {
        delay: 5000,
      },
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});
  // swiper compromisso com o clima

  const swiper_depoimentos = new Swiper('.swiper-depoimentos', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
        delay: 5000,
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});

  //menu
    var menu = $(".menu-full");
    var menu_open = $(".menu-open");
    var menu_close = $(".menu-close");
    var overlay = $(".overlay");

    menu_open.click(function (e) {
    e.preventDefault();
    menu.css({"right": "0px" , "width": "100%"});
    // overlay.css({"opacity": "1", "width": "100%"});
    });
    
    menu_close.click(function (e) {
    e.preventDefault();
    menu.css({"right": "-60px" , "width": "0" });
    overlay.css({"opacity": "0", "width": "0"});
    });

    //modal 

    var modal = $(".menu-full-modal");
    var modal_open = $(".modal-open");
    var modal_close = $(".menu-close");
    var overlay = $(".overlay");

    modal_open.click(function (e) {
    e.preventDefault();
    modal.css({"right": "0px" , "width": "100%"});
    // overlay.css({"opacity": "1", "width": "100%"});
    });
    
    modal_close.click(function (e) {
    e.preventDefault();
    modal.css({"right": "-60px" , "width": "0" });
    overlay.css({"opacity": "0", "width": "0"});
    });

    //cards
    $('.profile-content').on('click' , function(){
      var active = $(this).hasClass('active');
      if(active == true){
        $(this).removeClass('active');
        $(this).find('.desc-profile').fadeOut();
        $(this).find('.cargoDescription img').css('display' , 'block');
      }else{
        $('.profile-content').removeClass('active')
        $(this).addClass('active');
        $('.desc-profile').fadeOut();
        $('.cargoDescription img').css('display' , 'block');
        $(this).find('.desc-profile').fadeIn();
        $(this).find('.cargoDescription img').css('display' , 'none');
        $(this).find('.orange-arrow').css('display' , 'block');
      }
    })

    //option attr
    $('#assunto option:first-child').attr('selected' , '')
    $('#assunto option:first-child').attr('hidden' , '')
    $('#assunto option:first-child').attr('disabled' , true)
    $('.wpcf7-submit').addClass('sendForm');

    //filtro blog

    $('.filter-select').change(function(){
      var typeField = $('#type-field').val();
      var catField = $('#cat-field').val();
      $.ajax({
        type: "POST",
        url: wpurl.ajax,
        data:{
          action: 'filter_blog',
          type_field: typeField,
          cat_field: catField
        },
          success:function(data){
              $('.postsBlog').html(data);
          }
      });
      return false;
    });

    // filtro projetos

    $('.projeto-select').change(function(){
      var projetoField = $('#projeto-field').val();
      $.ajax({
        type: "POST",
        url: wpurl.ajax,
        data:{
          action: 'filter_projeto',
          projeto_field: projetoField
        },
          success:function(data){
              $('.articlesProjetos').html(data);
          }
      });
      return false;
    });

    //Contador
  const tempo_intervalo = 5; //ms -> define a velocidade da animação
  const tempo = 2000; //ms -> define o tempo total da animaçao

  $('.counter-up').each(function() {  
    let count_to = parseInt($(this).data('countTo'));
    let intervalos = tempo / tempo_intervalo; //quantos passos de animação tem
    let incremento = count_to / intervalos; //quanto cada contador deve aumentar
    let valor = 0;
    let el = $(this);
    
    let timer = setInterval(function() {
      if (valor >= count_to){ //se já contou tudo tem de parar o timer
        valor = count_to;
        clearInterval(timer);
      }
      
      let texto = valor.toFixed(0).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
      el.text(texto);
      valor += incremento;      
    }, tempo_intervalo);
  });
  $(window).scroll(function() {
    if ($(this).scrollTop() > 720){
    $('.solucoesTags').addClass("fixed");
    }
    else{
    $('.solucoesTags').removeClass("fixed");
    }
    if($(this).scrollTop() > 5){
      $('.menu-toggle').addClass('toggleFixed');
    }
    else{
      $('.menu-toggle').removeClass('toggleFixed');
    }
    if ($(this).scrollTop() > 840 && $(this).scrollTop() < 3720){
      $('.tagsInd:first-child').addClass("tagActive");
      }
      else{
      $('.tagsInd:first-child').removeClass("tagActive");
      }
    if ($(this).scrollTop() > 3720 && $(this).scrollTop() < 4960){
      $('.tagsInd:nth-child(2)').addClass("tagActive");
      }
      else{
      $('.tagsInd:nth-child(2)').removeClass("tagActive");
      }
    if ($(this).scrollTop() > 4960 && $(this).scrollTop() < 5692){
      $('.tagsInd:nth-child(3)').addClass("tagActive");
      }
      else{
      $('.tagsInd:nth-child(3)').removeClass("tagActive");
      }
    if ($(this).scrollTop() > 5692){
      $('.tagsInd:nth-child(4)').addClass("tagActive");
      }
      else{
      $('.tagsInd:nth-child(4)').removeClass("tagActive");
      }
    });
    $('.tagsInd').on('click' , function(){
      $('.tagsInd').removeClass('tagActive');
      $(this).addClass('tagActive')
  })
  // PUBLICAÇÕES HOME/SOLUÇÕES SLIDER
  $(".publicacao").mouseenter(function(){
    $(this).find(".publiContent .publicacaoTitle").slideDown();
  });
  $(".publicacao").mouseleave(function(){
    $(this).find(".publiContent .publicacaoTitle").slideUp();
  });
  // PROJETOSAPOIADOSSLIDER
  $(".articleInd").mouseenter(function(){
    $(this).find(".artCategoria").slideDown();
  });
  $(".articleInd").mouseleave(function(){
    $(this).find(".artCategoria").slideUp();
  });
  // HEADERLANDING
  $("#dropSomos").mouseenter(function(){
    $(this).find(".dropdownSomos").slideDown();
  });
  $("#dropSomos").mouseleave(function(){
    $(this).find(".dropdownSomos").slideUp();
  });

  // Tradução personalizada
  $('.flags-menu').on('click' , function(){
      var ingles = $('html').hasClass('translated-ltr')
      if(ingles){
          $('.predhastag').text('#PERD')
          $('.predtitle').text('PERD')
          $('.predcontent').text('Termo de Parceria entre o Instituto Estadual de Florestas e o Instituto Ekos Brasil para Apoio às Ações de Consolidação da Unidade de Conservação do Parque Estadual do Rio Doce.');
      }else{
          $('.predhastag').text('#RioDoceStatePark')
          $('.predtitle').text('Rio Doce State Park')
          $('.predcontent').text('Partnership Agreement between the State Forestry Institute and the Ekos Brasil Institute to Support Consolidation Actions for the Rio Doce State Park');
      }
  })
})

class Accordion {
  constructor(accordionListQuestion) {
    this.accordionListQuestion = document.querySelectorAll(accordionListQuestion);
    this.activeItemClass = 'openAccordion'
  }
  
  toggleAccordion(item){
    item.classList.toggle(this.activeItemClass)
    item.nextElementSibling.classList.toggle(this.activeItemClass)
  }
  
  addAccordionEvent() {
    this.accordionListQuestion.forEach( question => {
      question.addEventListener('click', () => this.toggleAccordion(question));
    });
  }
  
  initAccordion() {
    if(this.accordionListQuestion.length) {
      this.addAccordionEvent();
    }
    return this;
  }
}

const accordion = new Accordion(".headerQuestion")
accordion.initAccordion()

const Scrollwindow = {
  scrollReveal: ScrollReveal({
    origin: 'bottom',
    distance: '30px',
    duration: 1000,
    reset: false
  }),
  revealElements() {
    this.scrollReveal.reveal(
      `
      .compromisso, .especialistas,
      .parceriax, .manejo
      
      `,
      { interval: 100 }
    )
  }
}
Scrollwindow.revealElements()