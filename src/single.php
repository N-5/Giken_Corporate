<?php get_header(); ?>

<?php the_post(); ?>

<?php the_breadcrumb(); ?>

<div class="l-container__2col">
	<div class="l-row">
		<main class="l-main__2col post">
			<article>
				<header class="post__header">
					<h1 class="post__title"><?php the_title(); ?></h1>
					<p class="post__header-date"><?php the_date('Y.m.d') ?></p>
					<div class="post__sns">
						<p class="post__sns-title"><span class="m-icon__share">share</span></p>
						<ul>
							<li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icon-twitter_bk.svg" alt="Twitterでシェアする"></a></li>
							<li><a href="https://www.facebook.com/sharer.php?u=bm&u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icon-facebook_bk.svg" alt="Facebookでシェアする"></a></li>
						</ul>
					</div>
				</header>

				<div class="post__content">
					<?php if (have_rows('contents')): ?>
						<section>
							<?php while (have_rows('contents')) : the_row(); ?>
								<?php if (get_row_layout() == 'title_block') : ?>
									<h2 class="post__subtitle"><?php the_sub_field('title'); ?></h2>
								<?php endif; ?>

								<?php if (get_row_layout() == 'text_block') : ?>
									<p class="post__text"><?php the_sub_field('text'); ?></p>
								<?php endif; ?>

								<?php if (get_row_layout() == 'image_block') : ?>
									<div class="post__image">
										<img src="<?php echo get_sub_field('image_big')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
									</div>
								<?php endif; ?>

								<?php if (get_row_layout() == 'image_block_min') : ?>
									<div class="post__images">
										<?php
											$image01 = get_sub_field('image_min01');
											if ($image01) :
										?>
											<div class="image">
												<img src="<?php echo $image01['url']; ?>" alt="<?php echo $image01['alt']; ?>">
											</div>
										<?php endif; ?>

										<?php
											$image02 = get_sub_field('image_min02');
											if ($image02) :
										?>
											<div class="image">
												<img src="<?php echo $image02['url']; ?>" alt="<?php echo $image02['alt']; ?>">
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>

								<?php if (get_row_layout() == 'border_block') : ?>
									<section class="post__border-block">
										<h3 class="post__border-title"><?php the_sub_field('border_title'); ?></h3>
										<?php
											$image = get_sub_field('border_image');
											if($image):
										?>
											<img class="post__border-image" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php $image['sizes']['alt']; ?>" />
										<?php endif; ?>
										<p class="post__border-text"><?php the_sub_field('border_text'); ?></p>
									</section>
								<?php endif; ?>

								<?php if (get_row_layout() == 'video_block') : ?>
									<div class="post__iframe">
										<?php the_sub_field('video'); ?>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						</section>
					<?php endif; ?>
				</div>
			</article>

			<?php
				$previous_post = get_previous_post();
				$next_post = get_next_post();
				if ($previous_post || $next_post):
			?>
				<div class="single-pagination">
					<?php
						if (!empty( $previous_post )):
					?>
						<a class="prev" href="<?php echo get_permalink( $previous_post->ID ); ?>">≪</a>
					<?php endif; ?>
					<?php
						if (!empty( $next_post )):
					?>
						<a class="next" href="<?php echo get_permalink( $next_post->ID ); ?>">≫</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</main>

		<?php get_template_part('template/sidebar-post'); ?>
	</div>
</div>

<?php get_footer(); ?>
