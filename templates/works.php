<?php
//Template name: Works page
?>
<?php get_header(); ?>


<section class="offer">
    <div class="container">
        <div class="offer-content">
            <div class="">
                <h1 class="offer-title">
                    <?php
                    $first_section = get_field('first_section');
                    echo $first_section['title'];
                    ?>
                </h1>
                <video autoplay loop muted playsinline class="animation-video works-page mobile">
                    <source src="<?php echo get_template_directory_uri() ?>/assets/images/works.mp4" type="video/mp4">

                </video>

                <div class="swipe-down-btn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_down.svg" alt=""
                        class="works-link-image">
                    <p>Swipe down</p>
                </div>
                <p class="offer-subtitle work-page">
                <?php echo $first_section['text']; ?>
                </p>
                <div class="work-tags-wrap">
                    <p class="work-tags-title">Show: </p>
                    <div class="work-tags-items">
                    <div class="works-tags-item active" data-type-id="">
                            <span>All</span>
                    </div>
                    <?php
                     $args = [
                        'taxonomy' => 'type_of_work',
                        'exclude' => 5
                     ];
                     $types_works = get_terms($args);
                     foreach($types_works as $type):
                     ?>
                        <div class="works-tags-item" data-type-id="<?php echo $type->term_id; ?>" data-slug="<?php echo $type->slug; ?>">
                            <span><?php echo $type->name; ?></span>
                        </div>
                    <?php endforeach;
                    ?>

                    </div>
                </div>
            </div>
            <div>
                <video autoplay loop muted playsinline class="animation-video works-page">
                    <source src="<?php echo get_template_directory_uri() ?>/assets/images/works.mp4" type="video/mp4">
                    
                </video>

            </div>
        </div>

    </div>
</section>


<section class="works works-page">

    <div class="container work-page">

        <div class="works-wrap work-page">

        <?php
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'post_type' => 'work',
                'posts_per_page' => -1,
                'orderby'     => 'date',
	            'order'       => 'ASC',
            );

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
            wp_reset_postdata();
        
        
        ?>
        
        </div>
        <!-- works-wrap  -->


    </div>
    <!-- container  -->
</section>



<?php get_footer(); ?>