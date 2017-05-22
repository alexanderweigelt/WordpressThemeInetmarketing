<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php // INFO: Title Tag wird automatisch eingefügt. Konfiguration functions.php ?>

		<meta charset="<?php bloginfo( 'charset' ); get_bloginfo( 'name' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch-icon.png">

		<!-- Add WP Head -->
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

		<?php wp_head(); ?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	<p class="browserinfo">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<noscript><p class="browserinfo">Your browser does not support JavaScript! Enable this for use all functions.</p></noscript>

	<div class="container">
	<?php
		//Navigationsleiste aufrufen
		get_template_part( 'navigation' );
	?>
	</div>

	<div class="container">
		<!-- Start Header -->
        <header id="mainHeader" role="banner">
			<div class="clearfix">
				<div class="col-md-9">
					<h1><?php bloginfo('name'); ?></h1>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>

						<p class="site-description lead"><?php echo $description; ?></p>
					<?php endif; ?>

				</div>
				<div class="col-md-3">
					<?php if ( get_header_image() != '' ): ?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo( get_header_image() ); ?>" class="img-responsive" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
						</a>
					<?php endif; ?>

				</div>
			</div>
		</header>
	</div>
