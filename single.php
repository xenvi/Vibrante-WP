<?php get_header(); ?>
<section class="title-wrapper">
    <div class="text">
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
    </div>
    <div class="waves-wrapper">
        <div class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,293.3C384,309,480,299,576,277.3C672,256,768,224,864,229.3C960,235,1056,277,1152,288C1248,299,1344,277,1392,266.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>
</section>

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