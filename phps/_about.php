<?php /* Template Name: About */ ?>

<body>

	<?php get_template_part( './phps/_nav' ); ?>
	<?php get_header(); ?>

	<div class="about" id="about">
		<div class="about__top -container">
			<h2>About</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="team -container">
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
					<h5>Editorial Board</h5>
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
		</div>
		<div class="about__btm -container">
			<h3>Thanks to</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<?php get_footer(); ?>

	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/public/js/main.js"></script>

</body>