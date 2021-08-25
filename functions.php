<?php

add_theme_support( 'post-thumbnails' );


add_action( 'wp_enqueue_scripts', 'oddbee_scripts' );

function oddbee_scripts() {

	wp_enqueue_style( 'styles', get_stylesheet_uri() );
	wp_enqueue_style( 'main_styles', get_template_directory_uri().'/assets/css/styles.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', null, null, true );
	wp_enqueue_script( 'scroll_trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', null, null, true );
	wp_enqueue_script( 'scroll_to', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollToPlugin.min.js', null, null, true );
	// wp_enqueue_script( 'lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', null, null, true );
	wp_enqueue_script( 'bodymovin', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.12/lottie.min.js', null, null, true );
	wp_enqueue_script( 'scripts', get_template_directory_uri().'/assets/js/main.js' , null, null, true );
}

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'main_menu' => 'Main menu'
	] );
} );


add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'work', [
		'label'  => null,
		'labels' => [
			'name'               => 'Works', // основное название для типа записи
			'singular_name'      => 'Work', // название для одной записи этого типа
			'add_new'            => 'Add work', // для добавления новой записи
			'add_new_item'       => 'Add new work', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit work', // для редактирования типа записи
			'new_item'           => 'New work', // текст новой записи
			'view_item'          => 'View work', // для просмотра записи этого типа.
			'search_items'       => 'Search work', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Works', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['type_of_work'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        // 'rest_controller_class' => 'WP_REST_Posts_Controller'
	] );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'type_of_work', [ 'work' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Type of work',
			'singular_name'     => 'Type of work',
			'search_items'      => 'Search Genres',
			'all_items'         => 'All Genres',
			'view_item '        => 'View Genre',
			'parent_item'       => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Edit Genre',
			'update_item'       => 'Update Genre',
			'add_new_item'      => 'Add New Genre',
			'new_item_name'     => 'New Genre Name',
			'menu_name'         => 'Type of work',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => true, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}

## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'1536x1536',
		'2048x2048',
	] );
}

# Изменим максимально допустимый размер картинки по ширине/высоте
add_filter( 'big_image_size_threshold', function(){
	return 5500;
} );

# Отменим `-scaled` размер - ограничение максимального размера картинки
// add_filter( 'big_image_size_threshold', '__return_zero' );
// add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );



add_action('wp_footer', function() { ?>
    <script>
        jQuery(function ($) {
            $('.works-tags-item').click(function () {
    
                let attr = $(this).attr('data-type-id');
                let slug = $(this).attr('data-slug');
    
                $.ajax({
                    url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
                    type: 'GET',
                    data: 'action=type_of_work&type_id=' + attr,
                    success: function (data) {
                        $('.container.work-page').html(data);

						gsap.to(window, {
                            duration: 0.5,
                            scrollTo: {
                                y: '.work-tags-wrap',
                                // y: '#' + slug,
                                offsetY: 30
                            }
                        })
                       
                        if(slug) {
                        gsap.fromTo('.works-link-image',
                    {
                        y: -3
                    },
                    {
                        duration: 1,
                        y: 3,
                        repeat: -1,
                        yoyo: true
    
                    })
                        } 
                    }
                });
            });
        });
    </script>
<?php
    });
    
    
    add_action( 'wp_ajax_type_of_work', 'type_work' );
    add_action( 'wp_ajax_nopriv_type_of_work', 'type_work' );
    
    function type_work() {
     
        $type_id = $_GET['type_id']; ?>

		<script>
		gsap.set('.animate, .line-animate', { autoAlpha: 0 })
			
		if(document.querySelector('.line-animate')) {
			gsap.fromTo('.line-animate', {
               width: 0
           },{
               width: '100%',
               autoAlpha: 1,
               duration: 0.8,
               ease: 'power4.in'
           })
		}

           gsap.to('.animate', {
               autoAlpha: 1,
               duration: 0.5,
			   delay: 0.8,
               ease: 'power4.in'
           });
		</script>
      
        
       <?php if($type_id):
            $term = get_term($type_id);
        ?>
         
            <div class="about-tag-wrap" id="<?php echo $term->slug ?>">
                <div class="about-tag-wrap-line line-animate"></div>
                <div class="animate">
                    <h2 class="about-tag-title">
                        <?php echo $term->name; ?>
                    </h2>
                    
                    <p class="about-tag-text">
                        <?php echo $term->description; ?>
                    </p>
                    <div class="works-link-wrap about-tag-btn">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_down.svg" alt="" class="works-link-image">
                        <a href="" class="link"><?php echo $term->name; ?> Portfolio</a>
                    </div>
    
                </div>
    
                <div class="animate">
                    <h3 class="about-tag-services-title">
                        <?php echo $term->name; ?> Capabilities:
                    </h3>
                    <div class="about-tag-services-items">
                        <p>
                            <?php
                            $text = the_field('capabilities_text', 'type_of_work_'.$term->term_id);
                            
                            ?>
                        </p>
                    </div>
    
                </div>
    
            </div>
    
        <?php
        // задаем нужные нам критерии выборки данных из БД
        $args = array(
            'post_type' => 'work',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type_of_work',
                    'field' => 'term_id',
                    'terms' => $type_id
                )
            ),
            'posts_per_page' => -1,
            'orderby'     => 'date',
            'order'       => 'ASC',
            
        );
    
        else:
    
            $args = array(
                'post_type' => 'work',
                'posts_per_page' => -1,
                'orderby'     => 'date',
                'order'       => 'ASC',
            );
    
    
        endif; ?>

    
        <div class="works-wrap work-page filter animate">
            <?php
            $query = new WP_Query( $args );
            // Цикл
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
                <?php get_template_part('template-parts/work','item') ?>

        <?php }
        } else {
            // Постов не найдено
        }
        // Возвращаем оригинальные данные поста. Сбрасываем $post.
        wp_reset_postdata(); ?>
        </div>
        <!-- works-wrap  -->
            
        <?php wp_die(); 
    }






