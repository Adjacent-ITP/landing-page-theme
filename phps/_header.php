<header class="header" role="banner">

	<div class="header__hero">
		<h1 class="header__hero-title">Adjacent</h1>
		<div class="header__hero-text -top">
			<img
				class="header__hero-svg"
				src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/svgs/hero-ad.svg"
				alt="Ad"
			>
		</div>
		<div class="header__hero-text -center">
			<img
				class="header__hero-svg"
				src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/svgs/hero-ja.svg"
				alt="ja"
			>
		</div>
		<div class="header__hero-text -btm">
			<img
				class="header__hero-svg"
				src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/svgs/hero-cent.svg"
				alt="cent"
			>
		</div>
	</div>

	<div class="header__info">
		<?php
			$all_posts = get_posts( array('posts_per_page' => 1) );
			setup_postdata( $post );
		?>
		<?php foreach ($all_posts as $key=>$post) : ?>
		<a href="https://itp.nyu.edu/adjacent/issue-<?php the_field('issue_number'); ?>" class="header-latest">
			<div class="header-latest__top">
				<span class="header-latest__heading">LATEST ISSUE</span>
				<h3 class="header-latest__title"><?php the_field('title'); ?></h3>
			</div>
			<div class="header-latest__main">
				<div class="header-latest__preview" style="background-image: url('<?php the_field('feature_image'); ?>')">
				</div>
			</div>
			<div class="header-latest__btm">
				<span class="header-latest__cta">Read Full Issue  ></span>
			</div>
		</a>
			<?php
				endforeach;
				wp_reset_postdata();
			?>
	</div>

	<div class="header__grids">
		<div class="header__grid -left"></div>
		<div class="header__grid -center"></div>
		<div class="header__grid -right"></div>
	</div>

</header>