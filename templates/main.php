<?php
//Template name: Main page
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
                <p class="offer-subtitle">
                    <?php echo $first_section['text']; ?>
                </p>
                <div class="works-link-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_down.svg" alt=""
                        class="works-link-image">
                    <a href="#works" class="link">Our Works</a>
                </div>
            </div>
            <div>
               
                <video autoplay loop muted playsinline class="animation-video">
                    <source src="<?php echo get_template_directory_uri() ?>/assets/images/1.mp4" type="video/mp4">
                </video>

                <div class="swipe-down-btn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_down.svg" alt=""
                        class="works-link-image">
                    <p>Swipe down</p>
                </div>
                <p class="mob-offer-subtitle">
                <?php echo $first_section['text']; ?>
                </p>

            </div>
        </div>

    </div>
</section>

<section class="works works-page" id="works">

    <div class="container">

    <div class="works-wrap">

<?php
    // задаем нужные нам критерии выборки данных из БД
    $args = array(
        'post_type' => 'work',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_of_work',
                'field' => 'term_id',
                'terms' => [5]
            )
        ),
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

<a href="<?php echo site_url('projects'); ?>" class="work-btn-link animelem fadeInElem">
<button class="works-btn button-white">
    See more case studies
    <svg width="13px" height="13px" viewBox="0 0 13 13" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Line 3</title>
        <g id="Oddbee_Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
            stroke-linecap="square">
            <g id="Main-Copy-2" transform="translate(-78.000000, -544.000000)" stroke="#222222"
                stroke-width="2">
                <g id="Group-8" transform="translate(77.000000, 180.000000)">
                    <g id="Group-2" transform="translate(3.000000, 361.000000)">
                        <path d="M5.21912462,5 L9.5,9.5 L5.21912462,14 M-0.5,9.5 L7.79159324,9.5"
                            id="Line-3"
                            transform="translate(4.500000, 9.500000) translate(-4.500000, -9.500000) ">
                        </path>
                    </g>
                </g>
            </g>
        </g>
    </svg>
</button>

</a>



    </div>
    <!-- container  -->
</section>


<?php
$third_section = get_field('third_section');


?>

<section class="services s-padding">
    <div class="container">
        <h2 class="services-title animelem fadeInElem"><?php echo $third_section['title']; ?></h2>
        <div class="services-items">

        <?php
        foreach ($third_section['service_item'] as $item):?>
            <div class="services-item">
            <div class="services-item-line animelem lineElem"></div>
            <h3 class="services-item-title">
                <?php echo $item['title'] ?>
            </h3>
            <ul class="services-item-list animelem fadeInElem">
                <?php
                    foreach($item['services'] as $service): ?>
                        <li><?php echo $service['item']; ?></li>
                    <?php endforeach;
                ?>
            </ul>
        </div>
            
       <?php endforeach; ?>

        </div>
    </div>

</section>


<section class="approach s-padding">
    <div class="container">
        <div class="approach-wrap animelem fadeInElem">
            <div>
                <h2 class="approach-title s-title">
                    <?php
                    $fourth_section = get_field('fourth_section');
                    echo $fourth_section['title'];
                    ?>
                </h2>
            </div>
            <div>
                <p class="approach-description">
                <?php echo $fourth_section['text']; ?>
                </p>
                <a href="http://" class="link">Learn how we design</a>
            </div>
        </div>

    </div>
</section>


<section class="clients s-padding">
    <div class="container">
        <div class="clients-line animelem lineElem"></div>
        <div class="clients-wrap animelem fadeInElem">
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/550px.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/Canopy_Labs.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/FITC.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/LeanIn_Canada.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/City_of_Mississauga.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/logo_balance.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/Highline-Beta-Black.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/soco_long_positive.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/Stocksy.svg" alt=""
                    class="client-logo">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/clients/futurpreneur_main_logo_web_color.svg" alt=""
                    class="client-logo">
            </div>
          
        </div>
    </div>
</section>





<?php get_footer(); ?>