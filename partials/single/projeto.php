<?php 
get_header();
?>
<?php if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
        <section class="heroQS">
                <div class="heroContent">
                    <div class="heroInfo">
                    <a href="/pagina-inicial">
                        <img src="/wp-content/themes/ekos-theme/assets/images/InstitutoEkosBR_Colorido_Horizontal_Preto.svg" alt="INSTITUTO ECKOS LOGO"/>
                    </a>
                        <p>Projetos</p>
                    </div>
                </div>
                <figure class="heroImage">
                    <?php the_post_thumbnail();?>
                </figure>
        </section>
        <section class="singlePost">
            <div class="singlePostHeader">
                <div class="headerandTag">
                    <div class="tag">
                        <span class="line"></span>
                        <p>#NossosProjetos</p>
                    </div>
                    <h2 class="headerTitle"><?php the_title();?></h2>
                    <div class="newsAuthorDate">
                        <span class="newsDate"><?php echo get_the_date('d M Y');?></span>
                    </div>
                </div>
                
            </div>
            <div class="newsInd">
                <?php the_content();?>
            </div>
        </section>
    <?php endwhile;?>
<?php endif;?>
<?php 
$args = array(
    'post_type' => 'projeto',
    'posts_per_page' => 3,
);

$ultimos_query = new WP_Query($args);

if($ultimos_query->have_posts()):
?>
    <section class="vejaTambem">
        <h2 class="vejaTambemHeader">Veja também</h2>
        <div class="postsBlog">
            <?php while($ultimos_query->have_posts()): $ultimos_query->the_post();?>
                <div class="postInd">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <?php endif;?>
                    <div class="postImageText" style=" background: url(<?php echo $image[0]; ?>);">
                        <div class="postHeadline">
                            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                        </div>
                    </div>
                    <?php
                        $allcategory = get_the_category(); 
                        ?>
                        <div class="postCategoriaData">
                            <?php foreach ($allcategory as $category) { ?>
                                <a href="<?php the_permalink()?>" class="postCategoria"><?php echo $category->cat_name; ?></a>
                                <?php 
                            }?>
                            <span class="postData"><?php the_date('d M Y'); ?></span>
                        </div>
                </div>
            <?php endwhile;?>
        </div>
    </section>
    <?php else:?>
        <h2>Nenhum projeto encontrado</h2>
<?php endif;?>
<?php
get_footer();
?>