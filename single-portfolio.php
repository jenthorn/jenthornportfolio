<?php //index.php is the last resort template, if no other templates match ?>

<?php get_header(); ?>
<h2>PROJECTS</h2>
<div class="main">
  <div class="container">
    <div class="content">
    <!-- start of wordpress loop -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p><?php the_field('short_description'); ?></p>
          <p><?php the_field('long_description'); ?></p>
          <?php the_content(); ?>

          <div class="portContainer">
            <?php 
              while( has_sub_field('preview_image') ){
              ?>
                <div class="image">
                    <?php $image = get_sub_field('image'); ?>
                    <img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="">
                </div>

              <?php
              //end of portfolio_images repeater
              }
             ?>
          </div>
        <!-- end of wordpress loop -->
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>