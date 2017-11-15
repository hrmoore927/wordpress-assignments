<?php get_header(); ?>

<div class="main">
    <div class="content">
        <?php 
//        Start loop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="postTitle"><?php the_title(); ?></h2>
            <div class="postContent">
                <?php the_content(); ?>
            </div>
        <?php
//        End loop
        endwhile; endif; ?>
    </div>

    <div class="aside">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
