<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<section class="blog-content">
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid"/>
    <?php endif;?>

    <ul class="fields">
        <li><b><?php echo get_field_object('color')['label'];?> :</b> <?php the_field('color');?></li>
        <li><b><?php echo get_field_object('field-2')['label'];?>  :</b> <?php the_field('field-2');?></li>
    </ul>

    <div class="content"><?php the_content(); ?></div>
</section>

<?php endwhile; else: endif; ?>