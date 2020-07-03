<?php get_header(); ?>
<section class="page-landing">
    <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>
    <div class="waves-wrapper">
        <div class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,176C384,171,480,181,576,202.7C672,224,768,256,864,261.3C960,267,1056,245,1152,218.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.5" d="M0,96L48,90.7C96,85,192,75,288,96C384,117,480,171,576,197.3C672,224,768,224,864,218.7C960,213,1056,203,1152,197.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <svg class="wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.25" d="M0,96L48,80C96,64,192,32,288,42.7C384,53,480,107,576,149.3C672,192,768,224,864,240C960,256,1056,256,1152,229.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>
</section>

<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-9">
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