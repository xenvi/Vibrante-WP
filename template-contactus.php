<?php 
/*
Template Name: Contact Us
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L40,106.7C80,149,160,235,240,245.3C320,256,400,192,480,186.7C560,181,640,235,720,256C800,277,880,267,960,250.7C1040,235,1120,213,1200,202.7C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.5" d="M0,192L40,197.3C80,203,160,213,240,197.3C320,181,400,139,480,144C560,149,640,203,720,234.7C800,267,880,277,960,266.7C1040,256,1120,224,1200,213.3C1280,203,1360,213,1400,218.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <svg class="wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.25" d="M0,64L40,90.7C80,117,160,171,240,170.7C320,171,400,117,480,112C560,107,640,149,720,176C800,203,880,213,960,218.7C1040,224,1120,224,1200,234.7C1280,245,1360,267,1400,277.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>
    </div>
</section>
<section class="page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <?php get_template_part('includes/section','content'); ?>
            </div>
            <div class="col-lg-5 widgets">
            <?php if(is_active_sidebar('blog-sidebar')):?>
                    <?php dynamic_sidebar('blog-sidebar');?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>