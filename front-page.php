<?php get_header();
// Array of posts that appear on the homepage to exclude from latest posts below
$home_posts_exclude = []; ?>

<main id="primary" class="content">

	<?php /* ================================= Top Banner Image */ ?>

	<?php $featured_post = get_field('main_featured_post');
	array_push($home_posts_exclude, $featured_post->ID);  // add post to exclude array  ?>
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

	<?php $secondary_featured_posts = get_field('secondary_featured_posts');
	if( $secondary_featured_posts ) : ?>
	<div class="featured-posts">
		<?php foreach( $secondary_featured_posts as $post ):
			setup_postdata($post);
			array_push($home_posts_exclude, $post->ID);  // add post to exclude array
			get_template_part( 'templates/parts/post-card');
		endforeach; ?>
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<?php /* ================================= Banner post */ ?>

	<?php $banner_post = get_field('homepage_banner_post');
	if( $banner_post ) :
	array_push($home_posts_exclude, $banner_post->ID); // add post to exclude array ?>
	<a href="<?php the_permalink($banner_post->ID) ?>" class="banner-post">
		<?php echo get_the_category_list(); ?>
		<h2 class="banner-post__title"><?php echo get_the_title($banner_post->ID) ?></h2>
		<?php echo get_the_post_thumbnail($featured_post->ID, 'banner-image'); ?>
	</a>
	<?php endif; ?>

	<?php /* ================================= Latest posts */ ?>

	<div class="latest-posts">
		<?php $args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'post__not_in' => $home_posts_exclude,
		);
		$latest_posts = new WP_Query($args);
		while ($latest_posts->have_posts()):
			$latest_posts->the_post();
			get_template_part('templates/parts/post-card');
		endwhile;
		wp_reset_postdata(); ?>
	</div>

</main>

<?php get_footer();?>
