<?php get_header(); ?>

<div class="post-contents">	
        <div class="container">
                <?php while(have_posts()){the_post();} ?>
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
                <?php echo get_the_date( 'F j, Y' ); ?>
                <?php the_content(); ?>
        </div>
        
</div>

<?php get_footer(); ?>