<section class="banner">
	<div class="banner__title">
		<?php $result = is_tag() ? 'Tag:' : 'Category:';
		if (is_archive() || is_tag()) : ?>
			<p class="banner__subtitle"> <?php echo $result ?></p>
		<?php endif; ?>
		<h1>
			<?php if (is_404()) {
				echo 'Page Not Found';
			} else if (is_home() ) {
				echo 'Latest Posts';
			} else if (is_archive()) {
				echo single_term_title();
			} else {
				echo the_title();
			} ?>
		</h1>
	</div>
	<div class="banner__image">
		<?php if (!get_the_post_thumbnail()): ?>
		<img src="<?php echo get_template_directory_uri() . "/dist/images/banner-home.jpg" ?>" alt="">
		<?php else: ?>
		<?php the_post_thumbnail('banner-image')?>
		<?php endif?>
	</div>
</section>
