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
			<h3 class="related-article__title">Related Article</h3>
			<a href="<?php the_permalink($related_article->ID) ?>" class="related-article__link">
				<h2 class="related-article__title">
					<?php echo get_the_title($related_article->ID) ?>
				</h2>
				<div class="related-article__image">
					<?php echo get_the_post_thumbnail($related_article->ID, 'post-thumb'); ?>
				</div>
			</a>
		</section>
		<?php endif; ?>
	</div>
</main>




<?php get_footer(); ?>
