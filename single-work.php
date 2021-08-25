<?php get_header(); ?>


<section class="work-cover">
    <div class="cover-block">
        <img
        src="<?php the_field('cover'); ?>"
        alt=""
        class="cover-image">
    </div>
</section>



<section class="single-work-tags">
    <div class="container">
        <div class="single-work-tags-wrap">

            <?php $client = get_field('client');
    if($client): ?>
            <div class="tag-item">
                <h6>Client:</h6>
                <ul>
                    <li><?php echo $client; ?></li>
                </ul>

            </div>

            <?php endif;
    ?>


            <?php $industry = get_field('industry');
        if($industry): ?>
            <div class="tag-item">
                <h6>Industry:</h6>
                <ul>
                    <?php
                    
                    foreach ($industry as $item) { ?>
                    <li><?php echo $item['item'] ?></li>
                    <?php }
                ?>
                </ul>
            </div>

            <?php endif;
        ?>

            <?php  $services = get_field('services');
            if($services): ?>
            <div class="tag-item">
                <h6>Services:</h6>
                <ul>
                    <?php
                    foreach ($industry as $item) { ?>
                    <li><?php echo $item['item'] ?></li>
                    <?php }
                        ?>
                </ul>

            </div>
            <?php endif; ?>
        </div>

    </div>
</section>




<section class="s-single-work-title">
    <div class="container">
        <h1 class="single-work-title"><?php the_title(); ?></h1>
    </div>

</section>

<section class="s-challenge">
    <div class="container">
        <div class="s-challenge-line"></div>
        <div class="s-challenge-grid">
            <div>
                <h2 class="challenge-title">Challenge</h2>
            </div>
            <div>
                <p class="challenge-text">
                    <?php the_field('challenge'); ?>
                </p>

                <?php
                    $project_link = get_field('project_link');
                    if($project_link):
                ?>
                <div class="single-work-link-wrap">
                    <a href="<?php echo $project_link; ?>" class="single-work-link link" target="_blank">Visit the
                        site</a>
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/arrow_submit.svg' ?>" alt=""
                        class="single-work-arrow">
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>


</section>


<?php the_content(); ?>


<?php $review = get_field('review') ?>
<?php if($review): ?>
    <section class="section-review">
    <div class="container">
        <div class="review-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-icon.svg" alt=""
                class="review-quotes">
            <p class="review-content">
                <?php echo $review['content']; ?>
            </p>
            <div class="review-company-block">
                <h5 class="review-author-name">
                <?php echo $review['author']; ?>
                </h5>
                <p class="review-company-name">
                <?php echo $review['company']; ?>
                </p>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>




<section class="related-works-section">
    <div class="container">
        <div class="related-works-title-block">
            <h2 class="related-works-title">Related works</h2>

            <div class="related-works-link-block">
                <a href="<?php echo site_url('/projects'); ?>" class="related-works-link_more link">See more case studies</a>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_submit.svg" alt="">
            </div>

        </div>

        
        <div class="related-works-grid">

        <?php
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'post_type' => 'work',
                'posts_per_page' => 3,
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
    </div>
</section>


<?php get_footer(); ?>