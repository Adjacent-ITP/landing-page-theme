<?php /* Template Name: About */ ?>

<body>

	<?php get_template_part( './phps/_nav' ); ?>
	<?php get_header(); ?>

<?php while (have_posts()) : ?>
	<?php the_post(); ?>

	<div class="about" id="about">
		<div class="about__top -container">
			<h1> <?php the_title(); ?> </h1>
			<?php the_content(); ?>
		</div>
	</div>

	<?php endwhile; ?>

	<?php get_footer(); ?>

	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/public/js/main.js"></script>

</body>

<!--
<h3>Adjacent teams through the years</h3>

<div class="team__tabs">
	<button>2020</button>
	<button>2019</button>
	<button>2018</button>
</div>
<div class="team__groups">
	<div class="team__group">
		<h4>ADJACENT 2020</h4>
		<h5>Editorial Board</h5>
		<p>test</p>
		<p>test</p>
		<h5>Designers...</h5>
		<p>test</p>
		<p>test</p>
	</div>
	<div class="team__group">
		<h4>ADJACENT 2019</h4>
		<h5>Editorial Board</h5>
		<p>test</p>
		<p>test</p>
	</div>
	<div class="team__group">
		<h4>ADJACENT 2018</h4>
		<h5>Editorial Board</h5>
		<p>test</p>
		<p>test</p>
	</div>
</div>
-->
