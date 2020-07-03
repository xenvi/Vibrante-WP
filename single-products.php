<?php get_header(); ?>
<section class="title-wrapper">
    <div class="text">
        <div class="title"><span><?php the_title();?></span></div>
        <p class="subtext"><?php echo get_the_date('F j, Y');?></p>
        
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </div>
    <div class="waves-wrapper">
        <div class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,293.3C384,309,480,299,576,277.3C672,256,768,224,864,229.3C960,235,1056,277,1152,288C1248,299,1344,277,1392,266.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>
</section>
<section class="page-wrap">
    <div class="container">

    <!-- <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail"/>
    <?php endif;?> -->

        <div class="row">
            <div class="col-lg-9">
                <?php get_template_part('includes/section','products'); ?>
                <?php wp_link_pages();?>
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