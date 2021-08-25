<div class="grid-item">
                <div class="work-item animelem fadeUpElem">
                    <div class="">
                        <div class="work-item-image-wrap">
                            <a href="<?php the_permalink(); ?>" class="item-image-link">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="work-image">
                            </a>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="work-title-link">
                            <h4 class="work-item-title">
                                <span><?php the_title(); ?></span>
                                <?php the_field('subtitle') ?>
                            </h4>
                        </a>

                        <div class="work-item-tags">
                            <?php
                            $post_id = $post->ID;
                            $terms = get_the_terms($post_id,'type_of_work');
                            if ($terms):
                               foreach($terms as $term):
                                if(($term->term_id) != 5 ):
                                    echo '<p>'.$term->name.'</p>';
                                endif;
                                    
                               endforeach; 
                            endif;
                            ?>
                        </div>
                        <!-- work-tags  -->
                    </div>


                </div>
                <!-- work-item  -->
            </div>
            <!-- grid-item  -->