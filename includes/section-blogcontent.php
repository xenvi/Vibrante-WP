<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<section class="blog-content">
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

    <?php comment_form();
        $comments_number = get_comments_number();
        if ($comments_number):?>
            <div class="comments">
                <h3>Comments</h3>
                <ol>
                    <?php
                    $comments = get_comments(array(
                        'post_id' => $post->ID,
                        'status' => 'approve'
                    ));
                    wp_list_comments(array(
                        'per_page' => 10
                    ), $comments)
                    ?>
                </ol>
            </div>
    <?php endif;?>
</section>

<?php endwhile; else: endif; ?>