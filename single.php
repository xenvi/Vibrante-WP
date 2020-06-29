<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-9">
                <?php get_template_part('includes/section','blogcontent'); ?>

                <?php wp_link_pages();?>
            </div>
        
            <div class="col-lg-3 widgets">
                <?php if(is_active_sidebar('blog-sidebar')):?>
                    <?php dynamic_sidebar('blog-sidebar');?>
                <?php endif;?>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>