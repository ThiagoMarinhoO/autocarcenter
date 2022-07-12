<?php 
/**
 * General options to config
 *
 * @package Antares
 */

 /* CPT projetos */

 function cpt_projeto() {

    $labels = array(
        'name' => 'Projetos',
        'singular_name' => 'Projeto',
        'add_new' => 'Adicionar projeto',
        'add_new_item' => 'Adicionar projeto',
        'edit_item' => 'Editar projeto',
        'new_item' => 'Novo projeto',
        'all_items' => 'Todos Projetos',
        'view_item' => 'Ver projeto',
        'search_items' => 'Buscar projeto',
        'not_found' =>  'Nenhum projeto encontrado',
        'not_found_in_trash' => 'Nenhum projeto encontrado', 
        'parent_item_colon' => '',
        'menu_name' => 'Projetos',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'projeto'),
        'query_var' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'excerpt'
        )
    );
    register_post_type( 'projeto', $args );
    
    }
    add_action( 'init', 'cpt_projeto' );


// Taxonomia categorias projetos


function wporg_register_taxonomy_cat_projetos() {
    $labels = array(
        'name'              => _x( 'Categorias', 'taxonomy general name' ),
        'singular_name'     => _x( 'Categorias', 'taxonomy singular name' ),
        'search_items'      => __( 'Pesquisar categorias' ),
        'all_items'         => __( 'Todas as categorias' ),
        'parent_item'       => __( 'Parent categorias' ),
        'parent_item_colon' => __( 'Parent categorias:' ),
        'edit_item'         => __( 'Editar categorias' ),
        'update_item'       => __( 'Atualizar categorias' ),
        'add_new_item'      => __( 'Add nova categoria' ),
        'new_item_name'     => __( 'Nome da nova categoria' ),
        'menu_name'         => __( 'Categorias projetos' ),
    );
    $args   = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'cat_projetos' ],
    );
    register_taxonomy( 'cat_projetos', [ 'projeto' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_cat_projetos' );


/*****************************************************/

add_action('after_setup_theme' , 'nav_menu');
function nav_menu(){
    register_nav_menus(
        array(
            'primary' => 'primary'
        )
    );
}

/*****************************************************/
// Filtro blog

add_action('wp_ajax_filter_blog', 'filter_blog');
add_action('wp_ajax_nopriv_filter_blog', 'filter_blog');

function filter_blog(){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $type_field = $_POST['type_field']; 
    $cat_field = $_POST['cat_field'];
	if(!empty($type_field)  && empty($cat_field)){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
            'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $type_field,
            ),
            ),
        );   
    }
    if(!empty($cat_field) && empty($type_field)){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
            'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $cat_field,
            ),
            ),
        ); 
    }
    if(!empty($cat_field) && !empty($type_field)){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,            
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $type_field,
                ),
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $cat_field,
                ),
            ),
        );
    }
    $filter_query = new WP_Query($args);

    if( $filter_query->have_posts() ) :
        while( $filter_query->have_posts() ): $filter_query->the_post();
            ?>
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
                            <span class="postCategoria"><?php echo $category->cat_name; ?></span>
                            <?php 
                        }?>
                        <span class="postData"><?php the_date('d M Y'); ?></span>
                    </div>
                </div>
            <?php
        endwhile;?>
        <div class="pagination">
        <?php
            echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $filter_query->max_num_pages,
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
        <?php
        wp_reset_postdata();
    else :
        echo 'Nenhuma postagem encontrada';
    endif;

    die();
}

/*****************************************************/
// Filtro projetos


add_action('wp_ajax_filter_projeto', 'filter_projeto');
add_action('wp_ajax_nopriv_filter_projeto', 'filter_projeto');

function filter_projeto(){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $projeto_field = $_POST['projeto_field']; 
	if(!empty($projeto_field)){
        $args_projeto = array(
            'post_type' => 'projeto',
            'posts_per_page' => 6,
            'paged' => $paged,
            'tax_query' => array(
            array(
                'taxonomy' => 'cat_projetos',
                'field' => 'slug',
                'terms' => $projeto_field,
            ),
            ),
        );   
    }
    $projeto_query = new WP_Query($args_projeto);

    if( $projeto_query->have_posts() ) :
        while( $projeto_query->have_posts() ): $projeto_query->the_post(); ?>
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
        <?php endwhile; 
        else :
            echo 'Nenhum projeto encontrado';
        endif; 

        die();
}

?>
