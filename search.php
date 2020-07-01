<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-9">
                <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>
                <?php get_template_part('includes/section','search-results'); ?>
                <?php echo paginate_links();?>
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