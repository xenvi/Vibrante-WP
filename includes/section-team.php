<?php
    $args = array(
        'post_type' => 'team',
        'orderby' => 'date',
        'order'   => 'ASC');
    $team = new WP_Query( $args );
    if( $team->have_posts() ): while( $team->have_posts() ): $team->the_post(); ?>

            <div class="row member">
                <div class="col-lg-4">
                    <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url('profile');?>" alt="<?php the_title();?>" class="img-fluid"/>
                    <?php endif;?>
                </div>
                <div class="col-lg-8">
                    <h3 class="name"><?php the_title();?></h3>
                    <span class="title"><?php the_field('title');?> ━</span>
                    <div class="content"><?php the_content(); ?></div>
                    <ul class="fields">
                        <li><a href=`<?php the_field('instagram');?>`><i class="fab fa-instagram"></i></a></li>
                        <li><a href=`<?php the_field('twitter');?>`><i class="fab fa-twitter"></i></a></li>
                        <li><a href=`<?php the_field('linkedin');?>`><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <?php endwhile; else: endif; wp_reset_query(); ?>