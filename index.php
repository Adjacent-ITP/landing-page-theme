<?php get_header(); ?>

<body
	<?php if(is_front_page()) { echo "class='homepage'"; } ?>
>

	<?php get_template_part( './phps/_nav' ); ?>
	<?php get_template_part( './phps/_header' ); ?>

	<div class="info-box">
		<div class="info-box__bar">
			<p class="info-box__bar-title">THE JOURNAL</p>
		</div>
		<div class="info-box__main">
			<div class="info-box__info">
				<h2 class="info-box__info-title">An online journal of emerging media</h2>
				<p class="info-box__info-text">
					ADJACENT is an online journal of emerging media published by the <a href="https://tisch.nyu.edu/itp">Interactive Telecommunications Program</a> of New York University (often just called ITP). Our mission is to share research, analysis, and opinion from and for the diverse creators that are exploring the contemporary moment.
				</p>
			</div>
			<div class="info-box__btns">
				<a href="http://eepurl.com/gJqnwr" class="info-box__btns-btn" target="_blank" rel="noreferrer noopener">
					<button class="info-box__btns-link -solid"><span>Subscribe to our newsletter</span></button>
				</a>
				<a href="<?php echo get_bloginfo('url'); ?>/about" class="info-box__btns-btn" target="_blank" rel="noreferrer noopener">
					<button class="info-box__btns-link"><span>Learn More</span></button>
				</a>
			</div>
		</div>
	</div>

	<?php get_template_part( './phps/_menu' ); ?>
	<?php get_template_part( './phps/_body' ); ?>

	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/public/js/main.js"></script>
</body>

<?php get_footer(); ?>
