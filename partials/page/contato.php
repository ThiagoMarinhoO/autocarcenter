<?php

get_header();

?>

<section class="heroQS">
    <div class="heroContent">
        <div class="heroInfo">
        <a href="/pagina-inicial"><img src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto.svg" alt="INSTITUTO ECKOS LOGO"/></a>
            <p>
                Para o Ekos Brasil, relacionamentos importam!
            </p>
        </div>
    </div>
    <img src="/wp-content/themes/ekos-theme/assets/images/Layer.png" alt="" class="heroImage">
</section>
<section class="contatoForm">
    <div class="contatoFormHeader">
        <div class="headerTag">
            <span class="line"></span>
            #FaleConosco
        </div>
        <div class="TitleDescription">
            <h2 class="headerTitle">CONTATO</h2>
            <p class="TitleDescrip">Deixe sua mensagem para saber mais sobre nossos serviços, dúvidas, sugestões, solicitações de entrevistas, dentre outras. </p>
        </div>
    </div>
    <section class="form">
        <?php echo do_shortcode('[contact-form-7 id="9870" title="Contato"]');?>
    </section>
</section>

<?php

get_footer();

?>