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
	</div>
</main>

<?php get_footer(); ?>
