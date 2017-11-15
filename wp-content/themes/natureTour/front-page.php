<?php 
//Front page template
get_header(); ?>

<div class="main">
    <div class="content">
        <div class="top">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/globe.png" alt="globe">
            <h1>SPECIES</h1>
            <p>With 25 years’ experience of organising group holidays and an unrivalled knowledge of wildlife our selection of tours represents the very best wildlife viewing opportunities at an unbeatable price.</p>
        </div>
        
        <!-- START LOOP HERE -->
        <?php $bottom_query = new WP_Query( 'category_name=guides&posts_per_page=6' ); ?>
        <?php while ( $bottom_query->have_posts() ) : $bottom_query->the_post(); ?>
        <div class="article">
            <img src="<?php the_post_thumbnail_url(); ?>">
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php the_excerpt(); ?>
            </p>
            <a href="<?php the_permalink(); ?>">Read More...</a>
        </div>
        <?php endwhile; ?>
        <!-- END CATEGORY POST -->
    </div>

    <div class="aside">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
