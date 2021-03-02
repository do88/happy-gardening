<div class="post-card">
	<?php the_post_thumbnail('post-thumb'); ?>
	<div class="post-card__content">
		<?php echo get_the_category_list(); ?>
		<h3 class="post-card__title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<div class="post-card__meta">
			<div class="post-card__date">
				Posted: <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('F jS'); ?></time>
			</div>
			<div class="post-card__readtime">
				<?php echo do_shortcode('[rt_reading_time label="Read time:" postfix="minutes"]'); ?>
			</div>
		</div>
	</div>
</div>