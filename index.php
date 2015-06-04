<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
    		<?php // get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php //get_single-portfolio(); ?>

    <?php

    $portfolioQuery = new WP_Query(
    	array(
    		'posts_per_page' => -1,
    		'post_type' => 'portfolio',
    		'order' => 'ASC'
    		)
    ); ?>

    <?php if ( $portfolioQuery->have_posts() ) : ?>

    	<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>

    		<section id="<?php echo $post->post_name; ?>">
    			<h3><?php the_title(); ?></h3>
    			<p><?php the_field('short_description') ?></p>	
    			<?php the_content(); ?>
    		
    			  <div class="image">
    			        <?php $preview_image = get_field('preview_image'); ?>
    			        <img src="<?php echo $preview_image['sizes']['large'] ?>">
    			     
    			      </div>
    	
     		</section>
    	<?php endwhile; ?>

    	<?php wp_reset_postdata(); ?>

    <?php else:  ?>
    	[stuff that happens if there aren't any posts]
    <?php endif; ?>


    <?//php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>