<?php 
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10
);
$argsProjeto = array(
    'post_type' => 'projeto',
    'posts_per_page' => 6,
    'paged' => $paged
);

$post_query = new WP_Query($args);
$projeto_query = new WP_Query($argsProjeto);

?>
    <section class="heroQS">
        <div class="heroContent">
            <div class="heroInfo">
                <a href="/pagina-inicial"><img src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto.svg" alt="INSTITUTO ECKOS LOGO"/></a>
                <p>
                20 anos de história e atuação em diversos setores
                </p>
            </div>
        </div>
        <img src="/wp-content/themes/ekos-theme/assets/images/portfolio2.png" alt="" class="heroImage">
    </section>
    <section class="experiencias">
        <div class="experienciasHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Portfólio</p>
                </div>
                <h2 class="headerTitle">EXPERIÊNCIAS POSITIVAS</h2>
            </div>
            <div class="TitleDescription">
                    <p class="TitleDescrip">Com 20 anos de história e atuação em diversos setores, o Instituto Ekos Brasil acumula cases de sucesso e experiências positivas com diferentes stakeholders.<br>Aqui, apresentamos algumas dessas experiências, que podem servir de inspiração para projetos futuros.</p>
                    <a class="actionButton hero modal-open" href="#">
                        <img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow">Fale Conosco
                    </a>
            </div>
        </div>
        <!-- <div class="counterImpactos">
            <div class="cardImpactos">
                <h3 class="titleImpactos">Planos de manejo</h3>
                <div class="counter">
                    <span class="numberImpactos counter-up" data-count-to="150"></span>
                    <span class="numberImpactos">+</span>
                </div>
                <p class="textImpactos">Planos de manejo já desenvolvidos</p>
            </div>
            <div class="cardImpactos">
                <h3 class="titleImpactos">Pessoas impactadas</h3>
                <div class="counter">
                    <span class="numberImpactos counter-up" data-count-to="150"></span>
                    <span class="numberImpactos">+</span>
                </div>
                <p class="textImpactos">Pessoas impactadas em eventos</p>
            </div>
            <div class="cardImpactos">
                <h3 class="titleImpactos">Hectares de biomas preservados</h3>
                <div class="counter">
                    <span class="numberImpactos counter-up" data-count-to="150"></span>
                    <span class="numberImpactos">+</span>
                </div>
                <p class="textImpactos">Hectares de biomas preservados com nossos parques apoiado</p>
            </div>
        </div> -->
    </section>
    <section class="projetos">
        <div class="projetosHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Portfólio</p>
                </div>
                <h2 class="headerTitle">NOSSOS PROJETOS</h2>
            </div>
        </div>
        <div class="filtroProjetos">
        <?php $terms = get_terms( array(
            'taxonomy' => 'cat_projetos',
            'hide_empty' => false,
        ));?>
        <select name="projeto_field" id="projeto-field" class="filter-select projeto-select">
            <option value="" disabled selected hidden>Projetos</option>
            <?php foreach($terms as $term){
                echo '<option id="'.$term->slug.'" value="'.$term->slug.'">'.$term->name.'</option>';
            } ?>
        </select>
        </div>
        <?php if($projeto_query->have_posts()):?>
            <div class="articlesProjetos">
                <?php while($projeto_query->have_posts()): $projeto_query->the_post();?>
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <?php endif; ?>
                    <div class="articleInd" style=" background: url(<?php echo $image[0]; ?>);">
                        <div class="artText">
                            <div class="artHeader">
                                <h3 class="artTitle"><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
                                <img src="/wp-content/themes/ekos-theme/assets/images/arrowDiagonalUp.svg" alt="">
                            </div>
                            <span class="artCategoria"><?php the_content(); ?></span>
                        </div>
                    </div>
                <?php endwhile; ?>
                    <div class="pagination">
                        <?php
                            echo paginate_links( array(
                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                'total'        => $projeto_query->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'plain',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i></i> %1$s', __( '&#8592;', 'text-domain' ) ),
                                'next_text'    => sprintf( '%1$s <i></i>', __( '&#8594;', 'text-domain' ) ),
                                'add_args'     => false,
                                'add_fragment' => '',
                            ) );
                         ?>
                    </div>
            </div>
        <?php endif; ?>
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
                <img src="/wp-content/themes/ekos-theme/assets/images/arrowButtonRight.svg" alt="arrow"/>Fale conosco
            </a>
        </div>
    </section>

<?php
get_footer();
?>