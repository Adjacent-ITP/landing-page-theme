<?php $index = 1; ?>
<?php $colFlag = "-left"; ?>

<div class="main">
	<div class="container">
		<div class="grid-container">
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<?php if($index % 2 != 0): $colFlag = "-left"; ?>
				<?php else: $colFlag = "-right";?>
				<?php endif; ?>
					<div class="card <?php echo $colFlag; ?>">
						<a href="#" class="card__link">
							<div class="card__container">
								<div class="card__head <?php echo $colFlag; ?>">
									<img
										class="card__head-index <?php echo $colFlag; ?>"
										src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/svgs/index_<?php the_field('issue_number'); ?>.svg"
										alt="<?php the_field('issue_number'); ?>"
									>
									<h2 class="card__head-title -f-title"><?php the_field('title'); ?></h2>
								</div>
								<div class="card__thumbnail <?php echo $colFlag; ?>">
									<img
										class="card__thumbnail-img"
										src="<?php the_field('feature_image'); ?>"
										alt="<?php the_field('title'); ?>"
									>
								</div>
								<div class="card__content <?php echo $colFlag; ?>">
									<p class="card__content-text -brief"><?php the_field('description'); ?></p>
									<p class="card__content-text -date">Published on <?php echo the_field('published_date'); ?></p>
								</div>
							</div>
						</a>
					</div>
				<?php $index++; ?>
			<?php endwhile; ?>
		</div>
		<div class="load-link">
			<button class="load-link__btn">Load More Issues</button>
		</div>
	</div>
</div>