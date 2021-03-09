<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()."/dist/images/favicon.png"?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="hidden" hidden>
		<?php echo file_get_contents(get_template_directory() . "/dist/images/sprite.svg"); ?>
	</div>

	<a class="skip-link screen-reader-text" href="#primary">Skip to contents</a>

	<header id="masthead" class="header">
		<div class="header__wrapper">
			<a href="/" class="header__logo">
				<?php load_inline_svg('logo') ?>
			</a>
			<nav class="header__menu header__menu--desktop">
				<?php switch_top_nav() ?>
			</nav>
			<button class="header__menu-button" id="toggle" aria-controls="overlay">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</button>
		</div>

		<nav class="header__menu header__menu--mobile" id="overlay" aria-expanded="false">
			<?php switch_top_nav_mobile() ?>
		</nav>
	</header>
