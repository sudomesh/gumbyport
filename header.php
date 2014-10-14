<!doctype html>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/gumby.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom.css">

	<!-- Load Modenizr for feature detection FIRST. -->
	<script src="<?php echo get_template_directory_uri() ?>/js/libs/modernizr-2.6.2.min.js"></script>

	<!-- WordPress Pingback Url-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- wordpress head functions -->

</head>

<body>
<script type="text/javascript">
   window._idl = {};
   _idl.variant = "modal";
   _idl.campaign = "reset-the-net";
   (function() {
     var idl = document.createElement('script');
     idl.type = 'text/javascript';
     idl.async = true;
     idl.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'members.internetdefenseleague.org/include/?url= <http://members.internetdefenseleague.org/include/?url=>' + (_idl.url || '') + '&campaign=' + (_idl.campaign || '') + '&variant=' + (_idl.variant || 'modal');
     document.getElementsByTagName('body')[0].appendChild(idl);
   })();
</script>
	<div class="container">
		<div class="main-nav">
			<div class="row navbar">
				<a class="toggle" gumby-trigger=".navbar > ul" href="#">
					<i class="icon-menu"></i>
				</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'twelve columns','walker' => new Walker_Page_Custom, 'container' => '', 'container_class' => '' ) ); ?>
			</div>
		</div>
