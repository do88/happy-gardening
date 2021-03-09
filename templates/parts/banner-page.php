<section class="banner banner--page">
	<div class="banner__title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="banner__image">
		<?php if (!get_the_post_thumbnail()): ?>
		<img src="<?php echo get_template_directory_uri() . "/dist/images/banner-home.jpg" ?>" alt="">
		<?php else: ?>
		<?php the_post_thumbnail('banner-image')?>
		<?php endif?>
	</div>
</section>
