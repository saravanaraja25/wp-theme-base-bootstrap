<?php get_header(); ?>

<div class="page-contents">	
        <div class="container">
                <?php while(have_posts()){the_post();} ?>
                <?php the_title(); the_content(); ?>
        </div>
        
</div>

<?php get_footer(); ?>