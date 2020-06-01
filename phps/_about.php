<?php /* Template Name: About */ ?>

<body>

	<?php get_template_part( './phps/_nav' ); ?>
	<?php get_header(); ?>

<?php while (have_posts()) : ?>
	<?php the_post(); ?>

	<div class="about" id="about">
		<div class="about__top -container">
			<h2>About</h2>
			<p><?php the_field("intro"); ?></p>
		</div>
		<div class="team -container">
			<?php the_content(); ?>
		</div>
		<div class="about__btm -container">
			<h3>Thanks to</h3>
			<p><?php the_field("thanks_to"); ?></p>
		</div>
	</div>

	<?php endwhile; ?>

	<?php get_footer(); ?>

	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/public/js/main.js"></script>

</body>