<?php get_header(); ?>

<div class="main">
    <!-- START LOOP HERE -->
    <div class="content">
        <div class="postTitle">
            <?php the_title(); ?>
        </div>
        <div class="postImage">
            <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <?php endif; ?>
        </div>

        <div class="postContent">
            <!--    loop for content-->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>

            <?php endwhile; else : ?>

            <p>
                <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
            </p>

            <?php endif; ?>
            <!-- END LOOP HERE -->
        </div>
    </div>

    <div class="aside">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
