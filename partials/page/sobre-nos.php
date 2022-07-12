<?php 
get_header();

?>

<section class="heroQS">
    <div class="heroContent">
        <div class="heroInfo">
        <a href="/pagina-inicial"><img src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto.svg" alt="INSTITUTO ECKOS LOGO"/></a>
            <p>
                O Instituto Ekos Brasil é uma instituição de referência
                em soluções socioambientais
            </p>
        </div>
    </div>
<img src="/wp-content/themes/ekos-theme/assets/images/qsHomef.png" alt="" class="heroImage">
</section>
<div class="fundacao">
    <div class="ernesto">
        <img src="/wp-content/themes/ekos-theme/assets/images/ernestoPict.svg" alt="ERNESTO FOTO" />
        <span class="ernestoDescription"
            >Ernesto Moeri, fundador do Intituto Ekos Brasil</span
        >
    </div>
    <div class="fundacaoContent">
        <div class="fundacaoContentHeader">
            <div class="headerTag">
                <span class="line"></span>
                #QuemSomos
            </div>
            <h2 class="headerTitle">
                FUNDAÇÃO DO INSTITUTO EKOS BRASIL
            </h2>
        </div>
        <div class="fundacaoContentText">
            <div class="textColumnOne">
                <p class="p1">
                    O Instituto Ekos Brasil nasce em agosto de 2001, por
                    iniciativa do geólogo suíço-brasileiro Ernesto
                    Niklaus Moeri. Em 1976, Ernesto Moeri vem ao Brasil
                    para trabalhar por apenas dois anos, mas sua paixão
                    pelo povo e pela exuberante natureza fala mais alto
                    e ele decide ficar de vez no país.
                </p>
                <p class="p1">
                    Depois de décadas trabalhando na área de
                    gerenciamento de áreas contaminadas e tratamento de
                    resíduos, Ernesto Moeri realiza seu grande sonho:
                    fundar uma instituição sem fins lucrativos, que
                    promove a preservação da biodiversidade e a
                    sustentabilidade.
                </p>
            </div>
            <div class="textColumnTwo">
                <p class="p1">
                    Em 2021, o Instituto Ekos Brasil comemorou seus 20
                    anos de existência. Essas duas décadas de trabalho
                    mostram que todo o esforço da equipe valeu a pena e
                    que a ideia de seu fundador, Ernesto Moeri, era
                    realizável e sustentável. Hoje, o Ekos é uma
                    instituição de referência internacional.
                </p>
                <p class="p2">
                    ''Precisamos investir na conservação de nossa
                    natureza, manejar nossos parques, compreender nossa
                    riqueza genética, proteger nossas florestas,
                    valorizar nossa aptidão para energias alternativas.
                    Temos que dar o devido valor às nossas comunidades
                    rurais, Amazônicas, aos índios e ribeirinhos, ao
                    homem do campo que sabe das coisas, e ao homem da
                    cidade que faz as coisas acontecerem.''
                </p>
            </div>
        </div>
    </div>
</div>
<section class="marcos">
    <div class="marcosHeader">
        <div class="headerTag">
            <span class="line"></span>
            #NossaHistória
        </div>
        <h2 class="headerTitle">PRINCIPAIS MARCOS HISTÓRICOS</h2>
    </div>
    <div class="counter">
        <?php if( have_rows('marcos_historicos') ):?>
            <div class="swiper-marcos">
                <div class="swiper-wrapper">
                    <?php while ( have_rows('marcos_historicos') ) : the_row();?>
                        <div class="swiper-slide">
                            <div class="counterBox">
                                <div class="counterBoxTitle">
                                    <div class="HighCircle">
                                        <img src="/wp-content/themes/ekos-theme/assets/images/blueCircle.svg">
                                    </div>
                                    <h2 class="BoxTitle"><?php the_sub_field('ano');?></h2>
                                </div>
                                <div class="counterBoxText">
                                    <p class="boxText"><?php the_sub_field('descricao');?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
                <div class="navegacao">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        <?php endif; ?>
        
    </div>
</section>
<section class="causa">
    <div class="causaHeader">
        <div class="headerTag">
            <span class="line"></span>
            #NossoManifesto
        </div>
        <h2 class="headerTitle">A NOSSA CAUSA</h2>
    </div>
    <div class="causaDescription">
        Há 20 anos a semente de colaborar com a regeneração dos
        ecossistemas foi plantada pelo nosso fundador Ernesto Moeri, um
        geólogo suíço-brasileiro apaixonado pela natureza e movido pelo
        sonho de fomentar a sustentabilidade e preservar a
        biodiversidade do Brasil.
    </div>
    <a class="actionButton hero" href="<?php the_sub_field('link_banner');?>" target="_blank"
        ><img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow">Saiba mais
    </a>
</section>
<section class="proposito">
    <div class="propositoHeader">
        <div class="headerTag">
            <span class="line"></span>
            #Propósito
        </div>
        <h2 class="headerTitle">
            COLABORAR COM A REGENERAÇÃO DO ECOSSISTEMA GLOBAL
        </h2>
    </div>
    <div class="propositoContainer">
        <div class="missao">
            <img src="/wp-content/themes/ekos-theme/assets/images/missaoIcon.svg" alt="" class="iconmissao">
            <div class="missaoText">
                <h2 class="missaoTitle">Missão</h2>
                <p class="missaoDescription">Fortalecer ações socioambientais que contribuam para a conservação e valorização do meio ambiente.</p>
            </div>
        </div>
        <div class="visao">
            <img src="/wp-content/themes/ekos-theme/assets/images/visaoIcon.svg" alt="" class="iconvisao">
            <div class="visaoText">
                <h2 class="visaoTitle">Visão</h2>
                <p class="visaoDescription">Até 2030, ser referência na criação de soluções técnicas e inovadoras na área socioambiental e cultivar um legado positivo para as pessoas e o meio ambiente.</p>
            </div>
        </div>
    </div>
</section>
<div class="valoresImage">
    <img src="/wp-content/themes/ekos-theme/assets/images/ValoresImgCorreta.png" alt="">
</div>
<section class="somos">
    <div class="somosHeader">
        <div class="headerTag">
            <span class="line"></span>
            #QuemSomos
        </div>
        <h2 class="headerTitle">Equipe</h2>
    </div>
    <?php if( have_rows('equipe') ):?>
        <div class="cardsContainer">
            <?php while ( have_rows('equipe') ) : the_row();?>
                <div class="profileCard">
                    <img src="<?php echo the_sub_field('equipe_foto');?>" alt="" class="profilePhoto">
                    <div class="profile-content">
                        <h3 class="profileTitle"><?php echo the_sub_field('equipe_nome'); ?></h3>
                        <div class="cargoDescription">
                            <span><?php echo the_sub_field('equipe_cargo'); ?></span>
                            <img src="/wp-content/themes/ekos-theme/assets/images/Union.png">
                        </div>
                        <div class="desc-profile">
                            <p><?php echo the_sub_field('equipe_descricao');?></p>
                            <div class="orange-arrow">
                                <img src="/wp-content/themes/ekos-theme/assets/images/Union-laranja.png">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;?>
</section>
<section class="somos">
    <div class="somosHeader">
        <div class="headerTag">
            <span class="line"></span>
            #QuemSomos
        </div>
        <h2 class="headerTitle">CONSELHO TÉCNICO</h2>
    </div>
    <?php if( have_rows('conselho_tecnico') ):?>
        <div class="cardsContainer">
            <?php while ( have_rows('conselho_tecnico') ) : the_row();?>
                <div class="profileCard">
                    <img src="<?php echo the_sub_field('conselho_tecnico_foto');?>" alt="" class="profilePhoto">
                    <div class="profile-content">
                        <h3 class="profileTitle"><?php echo the_sub_field('conselho_tecnico_nome'); ?></h3>
                        <div class="cargoDescription">
                            <span><?php echo the_sub_field('conselho_tecnico_cargo'); ?></span>
                            <img src="/wp-content/themes/ekos-theme/assets/images/Union.png">
                        </div>
                        <div class="desc-profile">
                            <p><?php echo the_sub_field('conselho_tecnico_descricao');?></p>
                            <div class="orange-arrow">
                                <img src="/wp-content/themes/ekos-theme/assets/images/Union-laranja.png">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;?>
</section>
<section class="somos">
    <div class="somosHeader">
        <div class="headerTag">
            <span class="line"></span>
            #QuemSomos
        </div>
        <h2 class="headerTitle">CONSELHO FISCAL</h2>
    </div>
    <?php if( have_rows('conselho_fiscal') ):?>
        <div class="cardsContainer">
            <?php while ( have_rows('conselho_fiscal') ) : the_row();?>
                <div class="profileCard">
                    <img src="<?php echo the_sub_field('conselho_fiscal_foto');?>" alt="" class="profilePhoto">
                    <div class="profile-content">
                        <h3 class="profileTitle"><?php echo the_sub_field('conselho_fiscal_nome'); ?></h3>
                        <div class="cargoDescription">
                            <span><?php echo the_sub_field('conselho_fiscal_cargo'); ?></span>
                            <img src="/wp-content/themes/ekos-theme/assets/images/Union.png">
                        </div>
                        <div class="desc-profile">
                            <p><?php echo the_sub_field('conselho_fiscal_descricao');?></p>
                            <div class="orange-arrow">
                                <img src="/wp-content/themes/ekos-theme/assets/images/Union-laranja.png">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;?>
</section>
<section class="compliance">
    <div class="complianceHeader">
        <div class="headerTag">
            <span class="line"></span>
            #Compliance
        </div>
        <h2 class="headerTitle">ÉTICA E TRANSPARÊNCIA</h2>
    </div>
    <div class="complianceDocs">
        <a href="" class="document">Relatório 2021</a>
        <a href="https://drive.google.com/file/d/1tYK0Fg7y32XNKK0bt69m5K9b_icTfxfP/view" class="document">Relatório 2020</a>
        <a href="https://drive.google.com/file/d/15v_OskuG15wv1RBxK_LFrb3D1PwjaNl7/view" class="document">Relatório 2019</a>
        <a href="https://drive.google.com/file/d/1fN9xlxEqw-bTw_d8rDy-ve-EfJAZaJcW/view" class="document">Código de Conduta e Ética</a>
        <a href="https://drive.google.com/file/d/1xuU_rpJ3LAhUKYKrmNC5OjPuG0A0e_uI/view" class="document">Política Anticorrupção</a>
        <a href="https://drive.google.com/file/d/1FhiPtEQx6OwBbkIkHR-wcmif-kpqN6Bq/view" class="document">Estatuto Ekos</a>
        <a href="https://drive.google.com/file/d/1UwW-fDNxdcXDLVieQF_FwFR1-1eOQxXk/view" class="document">Certificado de auditoria 2020</a>
        <a href="http://ekos.blankst.digital/wp-content/uploads/2022/06/Relatorio-dos-Auditores-Independentes-DFs-e-notas-explicativas-Ekos-31.12.2021.pdf" class="document">Certificado de auditoria 2021</a>
    </div>
</section>
<section class="parceiros">
    <div class="parceirosHeader">
        <div class="headerTag">
            <span class="line"></span>
            #Parceiros
        </div>
        <h2 class="headerTitle">PARCEIROS INSTITUCIONAIS</h2>
    </div>
    <div class="parceirosLogos">
        <a href="https://idesam.org/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 1.svg" alt=""></a>
        <a href="https://br.linkedin.com/company/nicole-brasil?original_referer=https%3A%2F%2Fwww.google.com%2F" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 2.svg" alt=""></a>
        <a href="https://swisscam.com.br/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 3.svg" alt=""></a>
        <a href="https://www.iucn.org/pt" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 4.svg" alt=""></a>
        <a href="https://www.funbio.org.br/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 6.svg" alt=""></a>
        <a href="https://www.infraestruturameioambiente.sp.gov.br/fundacaoflorestal/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 7.svg" alt=""></a>
        <a href="https://www.icmbio.gov.br/portal/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 8.svg" alt=""></a>
        <a href="https://www.ifc.org/wps/wcm/connect/multilingual_ext_content/ifc_external_corporate_site/home_pt" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/image 5.svg" alt=""></a>
    </div>
</section>

<?php 
get_footer();