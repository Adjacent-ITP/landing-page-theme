<?php $slug = get_post_field( 'post_name', get_post() ); ?>

<nav class="nav -is-<?php echo $slug ?>">
	<div class="nav__left">
		<a href="<?php echo get_bloginfo('url'); ?>" class="nav__link">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/svgs/logo.svg" alt="adjacent logo" class="nav__logo">
		</a>
	</div>
	<div class="nav__main">
		<button class="nav__item"><a href="<?php echo get_bloginfo('url'); ?>/about" class="nav__item-link">About</a></button>
		<button class="nav__item"><a href="https://forms.gle/YH3T8HjcfbqTVoMy5" class="nav__item-link">Submit <span>an Article</span></a></button>
	</div>
</nav>