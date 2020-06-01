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
				<p class="info-box__info-text">ADJACENT is an online journal of emerging media published by the Interactive Telecommunications Program, or ITP. Its mission is to share research, reflection, observations, and opinions from and for the diverse creators that are exploring the possibilities and directions at the frontiers of media and technology.</p>
			</div>
			<div class="info-box__btns">
				<a href="http://eepurl.com/gJqnwr" class="info-box__btns-btn" target="_blank">
					<button class="info-box__btns-link -solid"><span>Subscribe to our newsletter</span></button>
				</a>
				<a href="https://forms.gle/YH3T8HjcfbqTVoMy5" class="info-box__btns-btn" target="_blank">
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
