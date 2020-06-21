<?php $index = 1; ?>
<?php $colFlag = "-left"; ?>
<?php $hiddenFlag = ""; ?>

<div class="main">
	<div class="container">
		<div class="grid-container">
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<?php if($index % 2 != 0): $colFlag = "-left"; ?>
				<?php else: $colFlag = "-right";?>
				<?php endif; ?>
				<?php if($index > 8): $hiddenFlag = " -is-hidden"; endif; ?>
					<div class="card <?php echo $colFlag; echo $hiddenFlag; ?>">
						<div class="card__wrapper">
							<div class="card__container">
								<a href="<?php the_field('issue_link');?>" class="card__link">
									<div class="card__head <?php echo $colFlag; ?>">

										<!-- <p class="card__head-index -f-title"> 1<?php //echo $wp_query->post_count - $index + 1; ?> </p>
										<h2 class="card__head-title -f-title">
											<p class="card__head-index -f-title"> 1<?php //echo $wp_query->post_count - $index + 1; ?> </span>
											<?php //the_title(); ?>
										</h2> -->

										<span class="card__head-index -f-title"><?php echo $wp_query->post_count - $index + 1; ?></span>
										<span class="card__head-title -f-title"> <?php the_title(); ?> </span>
									</div>
									<div class="card__thumbnail <?php echo $colFlag; ?>">
										<img
											class="card__thumbnail-img"
											src="<?php the_field('feature_image'); ?>"
											alt="<?php the_title(); ?>"
										>
									</div>
								</a>
								<div class="card__content <?php echo $colFlag; ?>">
									<?php the_field('description'); ?>
									<p class="card__content-text -date">Published in <?php echo the_field('published_date'); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php $index++; ?>
			<?php endwhile; ?>
		</div>
		<div class="load-link">
			<button class="load-link__btn">Load More Issues</button>
		</div>
	</div>
</div>
