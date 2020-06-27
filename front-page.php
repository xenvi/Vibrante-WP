<?php get_header(); ?>

    <section class="landing">
    <!-- <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('header');?>" alt="<?php the_title();?>" class="landing-img"/>
    <?php endif;?> -->
    </section>

<section class="page-wrap">
    <div class="container">

    <?php get_template_part('includes/section','content'); ?>

    </div>
</section>

<?php get_footer(); ?>