<?php get_header(); ?>

<main id="primary" class="content">
	<?php get_template_part( 'templates/parts/banner'); ?>
	<div class="content--contained">
		<div class="page-content">
			<?php if (get_field('page_intro')) : ?>
			<p class="page-intro"><?php the_field('page_intro') ?></p>
			<?php endif; ?>
			<div class="social-share"></div>
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile;  endif;?>
		</div>

		<?php $related_article = get_field('related_article');  ?>
		<?php if ($related_article) : ?>
		<section class="related-article">
			<h3 class="related-article__header">Related Article</h3>
			<a href="<?php the_permalink($related_article->ID) ?>" class="related-article__link">
				<div class="related-article__image">
					<?php echo get_the_post_thumbnail($related_article->ID, 'post-thumb'); ?>
				</div>
				<div class="related-article__content">
					<h2 class="related-article__title">
						<?php echo get_the_title($related_article->ID) ?>
					</h2>
					<div class="related-article__meta">
						<div class="post-card__date">
							Posted: <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('F jS'); ?></time>
						</div>
						<div class="post-card__readtime">
							<?php echo do_shortcode('[rt_reading_time label="Read time:" postfix="minutes"]'); ?>
						</div>
					</div>
				</div>
			</a>
		</section>
		<?php endif; ?>

		<section class="post-meta">
			<div class="categories">
				Categories:
				<?php echo get_the_category_list(); ?>
			</div>
			<div class="tags">
				Tags:
				<?php echo get_the_tag_list() ?>
			</div>
		</section>
	</div>
</main>




<?php get_footer(); ?>
