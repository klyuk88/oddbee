<?php
//Template name: Approach page
?>
<?php get_header(); ?>

<section class="offer">
    <div class="container">
        <div class="offer-content approach-page">
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

            </div>
            <div>
                
                <video autoplay loop muted playsinline class="animation-video approach-page">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/2.mp4" type="video/mp4">
                </video>

                <div class="swipe-down-btn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_down.svg" alt=""
                        class="works-link-image fadeInElem">
                    <p>Swipe down</p>
                </div>
                <p class="mob-offer-subtitle">
                    <?php echo $first_section['text']; ?>
                </p>

            </div>
        </div>

    </div>
</section>


<section class="services s-padding approach-page">
    <div class="container">
        <h2 class="services-title animelem fadeInElem">
            <?php
            $second_section = get_field('second_section');
            echo $second_section['title'];
            ?>
        </h2>
        <div class="services-items approach-page">
                <?php
                    foreach($second_section['items'] as $item): ?>
                    <div class="services-item">
                        <div class="services-item-line animelem lineElem"></div>
                        <h3 class="services-item-title animelem fadeInElem">
                            <?php echo $item['title']; ?>
                        </h3>
                        <p class="our-values-about animelem fadeInElem">
                        <?php echo $item['text']; ?>
                        </p>
                    </div>
               <?php endforeach; ?>

        </div>
    </div>
</section>


<section class="approach s-padding change-black-bg approach-page">
    <div class="container">
        <div class="approach-wrap animelem fadeInElem">
            <div>
                <h2 class="approach-title approach-page s-title animelem fadeInElem">
                    <?php
                    $third_section = get_field('third_section');
                    echo $third_section['title'];
                    ?>
                </h2>
            </div>
            <div>
                <p class="approach-description approach-page animelem fadeInElem">
                <?php echo $third_section['text']; ?>
                </p>
            </div>
        </div>


    </div>
</section>


<section class="team">
    <div class="container team-sec">
        <div class="team-wrap">
            <?php
            $fourth_section = get_field('fourth_section');
            foreach($fourth_section['items'] as $item): ?>
            <div class="team-item">
                <div class="team-item-photo">
                    <img src="<?php echo $item['image']; ?>" alt="" class="main-photo">
                    <img src="<?php echo $item['image_hover']; ?>" alt="" class="hover-photo">
                </div>

                <h5 class="team-item-title"><?php echo $item['name']; ?></h5>
                <p class="team-item-post"><?php echo $item['post']; ?></p>
            </div>
           <?php endforeach;
            ?>
    </div>
</section>

<section class="career">
    <div class="container">
        <div class="career-grid">
            <div class="career-text-content animelem fadeInElem">
                <h2 class="s-title">
                    <?php
                    $fifth_section = get_field('fifth_section');
                    echo $fifth_section['title'];
                    ?>
                </h2>
                <p class="career-about">
                <?php echo $fifth_section['text']; ?>
                </p>
                <p class="career-send-resume">
                    Send your portfolio/resume to <a href="mailto:<?php echo $fifth_section['email'] ?>"
                        class="resume-link link"><?php echo $fifth_section['email'] ?></a>
                </p>

            </div>
            <div class="career-image-wrap animelem fadeInElem">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/illustration.svg" alt=""
                    class="career-image">
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>