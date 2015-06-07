<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <script src="//use.typekit.net/rnh3utu.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/evil-icons/1.7.2/evil-icons.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/evil-icons/1.7.2/evil-icons.min.js"></script>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    
    <div class="flexwrap">
      <div class="logo">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <span class="jen">Jen</span> <br> <span>Thorn</span>
          </a>
        </h1>
        <h2 class="title">Design / Development</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/goldBolt.png" alt="">
      </div>

        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>
    </div>

    <!-- end of top bar logo, and nav -->
    
    <div class="hello">
      <h2 class="hello">Hello,</h2>
    </div>
    <div class="aboutP">
      <p>I'm Jen, a Designer and Front-End Developer in Toronto. Recent Alumni of HackerYou's Front-End Developer Boot Camp, I am looking for some Lorem ipsum dolor sit amet. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates laborum, ab iusto sapiente ullam reprehenderit ad ut quas cupiditate veritatis asperiores voluptatum at voluptatibus laboriosam commodi, a doloremque hic consectetur.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, earum!</p>
    </div>
    
    <div class="links">
      <p><a href="mailto:hello@jenthorn.ca"><i class="fa fa-envelope-o"></i>  hello@jenthorn.ca</a></p>
      <p><a href="https://github.com/jenthorn"><i class="fa fa-code-fork"></i> GitHub</a></p>
      <p><a href="http://twitter.com/jenthorn_"><i class="fa fa-twitter"></i> jenthorn_</a></p>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

