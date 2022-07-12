<?php 
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => $paged
);
$the_query = new WP_Query($args);
?>
<section class="heroQS blog-header">
        <div class="heroContent">
            <div class="heroInfo">
                <a href="/pagina-inicial"><img src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto@2x.png" alt="INSTITUTO ECKOS LOGO"/></a>
                <p>Blog</p>
                <span class="TitleDescrip">Confira nossos artigos, notícias e publicações autorais</span>
            </div>
        </div>
        <img src="/wp-content/themes/ekos-theme/assets/images/blogHome.png" alt="" class="heroImage">
</section>
<section class="blog">
    <div class="blogHeader">
            <div class="headerandTag">
                <div class="tag">
                    <span class="line"></span>
                    <p>#Conteúdo</p>
                </div>
                <h2 class="headerTitle">FIQUE POR DENTRO</h2>
            </div>
            <div class="TitleDescription">
                    <p class="TitleDescrip">Conteúdo conscientiza, educa, facilita, gera diálogo e estreita relações. Confira nossos artigos, notícias, publicações autorais e compartilhe com a sua rede.</p>
            </div>
        </div>
    <div class="filtrosBlog">
        <form id="filterBlog">
            <div class="filtroProjetos">
                <?php 
                $blogCat = get_term_by('id', 86, 'category');
                $workingCat = get_term_by('id', 851, 'category');
                $EntrevistasCat = get_term_by('id', 852, 'category');
                ?>
                <select name="type_field" id="type-field" class="filter-select">
                    <option value="" disabled selected hidden>Tipo</option>
                    <option value="<?php echo $blogCat->slug?>"><?php echo $blogCat->name;?></option>
                    <option value="<?php echo $workingCat->slug?>"><?php echo $workingCat->name;?></option>
                    <option value="<?php echo $EntrevistasCat->slug?>"><?php echo $EntrevistasCat->name;?></option>
                </select>
            </div>
            <div class="filtroProjetos">
                <?php $terms = get_terms( array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                ));?>
                <select name="cat_field" id="cat-field" class="filter-select">
                    <option value="" disabled selected hidden>Categorias</option>
                    <?php foreach($terms as $term){
                        echo '<option id="'.$term->slug.'" value="'.$term->slug.'">'.$term->name.'</option>';
                    } ?>
                </select>
            </div>
        </form>
    </div>
    <?php if($the_query->have_posts()): ?>
        <div class="postsBlog">
            <?php while($the_query->have_posts()): $the_query->the_post();?>
                <div class="postInd">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php endif;?>
                    <div class="postImageText" style=" background: url(<?php echo $image[0]; ?>);">
                        <div class="postHeadline">
                            <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                        </div>
                    </div>
                    <?php
                    $allcategory = get_the_category(); 
                    ?>
                    <div class="postCategoriaData">
                        <?php foreach ($allcategory as $category) { ?>
                            <a  href="<?php the_permalink()?>" class="postCategoria"><?php echo $category->cat_name; ?></a>
                            <?php 
                        }?>
                        <span class="postData"><?php the_date('d M Y'); ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="pagination">
        <?php
            echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $the_query->max_num_pages,
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
    <?php endif;?>
</section>


<?php
get_footer();
?>