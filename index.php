<?php get_header()  ?>

<div class="post-contents">	
        <div class="container">
                <?php while(have_posts()){the_post();} ?>
                <?php the_post_thumbnail(); ?>   
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>        	
                <?php the_content(); ?>
        </div>
</div>

<?php get_footer()  ?>