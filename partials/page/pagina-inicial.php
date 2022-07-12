<?php 
get_header();

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10
);

$post_query = new WP_Query($args);

?>

<section class="sec-principal">
<?php
if( have_rows('banner_principal') ):?>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php while ( have_rows('banner_principal') ) : the_row();?>
                <div class="swiper-slide">
                    <div class="eckosBrick02 home01">
                        <img class="homebg" src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto@2x.png" alt="Logo ekos">
                        <p class="brickDescription BDhero">
                            <?php the_sub_field('texto');?>
                        </p>
                        <a class="actionButton hero" href="<?php the_sub_field('link_banner');?>" target="_blank"
                            ><img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow">Saiba mais
                        </a>
                        <div class="eckosSocials">
                            <a href="https://pt-br.facebook.com/institutoekosbrasil/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/facebook.svg" alt=""></a>
                            <a href="https://www.instagram.com/ekosbrasil/" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/instagram.svg" alt=""></a>
                            <a href="https://www.linkedin.com/company/ekos-brasil/?trk=public_profile_topcard_current_company&originalSubdomain=is" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/LinkedIn.svg" alt="" /></a>
                            <a href="https://www.youtube.com/channel/UCrFhaKaBFVsG4RxqKJvyzVg" target="_blank"><img src="/wp-content/themes/ekos-theme/assets/images/youtube.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="home-banner" style="background: url(<?php the_sub_field('imagem');?>)"></div>
                </div>
            <?php endwhile;?>
            </div>
        <div class="swiper-pagination"></div>               
    </div>
<?php endif;?>
</section>
<section class="somosPonte">
    <div class="eckosBrick01">
        <div class="hastag-ponte">
            <div class="border-title"></div>
            <span class="eckosBrickTag tagSomosPonte">#EcossistemaGlobal</span>
        </div>
        <h2 class="eckosBrickTitle TsomosPonte">SOMOS PONTE</h2>
        <p class="BDsomosPonte">
            Soluções técnicas e inovadoras para cultivar um legado
            positivo para as pessoas e para o meio ambiente.
        </p>
        <a class="actionButton ABsomosPonte" href="/solucoes">
            <img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow">Conheça nossas soluções
        </a>
    </div>
</section>
<section class="manifestoPeruacu">
    <div class="peruacu-col1">
        <div class="EB03Cards">
            <div class="hastag-manifesto">
                <div class="border-title"></div>
                <span class="eckosBrickTag tagEB03Cards">#NossoManifesto</span>
            </div>
            <h2 class="title-manifesto">Manifesto</h2>
            <p class="content-text-manifesto">
                Há 20 anos a semente de colaborar com a regeneração dos ecossistemas foi plantada pelo nosso fundador Ernesto Moeri, um geólogo suíço-brasileiro apaixonado pela natureza e movido pelo sonho de fomentar a sustentabilidade e preservar a biodiversidade do Brasil.
            </p>
            <a class="ABEB03Cards" href="http://ekos.blankst.digital/manifesto/">
                <img src="/wp-content/themes/ekos-theme/assets/images/fffarrowButtonRight.svg" alt="arrow">
            </a>
        </div>
    </div>
    <div class="peruacu-col2">
        <img src="/wp-content/themes/ekos-theme/assets/images/manifestoPhoto.svg" alt="" />
    </div>
</section>
<section class="manifestoPeruacu2">
    <div class="peruacu-col1">
        <div class="EB03Cards">
            <div class="hastag-manifesto">
                <div class="border-title"></div>
                <span class="eckosBrickTag tagEB03Cards">#CavernasdoPeruaçu</span>
            </div>
            <h2 class="title-manifesto">PERUAÇU</h2>
            <p class="content-text-manifesto">
                Mais de 10 anos contribuindo com a conservação do Parque Nacional Cavernas do Peruaçu. 
            </p>
            <a class="ABEB03Cards" href="http://fundoperuacu.ekosbrasil.org/">
                <img src="/wp-content/themes/ekos-theme/assets/images/fffarrowButtonRight.svg" alt="arrow">
            </a>
        </div>
    </div>
    <div class="peruacu-col2">
        <img src="/wp-content/themes/ekos-theme/assets/images/peruacuPhoto.svg">
    </div>
</section>
<section class="manifestoPeruacu lastType">
    <div class="peruacu-col1">
        <div class="EB03Cards">
            <div class="hastag-manifesto">
                <div class="border-title"></div>
                <span class="eckosBrickTag tagEB03Cards predhastag"><?php echo __( '#PERD', 'hastag-perd' );?></span>
            </div>
            <h2 class="title-manifesto predtitle"><?php echo __( 'PERD', 'texto-perd' );?></h2>
            <p class="content-text-manifesto predcontent">
                Termo de Parceria entre o Instituto Estadual de Florestas e o Instituto Ekos Brasil para Apoio às Ações de Consolidação da Unidade de Conservação do Parque Estadual do Rio Doce.
            </p>
            <a class="ABEB03Cards" href="http://ekos.blankst.digital/perd/">
                <img src="/wp-content/themes/ekos-theme/assets/images/fffarrowButtonRight.svg" alt="arrow">
            </a>
        </div>
    </div>
    <div class="peruacu-col2">
        <img src="http://ekos.blankst.digital/wp-content/uploads/2022/06/perdPhoto-scaled.jpg" alt="" />
    </div>
</section>
<section class="anosEckos">
    <div class="eckosBrick01">
        <div class="hastag-20anos">
            <div class="border-title"></div>
            <span class="eckosBrickTag tag20Anos">#InstitutoEkosBrasil</span>
        </div>
        <h2 class="eckosBrickTitle T20Anos">20 ANOS DE EKOS</h2>
        <p class="brickDescription BD20Anos">
            Essas duas décadas de existência mostram que todo esforço da
            equipe do Ekos valeu a pena e que a ideia do seu fundador,
            Ernesto Moeri, era realizável e sustentável. Hoje o Ekos é
            uma instituição de referência internacional. Conheça nossa
            história!
        </p>
        <a class="actionButton AB20Anos" href="https://ekosbrasil.org/wp-content/uploads/2022/02/book20anos.pdf" target="_blank">
            <img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow">Conheça nossa história
        </a>
    </div>
    <div class="substractImage">
        <img src="/wp-content/themes/ekos-theme/assets/images/Subtract.svg">
    </div>
</section>
<section class="nossoBlog">
    <div class="eckosBrick01">
        <div class="hastag-blog">
            <div class="border-title"></div>
            <span class="eckosBrickTag tagNossoBlog">#NossoBlog</span>
        </div>
        <h2 class="eckosBrickTitle TNossoBlog">PUBLICAÇÕES</h2>
    </div>
    <?php if($post_query->have_posts()):?>
        <div class="publicacoes">
            <?php while($post_query->have_posts()): $post_query->the_post();?>
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <div class="publicacao" style=" background: url(<?php echo $image[0]; ?>);">
                        <div class="publiContent">
                            <h2 class="publicacaoTitle"><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif;?>
</section>
<section class="contato">
    <div class="innerContact">
        <h2 class="contatoTitle">
            Entre em contato com o Ekos Brasil
        </h2>
        <a class="actionButton ABcontato modal-open" href="">
            <img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow"/>
            Fale conosco
        </a>
    </div>
</section>
<?php 
get_footer();