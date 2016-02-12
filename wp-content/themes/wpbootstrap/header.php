  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
  </head>
  <body>

    <header class="navbar-fixed-top">
      <a class="brand" href="<?php echo site_url(); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/header-logo.png" class="logo"/></a>
     
        <div class="button">
	<a class="btn-open" href="#"></a>
</div>
        
    </header>  

      
      
<div class="overlay">
	<div class="wrap">
		<ul class="wrap-nav ">
  <?php wp_list_pages(array('title_li' => '', 'exclude' => 13)); ?>
		</ul>
        
		<div class="social">
			<a href="https://www.facebook.com/queimadasfitascoimbra/">
			<div class="social-icon">
				<i class="fa fa-facebook"></i>
			</div>
			</a>
			<a href="https://www.instagram.com/queimadasfitascoimbra/">
			<div class="social-icon">
				<i class="fa fa-instagram"></i>
			</div>
			</a>
		</div>
	</div>      
</div>    
      
      
  <div class="container">