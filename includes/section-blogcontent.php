<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<section class="blog-content">
    <div class="title"><span><?php the_title();?></span></div>
    <?php 
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
    ?>
    <p class="subtext"><?php echo get_the_date('F j, Y');?> by <?php echo $fname;?> <?php echo $lname;?></p>

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid"/>
    <?php endif;?>

    <div class="content"><?php the_content(); ?></div>

   <div class="tag-wrapper">
    <?php
        $categories = get_the_category();
        foreach($categories as $cat):?>
            <a href="<?php echo get_category_link($cat->term_id);?>" class="category-tag">
                <?php echo $cat->name;?>
            </a>
        <?php endforeach;?>
        
        <?php
        $tags = get_the_tags();
        if($tags):
        foreach($tags as $tag):?>
            <a href="<?php echo get_tag_link($tag->term_id);?>" class="tag">
                #<?php echo $tag->name;?>
            </a>
        <?php endforeach; endif;?>
   </div>

    <?php comments_template();?>
</section>

<?php endwhile; else: endif; ?>