<footer class="site-footer">
	<div class="site-footer__info">
		<?php load_inline_svg('logo') ?>
		<p>Copyright <?php echo get_bloginfo('name') . ' &copy; ' .  date('Y'); ?></p>
	</div>
	<?php wp_nav_menu(array(
        'container' => false, // Remove nav container
        'menu_id' => 'footer-nav', // Adding custom nav id
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'theme_location' => 'main-nav', // Where it's located in the theme
        'depth' => 1, // Limit the depth of the nav
        'fallback_cb' => false, // Fallback function (see below)
	)); ?>
	<a href="https://www.instagram.com/happy_gardening.uk/" target="_blank" class="site-footer__social button">
		Follow on Instagram <?php load_inline_svg('instagram') ?>
	</a>
</footer>

<?php wp_footer(); ?>

</body>

</html>
