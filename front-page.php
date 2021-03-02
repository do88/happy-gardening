<?php get_header();?>

<main id="primary" class="content">
	<?php
	// Array of posts that appear on the homepage to exclude from latest posts below
	$home_page_posts = [];
	?>

	<?php /* ================================= Top Banner Image */ ?>

	<?php
	$featured_post = get_field('main_featured_post');
	array_push($home_page_posts, $featured_post->ID);
	?>
	<div class="home-banner">
		<h2 class="home-banner__title">
			<a href="<?php the_permalink($featured_post->ID) ?>">
				<?php echo get_the_title($featured_post->ID) ?>
				<span>Read full article...</span>
			</a>
		</h2>
		<div class="home-banner__image">
			<?php echo get_the_post_thumbnail($featured_post->ID, 'banner-image'); ?>
		</div>
	</div>

	<h2 class="home-title">The latest from our blog</h2>

	<?php /* ================================= Secondary featured posts */ ?>

	<?php
	$secondary_featured_posts = get_field('secondary_featured_posts');
	if( $secondary_featured_posts ) :
	?>
	<div class="featured-posts">
		<?php foreach( $secondary_featured_posts as $post ):  ?>
		<?php setup_postdata($post); ?>
		<?php array_push($home_page_posts, $post->ID); ?>
		<?php get_template_part( 'templates/parts/post-card'); ?>
		<?php endforeach; ?>
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<?php /* ================================= Banner post */ ?>

	<?php
	$banner_post = get_field('homepage_banner_post');
	if( $banner_post ) :
	array_push($home_page_posts, $banner_post->ID);
	?>
	<a href="<?php the_permalink($banner_post->ID) ?>" class="banner-post">
		<?php echo get_the_category_list(); ?>
		<h2 class="banner-post__title"><?php echo get_the_title($banner_post->ID) ?></h2>
		<?php echo get_the_post_thumbnail($featured_post->ID, 'banner-image'); ?>
	</a>
	<?php endif; ?>

	<?php /* ================================= Latest posts */ ?>

	<div class="latest-posts">
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'post__not_in' => $home_page_posts,
		);
		$latest_posts = new WP_Query($args);
		?>
		<?php while( $latest_posts->have_posts() ) : ?>
		<?php $latest_posts->the_post(); ?>
		<?php get_template_part( 'templates/parts/post-card'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>

</main>

<?php get_footer();?>
