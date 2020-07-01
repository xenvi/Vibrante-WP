<?php get_header(); ?>
<section class="title-wrapper">
    <div class="title"><span><?php the_title();?></span></div>
    <?php 
        $fname = get_the_author_meta('first_name', $post->post_author);
        $lname = get_the_author_meta('last_name', $post->post_author);
    ?>
    <p class="subtext"><?php echo get_the_date('F j, Y');?> by <?php echo $fname;?> <?php echo $lname;?></p>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
</section>
<div class="single-wave">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill=`$darkblue` fill-opacity="1" d="M0,96L48,80C96,64,192,32,288,42.7C384,53,480,107,576,117.3C672,128,768,96,864,96C960,96,1056,128,1152,144C1248,160,1344,160,1392,160L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
</div>
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