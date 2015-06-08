<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">


		<section class="portfolio" id="portfolio">
			<h2 class="pro">Projects</h2>
    <?php

    $portfolioQuery = new WP_Query(
    	array(
    		'posts_per_page' => -1,
    		'post_type' => 'portfolio',
    		'order' => 'ASC'
    		)
    ); ?>

    <?php $count = 0; if ( $portfolioQuery->have_posts() ) : ?>

    	<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
				
    		<article class="portfolioItem item-<?php echo $count; ?>" id="<?php echo $post->post_name; ?>">
    			
    			  <div class="image">
    			        <?php $preview_image = get_field('preview_image'); ?>
    			        <img src="<?php echo $preview_image['sizes']['large'] ?>">
    			     
    			      </div>

	    		<div class="postContent">
                    <div class="postTitle">
                        <h3><?php the_title(); ?></h3>
                    </div>
	    			<p>
                        <?php the_field('short_description') ?><br>
                        <a href="<?php the_field('live_link'); ?>" class="viewLive">View Live</a>
                    </p>	
	    			
    			</div>
    			<?php the_content(); ?>
    	
     		</article>
     		<?php $count++; ?>
    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
    <?php else:  ?>
    	[stuff that happens if there aren't any posts]
    <?php endif; ?>

		</section>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>