<?php 
/*
Template Name: Our Team
?>
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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L48,240C96,256,192,288,288,282.7C384,277,480,235,576,234.7C672,235,768,277,864,277.3C960,277,1056,235,1152,202.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.5" d="M0,0L48,48C96,96,192,192,288,224C384,256,480,224,576,197.3C672,171,768,149,864,154.7C960,160,1056,192,1152,213.3C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <svg class="wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.25" d="M0,128L40,144C80,160,160,192,240,213.3C320,235,400,245,480,240C560,235,640,213,720,197.3C800,181,880,171,960,176C1040,181,1120,203,1200,186.7C1280,171,1360,117,1400,90.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>
    </div>
</section>
<section class="page-wrap">
    <div class="container">
        <div class="ourteam">
            <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid"/>
            <?php endif;?>

            <?php get_template_part('includes/section','content'); ?>
            <?php get_template_part('includes/section','team'); ?>
        </div>
    </section>

    </div>
</section>

<?php get_footer(); ?>