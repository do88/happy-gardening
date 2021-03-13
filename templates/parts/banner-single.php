<section class="banner">
	<div class="banner__title">
		<?php echo get_the_category_list(); ?>
		<h1>
			<?php if (is_404()) {
				echo 'Page Not Found';
			} else {
				the_title();
			} ?>
		</h1>
		<?php if (get_field('subtitle')) : ?>
			<p class="banner__subtitle"><?php the_field('subtitle') ?></p>
		<?php endif; ?>
		<div class="banner__meta">
			<div class="banner__date">
				Posted: <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('F jS'); ?></time>
			</div>
			<div class="banner__readtime">
				<?php echo do_shortcode('[rt_reading_time label="Read time:" postfix="minutes"]'); ?>
			</div>
		</div>
	</div>
	<div class="banner__image">
		<?php if (!get_the_post_thumbnail()): ?>
		<img src="<?php echo get_template_directory_uri() . "/dist/images/banner-home.jpg" ?>" alt="">
		<?php else: ?>
		<?php the_post_thumbnail('banner-image')?>
		<?php endif?>
	</div>
</section>
