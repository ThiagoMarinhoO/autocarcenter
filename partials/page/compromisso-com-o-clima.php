<?php
$argsProjeto = array(
    'post_type' => 'projeto',
    'posts_per_page' => 6,
    'paged' => $paged
);

$projeto_query = new WP_Query($argsProjeto);
?>
<header class="headerTwo">
    <a href="" class="landingLogo"><img src="/wp-content/themes/ekos-theme/assets/images/landingLogo.png" alt="" class="landingLogo"></a>
    <div class="menuHeaderTwo">
        <ul class="menuHeaderTwoList">
            <li><a href="#objetivos" class="menuLinks">Sobre o programa</a></li>
            <li class="" id="dropSomos">
                <div class="somosHeadr">
                    <h4 class="somosTitle"><a href="#" class="menuLinks">Quem Somos <img src="/wp-content/themes/ekos-theme/assets/images/chevronIcon.svg" alt=""></a></h4>
                    <ul class="dropdownSomos">
                        <li><a href="#FAQ">Edital 2022</a></li>
                        <li><a href="#beneficios">Por quê apoiar?</a></li>
                        <li><a href="https://plataforma.ekos.social/login">Acesso à plataforma</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#aquiProjetos" class="menuLinks">Projetos</a></li>
            <li><a href="#FAQ" class="menuLinks">Edital 2022</a></li>
            <li><a href="https://compromisso.ekos.social/documents/Commitment-to-Climate---one-pager-Eng.pdf" class="menuLinks">English brochure</a></li>
            <li><a href="/pagina-inicial" class="menuLinks">Site Ekos</a></li>
        </ul>
    </div>
    <div class="toggle icon-menu"></div>
    <div class="toggle icon-close"></div>
</header>
<section class="compromissoAmbiental">
        <div class="compromissoAmbientalHeader">
            <div class="headerTag">
                <span class="line"></span>
                #Compromisso
            </div>
            <div class="TitleDescription">
                <h2 class="headerTitle">IMPACTO SOCIOAMBIENTAL</h2>
                <p class="TitleDescrip">Compromisso Com o Clima é onde projetos socioambientais e empresas conscientes de seu papel social se encontram com o propósito de realizar planos de longo prazo para o planeta.</p>
            </div>
        </div>
        <div class="counterImpactos">
            <div class="cardImpactos">
                <h3 class="titleImpactos">Floresta protegida</h3>
                <span class="numberImpactos">22.6k</span>
            </div>
            <div class="cardImpactos">
                <h3 class="titleImpactos">Projetos apoiados</h3>
                <span class="numberImpactos">15+</span>
            </div>
            <div class="cardImpactos">
                <h3 class="titleImpactos">Energia renovável gerada (MWh)</h3>
                <span class="numberImpactos">1,02M</span>
            </div>
            <div class="cardImpactos">
                <h3 class="titleImpactos">Reduções de emissões verificadas (tCO2e)</h3>
                <span class="numberImpactos">1.4M</span>
            </div>
            <div class="cardImpactos">
                <h3 class="titleImpactos">Pessoas capacitadas</h3>
                <span class="numberImpactos">1.6k</span>
            </div>
        </div>
</section>
<div class="videoHolder"><img src="/wp-content/themes/ekos-theme/assets/images/videoHolder.png" alt=""></div>
<section class="objetivos" id="objetivos">
        <div class="objetivosHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Objetivos</p>
                </div>
                <h2 class="headerTitle">FAÇA PARTE DESSE MOVIMENTO</h2>
            </div>
        </div>
        <div class="objetivosDescript">
            <div class="objetivosCards">
                <div class="objetivoCard Ekos-Blue">
                    <div class="innerCard">
                        <p class="objText">Conectar investidores com desenvolvedores de projetos socioambientais</p>
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="" class="setinha">
                    </div>
                </div>
                <div class="objetivoCard Ekos-Orange">
                    <div class="innerCard">
                        <p class="objText">Aumentar o alcance das iniciativas de nossos parceiros</p>
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="" class="setinha">
                    </div>
                </div>
                <div class="objetivoCard Ekos-Marine">
                    <div class="innerCard">
                        <p class="objText">Viabilizar projetos socioambientais, contribuindo com recursos e conhecimento</p>
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="" class="setinha">
                    </div>
                </div>
            </div>
            <div class="textApoiadores">
                <p class="since17">Desde 2017 conectamos empresas interessadas em compensar suas emissões de Gases de Efeito Estufa e projetos dedicados a gerar benefícios sociais e ambientais.<br>Com o apoio de grandes parceiros, o programa Compromisso Com o Clima vem expandindo seu alcance e segue com o propósito de engajar o setor privado em ações de responsabilidade climática. Fazemos isso porque acreditamos que, agindo de forma colaborativa, nossas ações têm maior impacto e apontam para um futuro cada vez mais sustentável.</p>
                <div class="apoiadores">
                    <h3 class="apoiadoresTitle">Apoiadores</h3>
                    <div class="marcasGrid"><img src="/wp-content/themes/ekos-theme/assets/images/itau.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/natura.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/renner.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/raia.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/mattos.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/mrv.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/localiza.png" alt=""><img src="/wp-content/themes/ekos-theme/assets/images/ifood.png" alt=""></div>
                </div>
            </div>
        </div>
</section>
<section class="testimonials">
        <div class="testimonialsHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#QuemIncentiva</p>
                </div>
                <h2 class="headerTitle">DEPOIMENTOS</h2>
            </div>
        </div>
        <?php if( have_rows('depoimentos') ):?>
            <div class="swiper-depoimentos">
                <div class="swiper-wrapper">
                    <?php while ( have_rows('depoimentos') ) : the_row();?>
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonialTextLogo">
                                    <span class="testimonialText"><?php the_sub_field('depoimento_texto')?></span>
                                    <div class="testimonialLogo">
                                        <img src="<?php the_sub_field('depoimento_imagem')?>" alt="">
                                    </div> 
                                </div>
                                <div class="testimonialAuthor">
                                    <span class="authorName"><?php the_sub_field('depoimento_autor')?></span>
                                    <span class="authorCargo"><?php the_sub_field('cargo_autor')?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                    </div>
                <div class="navigation-arrows testimomonialSlider">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        <?php endif;?>
</section>
<section class="apoio">
        <div class="apoioHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Apoio</p>
                </div>
                <h2 class="headerTitle">QUERO SER UM APOIADOR</h2>
                <p class="headerDesc">Sua organização pode participar nas seguintes modalidades</p>
            </div>
        </div>

        <div class="blueCardsContainer">
            <div class="blueCard">
                <div class="cardTexto">
                    <h2 class="cardTitle">Acesso à plataforma</h2>
                    <ul class="cardDesc">
                        <li>Acesso à plataforma para seleção dos projetos e compensação</li>
                        <li>Acesso à avaliação técnica dos projetos</li>
                    </ul>
                </div>
            </div>
            <img src="/wp-content/themes/ekos-theme/assets/images/computerBlue.png" alt="" class="fotoCard">
        </div>
        <div class="orangeCardsContainer">
            <img src="/wp-content/themes/ekos-theme/assets/images/computerGold.png" alt="" class="fotoCard">
            <div class="orangeCard">
                <div class="cardTexto">
                    <h2 class="cardTitle">APOIO INSTITUCIONAL</h2>
                    <ul class="cardDesc">
                        <li>Acesso à plataforma para seleção dos projetos e compensação</li>
                        <li>Acesso à avaliação técnica dos projetos</li>
                        <li>Participação no Comitê Gestor</li>
                        <li>Participação e acesso aos editais</li>
                        <li>Acesso aos projetos dos novos editais</li>
                        <li>Análise detalhada dos projetos e recomendações para composição de portfólio</li>
                        <li>Exposição do logotipo na Plataforma e materiais de divulgação</li>
                        <li>Licenças gratuitas para convidar parceiros de negócio</li>
                    </ul>
                </div>
            </div>
        </div>
</section>
<section class="beneficios" id="beneficios">
    <div class="beneficiosHeader">
        <div class="headerTag">
            <span class="line"></span>
            #Benefícios
        </div>
        <h2 class="headerTitle">
        BENEFÍCIOS PARA APOIADORES
        </h2>
    </div>
    <div class="beneficiosContainer">
        <div class="missao">
            <img src="/wp-content/themes/ekos-theme/assets/images/missaoIcon.svg" alt="" class="iconmissao">
            <div class="missaoText">
                <h2 class="missaoTitle">Mais credibilidade</h2>
                <p class="missaoDescription">pois o processo é realizado por profissionais independentes e com ampla experiência.</p>
            </div>
        </div>
        <div class="visao">
            <img src="/wp-content/themes/ekos-theme/assets/images/missaoIcon.svg" alt="" class="iconvisao">
            <div class="visaoText">
                <h2 class="visaoTitle">Simplicidade e conveniência</h2>
                <p class="visaoDescription">pois todas as informações necessárias estão disponíveis na Plataforma Ekos Social</p>
            </div>
        </div>
        <div class="visao">
            <img src="/wp-content/themes/ekos-theme/assets/images/missaoIcon.svg" alt="" class="iconvisao">
            <div class="visaoText">
                <h2 class="visaoTitle">Redução de custos</h2>
                <p class="visaoDescription">já que os custos são compartilhados entre os participantes do Programa.</p>
            </div>
        </div>
        <div class="visao">
            <img src="/wp-content/themes/ekos-theme/assets/images/visaoIcon.svg" alt="" class="iconvisao">
            <div class="visaoText">
                <h2 class="visaoTitle">Maior alcance e exposição</h2>
                <p class="visaoDescription">das iniciativas de compensação, pois juntos fazemos mais e melhore.</p>
            </div>
        </div>
    </div>
</section>
<section class="ekosTecnico">
    <img src="/wp-content/themes/ekos-theme/assets/images/ekosVerticalColorido.png" alt="" class="ekosLogo">
    <div class="ekosTecnicoDescrip">
        <h2 class="ekosTecnicoTitle">Apoio Técnico e Executivo</h2>
        <div class="ekosTecnicoText">
            <p>O Instituto Ekos Brasil é uma organização sem fins lucrativos da sociedade civil (OSCIP) criada em 2001 para conservação da biodiversidade e promoção da sustentabilidade. Nossa missão é concretizar ideais por meio do desenvolvimento de projetos locais que contribuam para a sustentabilidade global.</p>
            <p>Consolidamos, nesses 19 anos de existência, a atuação em projetos de conservação e planejamento de áreas naturais, capacitação técnica em recuperação ambiental, estruturação e operação de investimentos sustentáveis com impacto socioambiental, e intercâmbio técnico científico entre entidades brasileiras e internacionais; experiências estas organizadas em três principais áreas de atuação: Remediação Ambiental, Investimento de Impacto e Conservação da Biodiversidade</p>
            <p>.O Ekos Brasil atua reunindo profissionais com ampla experiência e excelência técnica em diferentes setores da área socioambiental, sendo capaz de mobilizar o capital intelectual específico para responder aos desafios ambientais da atualidade de forma inovadora e eficiente. Fazemos mais e melhor.</p>
        </div>
    </div>
</section>
<section class="projetos land" id="aquiProjetos">
        <div class="projetosHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Projetos</p>
                </div>
                <h2 class="headerTitle">PROJETOS APOIADOS</h2>
            </div>
        </div>
        <div class="articlesProjetos">
            <div class="articleInd" style=" background: url(http://ekos.blankst.digital/wp-content/uploads/2022/06/metanolages.jpg);">
                <div class="artText">
                    <div class="artHeader">
                        <h3 class="artTitle"><a href="http://ekos.blankst.digital/projeto/reducao-de-emissoes-de-metano-lages/">Redução de Emissões de Metano Lages</a></h3>
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="">
                    </div>
                    <span class="artCategoria">Projeto de geração de energia elétrica renovável a partir do aproveitamento de resíduos da indústria madeireira e florestal da região.</span>
                </div>
            </div>
            <div class="articleInd" style=" background: url(http://ekos.blankst.digital/wp-content/uploads/2022/06/gomesdematt.jpg);">
                <div class="artText">
                    <div class="artHeader">
                        <h3 class="artTitle"><a href="http://ekos.blankst.digital/projeto/ceramica-gomes-de-mattos/">Cerâmica Gomes de Mattos</a></h3>
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="">
                    </div>
                    <span class="artCategoria">Substituição do uso de lenha nativa na fábrica produtora de cerâmicas por biomassa renovável. Esta troca proporcionou a redução de emissão de GEEs para a atmosfera, possibilitando a participação no mercado internacional de carbono.</span>
                </div>
            </div>
            <div class="articleInd" style=" background: url(http://ekos.blankst.digital/wp-content/uploads/2022/06/CPFL1.jpg);">
                <div class="artText">
                    <div class="artHeader">
                        <h3 class="artTitle"><a href="http://ekos.blankst.digital/projeto/projeto-5495-geracao-de-eletricidade-a-partir-de-fontes-renovaveis/">Projeto 5495: Geração de eletricidade a partir de fontes renováveis</a></h3>
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="">
                    </div>
                    <span class="artCategoria">Projeto de geração de energia renovável a partir de sete instalações de energia eólica, totalizando 188MW. A geração de energia eólica não emite Gases de Efeito Estufa é complementar à hidroeletricidade, o que contribui para a segurança do suprimento de energia ao longo do ano. Benefícios ambientais e sociais são gerados por iniciativas da CPFL Renováveis com a comunidade local.</span>
                </div>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send/?phone=5511956638319" class="serApoiador">Quero ser um apoiador <img src="/wp-content/themes/ekos-theme/assets/images/zipzopIcon.svg" alt=""></a>
</section>
<section class="FAQ" id="FAQ">
        <div class="FAQHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Dúvidas</p>
                </div>
                <h2 class="headerTitle">FAQ</h2>
            </div>
        </div>
        <div class="sanfonaFAQ">
            <div class="question">
                <div class="headerQuestion">
                    <h3 class="titleQuestion">Quero desenvolver um projeto. Como posso ser apoiado pelo Compromisso com o Clima?</h3>
                    <img src="/wp-content/themes/ekos-theme/assets/images/chevronIcon.svg" alt="">
                </div>
                <span class="hiddenAnswer">O Compromisso com o Clima tem o propósito de conectar desenvolvedores de projeto com empresas que buscam compensar suas emissões ao apoiar projetos socioambientais. Porém, não atuamos na elaboração de projetos. Caso você tenha uma área de floresta conservada ou alguma tecnologia de baixo carbono, recomendamos que entre em contato com uma entidade que desenvolve projetos de carbono.</span>
            </div>
            <div class="question">
                <div class="headerQuestion">
                    <h3 class="titleQuestion">Gostaria de vender créditos de carbono. Como posso participar?</h3>
                    <img src="/wp-content/themes/ekos-theme/assets/images/chevronIcon.svg" alt="">
                </div>
                <span class="hiddenAnswer">O Compromisso com o Clima seleciona projetos por meio de editais, chamadas de projeto que normalmente abrem inscrições no primeiro trimestre de cada ano. Não aceitamos a inclusão de projetos por outros meios além do edital. Ainda, destacamos que não compramos, vendemos, intermediamos ou repassamos créditos de carbono para as empresas vinculadas ao Programa.\</span>
            </div>
            <div class="question">
                <div class="headerQuestion">
                    <h3 class="titleQuestion">Como minha empresa pode participar?</h3>
                    <img src="/wp-content/themes/ekos-theme/assets/images/chevronIcon.svg" alt="">
                </div>
                <span class="hiddenAnswer">Existem duas modalidades de participação para as empresas que desejam compensar suas emissões de carbono. Veja nesta página as modalidades disponíveis e os benefícios de cada uma. Caso tenha dúvidas, entre em contato com a gente, podemos marcar uma conversa para explicar os detalhes da adesão.</span>
            </div>
            <div class="question">
                <div class="headerQuestion">
                    <h3 class="titleQuestion">Quais são os projetos apoiados pelo Programa? Posso acessar a Plataforma para conhecê-los?</h3>
                    <img src="/wp-content/themes/ekos-theme/assets/images/chevronIcon.svg" alt="">
                </div>
                <span class="hiddenAnswer">Atualmente, 15 projetos estão vinculados ao Compromisso com o Clima. Nosso portfólio inclui projetos nas cinco regiões do Brasil e que desenvolvem ações relacionadas à geração de energia renovável, reflorestamento e conservação florestal, manejo correto de resíduos e efluentes e implantação de fogões eficientes para famílias de baixa renda.<br>Informações detalhadas sobre os projetos apoiados são disponibilizadas apenas para as empresas que estão vinculadas ao Programa. <a href="#aquiProjetos">Aqui</a>, você pode conhecer um pouco sobre três projetos no nosso portfólio, mas as demais informações são de acesso restrito.</span>
            </div>
        </div>
</section>




<?php
get_footer();
?>