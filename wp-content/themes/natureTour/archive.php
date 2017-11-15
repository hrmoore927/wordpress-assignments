<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="main">
    <div class="content archivePost">
        <?php
	    // Start the Loop.
	    if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>

        <h1><?php the_title(); ?></h1>
        <div class="thumbnail">
            <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
            <?php endif; ?>
        </div>
               
        <?php endwhile; ?>
        <?php endif; ?>
<!--        End the loop-->

<!--        Archive search bar-->
        <div class="search">
            <?php get_search_form(); ?>
        </div>

<!--        Archive by month-->
        <h2 class="date">Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        
<!--        Archive by category-->
        <h2 class="subject">Archives by Subject:</h2>
        <ul>
            <?php wp_list_categories(); ?>
        </ul>
    </div>
    
    <div class="aside">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>