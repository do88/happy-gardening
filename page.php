<?php get_header(); ?>

<main id="primary" class="content">
	<?php get_template_part('templates/parts/banner', 'page'); ?>

	<div class="content--contained">
		<div class="page-content">
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile;  endif;?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
