<?php 
/*
Template Name: Front Page
?>
*/
?>

<?php get_header(); ?>

    <section class="landing">
                        <!-- <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="landing-img"/>
                        <?php endif;?> -->
        <div class="text-wrapper container">
            <div class="row">
                <div class="col-lg-6">
                   <h1><?php echo get_bloginfo('name')?></h1>
                    <span><?php the_field('subtext')?></span>
                </div>
                <div class="col-lg-6 blob-wrapper">
                        <svg width="300px" height="300px" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#F76C6C" d="M36.6,-39.6C52.3,-30.5,73.2,-23.5,79.3,-10.8C85.4,2,76.7,20.6,64.2,32.2C51.7,43.8,35.5,48.3,19.9,53.3C4.4,58.4,-10.4,63.9,-24.6,61.4C-38.7,58.9,-52.1,48.4,-63.1,34.1C-74.1,19.9,-82.6,1.9,-81.6,-16.2C-80.6,-34.4,-70.1,-52.8,-55,-62C-39.8,-71.2,-19.9,-71.4,-4.7,-65.8C10.5,-60.2,20.9,-48.8,36.6,-39.6Z" transform="translate(100 100)" />
                        </svg>
                        <svg width="350px" height="350px"  class="blob2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#A8D0E6" d="M28.8,-52.2C36.8,-39.7,42.4,-30.8,45.5,-21.5C48.6,-12.2,49.3,-2.5,50.5,9.1C51.7,20.6,53.3,34.1,47.4,41.4C41.6,48.7,28.3,49.8,15.3,55.1C2.2,60.3,-10.5,69.7,-21.8,68.9C-33.1,68,-43,57,-55.6,46.1C-68.1,35.3,-83.3,24.7,-86.5,11.6C-89.6,-1.5,-80.7,-17.1,-73.1,-33.2C-65.5,-49.3,-59.2,-65.8,-47.2,-76.5C-35.2,-87.3,-17.6,-92.3,-3.6,-86.6C10.4,-81,20.8,-64.8,28.8,-52.2Z" transform="translate(100 100)" />
                        </svg>
                        <svg class="imageblob" width="300px" height="400px" viewBox="0 20 200 250" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <clipPath id="shape">
                                    <path fill="#FF0066" d="M37.7,-59.1C52,-49.5,68.8,-44.3,75.9,-33.3C83,-22.4,80.4,-5.6,74.5,8.2C68.6,21.9,59.3,32.7,49.8,42.6C40.3,52.5,30.5,61.5,18,68.4C5.5,75.2,-9.6,79.8,-22.3,76C-34.9,72.2,-45,60,-55.5,48C-65.9,36,-76.7,24.3,-77.7,11.7C-78.8,-1,-70.1,-14.5,-64.4,-30.4C-58.7,-46.4,-56,-64.7,-45.8,-76.1C-35.6,-87.5,-17.8,-92,-3,-87.3C11.7,-82.6,23.4,-68.7,37.7,-59.1Z" transform="translate(100 100)" />
                                </clipPath>
                                
                            </defs>
                            <image width="100%" height="100%" clip-path="url(#shape)" xlink:href="<?php the_post_thumbnail_url('blog-small');?>" />
                        </svg>
                   
                </div>
            </div>
        </div>

        <div class="waves-wrapper">
            <div class="wave-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L48,293.3C96,299,192,309,288,309.3C384,309,480,299,576,250.7C672,203,768,117,864,122.7C960,128,1056,224,1152,234.7C1248,245,1344,171,1392,133.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.5" d="M0,224L48,224C96,224,192,224,288,202.7C384,181,480,139,576,133.3C672,128,768,160,864,192C960,224,1056,256,1152,224C1248,192,1344,96,1392,48L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                <svg class="wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.25" d="M0,64L48,96C96,128,192,192,288,202.7C384,213,480,171,576,133.3C672,96,768,64,864,85.3C960,107,1056,181,1152,208C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </div>
        </div>
    </section>

<section class="page-wrap">
    <div class="container">

    <?php get_template_part('includes/section','content'); ?>

    </div>
</section>

<?php get_footer(); ?>