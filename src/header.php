<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <!-- <link href="<?php // echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon"> -->
        <!-- <link href="<?php // echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>


	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
				<div class="header">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<!-- logo -->
					<!-- <div class="logo"> -->
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/cp_logo.svg" alt="Logo" class="logo-img">
						</a>
						<p class="subheader">Hey! We are working on something great. But in the meantime check out our video.</p>
						<p class="mailing-link"><a href="https://xbanegas.wufoo.com/forms/z1cnfs391ml17c1/" onclick="window.open(this.href,  null, 'height=242, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false">Click Here to Join Our Mailing List</a></p>

					<!-- </div> -->
					</div>
					<!-- /logo -->

					<!-- nav -->
					<!-- <nav class="nav" role="navigation"> -->
						<?php // html5blank_nav(); ?>
					<!-- </nav> -->
					<!-- /nav -->
				</div>

			<!-- /header -->
