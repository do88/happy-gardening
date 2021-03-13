<?php get_header(); ?>
<?php get_template_part('templates/parts/banner'); ?>

<main id="primary" class="content">
	<div class="latest-posts">
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
		<?php get_template_part('templates/parts/post-card'); ?>
		<?php endwhile;  endif;?>
	</div>
</main>

<?php get_footer(); ?>
