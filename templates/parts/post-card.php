<div class="post-card">
	<a href="<?php the_permalink(); ?>" class="post-card__link">
		<div class="post-card__image">
			<?php the_post_thumbnail('post-thumb'); ?>
		</div>
		<div class="post-card__content">
			<h3 class="post-card__title">
				<?php the_title(); ?>
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
	</a>
	<?php echo get_the_category_list(); ?>
</div>
