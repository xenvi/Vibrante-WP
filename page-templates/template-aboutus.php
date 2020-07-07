<?php 
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>
<section class="page-landing">
    <span><?php the_title();?></span>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <div class="waves-wrapper">
        <div class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,154.7C384,192,480,256,576,282.7C672,309,768,299,864,256C960,213,1056,139,1152,122.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.5" d="M0,32L40,64C80,96,160,160,240,176C320,192,400,160,480,170.7C560,181,640,235,720,240C800,245,880,203,960,165.3C1040,128,1120,96,1200,106.7C1280,117,1360,171,1400,197.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <svg class="wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.25" d="M0,0L40,21.3C80,43,160,85,240,85.3C320,85,400,43,480,74.7C560,107,640,213,720,234.7C800,256,880,192,960,154.7C1040,117,1120,107,1200,122.7C1280,139,1360,181,1400,202.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>
    </div>
</section>
<section class="page-wrap">
    <div class="container">

    <section class="row">
        <div class="col-lg-9 wrapper">
            <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid"/>
                <?php endif;?>

            <div class="content"><?php get_template_part('includes/section','content'); ?></div>
        </div>
        <div class="col-lg-3 widgets">
            <?php if(is_active_sidebar('page-sidebar')):?>
                <?php dynamic_sidebar('page-sidebar');?>
            <?php endif;?>
        </div>
    </section>

    </div>
</section>

<?php get_footer(); ?>