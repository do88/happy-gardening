<?php get_header();?>

<main id="primary" class="content">
	<?php
	$featured_post = get_field('main_featured_post');
	$permalink = get_permalink($featured_post->ID);
	$title = get_the_title($featured_post->ID);
	?>
	<div class="home-banner">
		<div class="home-banner__wrapper">
			<a href="<?php echo $permalink ?>" class="home-banner__title">
				<h2><?php echo $title ?></h2>
				<span>Read full article...</span>
			</a>
		</div>
		<div class="home-banner__image">
			<?php echo get_the_post_thumbnail($featured_post->ID, 'banner-image'); ?>
		</div>
	</div>

	<h2 class="home-title">The latest from our blog</h2>

	<?php
	$secondary_featured_posts = get_field('secondary_featured_posts');
	if( $secondary_featured_posts ): ?>
	<div class="featured-posts">
		<?php foreach( $secondary_featured_posts as $post ):
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		POST CARD HERE!
		<?php endforeach; ?>
	</div>
	<?php
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
	<?php endif; ?>
</main>

<?php get_footer();?>
