<?php /* template name: munkaim */ ?>
<?php get_header(); ?>
<div class="page-content">

    <div class="page-title-container">
        <p class="page-title"><?php echo get_the_title();?></p>
    </div>

    <?php
    // the query
    $wpb_all_query = new wp_query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

    <?php if ( $wpb_all_query->have_posts() ) : ?>

        <div class="posts-container">
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="post-container">
                    <div class="post-title"><?php echo the_title();?></p></div>
                    <div class="post-content"><?php echo the_content();?></div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
