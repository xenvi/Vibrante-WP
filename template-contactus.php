<?php 
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1><?php the_title();?></h1>

        <div class="row">

            <div class="col-lg-9">
                <?php get_template_part('includes/section','content'); ?>
            </div>
            <div class="col-lg-3 widgets">
            <?php if(is_active_sidebar('blog-sidebar')):?>
                    <?php dynamic_sidebar('blog-sidebar');?>
                <?php endif;?>
            </div>
        
        </div>
        
    </div>
</section>

<?php get_footer(); ?>