<section class="page-wrap">
    <div class="container front-page">
        <h2><?php the_field('section_title');?></h2>
        <hr/>
        <span><?php the_field('section_subtext');?></span>
        <section class="cards">
            <div class="card">
                <div class="head">
                    <?php the_field('icon_1');?>
                    <h3><?php the_field('title_1');?></h3>
                </div>
                <span><?php the_field('text_1');?></span>
            </div>
            <div class="card">
            <div class="head">
                    <?php the_field('icon_2');?>
                    <h3><?php the_field('title_2');?></h3>
                </div>
                <span><?php the_field('text_2');?></span>
            </div>
            <div class="card">
            <div class="head">
                    <?php the_field('icon_3');?>
                    <h3><?php the_field('title_3');?></h3>
                </div>
                <span><?php the_field('text_3');?></span>
            </div>
        </section>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#24305E" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,128C384,160,480,224,576,240C672,256,768,224,864,208C960,192,1056,192,1152,213.3C1248,235,1344,277,1392,298.7L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<section class="front-page-content">
    <section class="page-wrap">
        <div class="container front-page">
            <hr />
            <?php get_template_part('includes/section','content'); ?>
            <hr />
        </div>
    </section>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#24305E" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,53.3C384,53,480,75,576,96C672,117,768,139,864,133.3C960,128,1056,96,1152,85.3C1248,75,1344,85,1392,90.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

<section class="page-wrap columns">
    <div class="container front-page">
        <div class="row">
            <div class="col-lg-6 image">
                <img src=<?php the_field('row_1_left');?> alt=<?php echo get_field_object('row_1_left')['label'];?> />
            </div>
            <div class="col-lg-6 text">
                <hr/>
                <?php the_field('row_1_right');?>
            </div>
        </div>
        <div class="row odd-row">
            <div class="col-lg-6 text">
                <hr/>
                <?php the_field('row_2_left');?>
            </div>
            <div class="col-lg-6 image">
                <img src=<?php the_field('row_2_right');?> alt=<?php echo get_field_object('row_2_right')['label'];?> />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 image">
                <img src=<?php the_field('row_3_left');?> alt=<?php echo get_field_object('row_3_left')['label'];?> />
            </div>
            <div class="col-lg-6 text">
                <hr/>
                <?php the_field('row_3_right');?>
            </div>
        </div>
    </div>
</section>