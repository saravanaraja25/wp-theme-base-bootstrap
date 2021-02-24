<?php get_header(); ?>

<div class="portfolio-contents">	
        <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php while(have_posts()){the_post();} ?>
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php echo get_the_date( 'F j, Y' ); ?>
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-4">
                        <?php if(is_active_sidebar('right-side-1')): ?>
                            <?php dynamic_sidebar('right-side-1'); ?>
                        <?php endif; ?>
                    </div>
                </div>
        </div>
        
</div>

<?php get_footer(); ?>