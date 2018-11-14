<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="area-menu">
		<div class="container">
			<div class="row">
				<div class="logo col-md-2 col-sm-12 col-xs-12">
					<a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"">
						<?php if( function_exists( 'the_custom_logo' ) ) { if(has_custom_logo()) { the_custom_logo(); } else { echo bloginfo('name');; }} ?>
					</a>
				</div>
				<div class="menu col-md-10 col-sm-12 col-xs-12">
					<?php wp_nav_menu( array( 'theme_location' => 'menu_principal') ); ?>
				</div>
			</div>
		</div>
	</div>
</header>
