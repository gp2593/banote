<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="super-header">
	<div>
	<div id="bash">
		<span><?php echo "Passer-byB"; // customizable in future work?></span><span>@<?php echo "Blog"; // customizable in future work?></span><span>:<?php banote_get_pwd(); ?>$ </span><?php banote_get_cmd();?>
	</div>
	<nav id="header-nav" role="navigation">
		<h3 class="menu-toggle"><?php _e( 'Menu', 'banote'); ?></h3>
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container_class' => 'nav-menu' ) ); ?>
		<div id="header-cse"><script>
		  (function() {
		    var cx = 'partner-pub-1030940667925294:9854282425';
		    var gcse = document.createElement('script');
		    gcse.type = 'text/javascript';
		    gcse.async = true;
		    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		        '//www.google.com/cse/cse.js?cx=' + cx;
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(gcse, s);
		  })();
		</script>
        <gcse:searchbox-only></gcse:searchbox-only></div>
    <div class="dummy">
	</nav>
	</div>
</div> <!-- #super_header -->

<div id="main">
