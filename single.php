<?php
/**
 * Single post template file.
 *
 * @package SandjongTheme
 */

get_header();
?>

<section class="bg-beige min-h-screen py-20">
	<div class="container text-primary">
		<?php if (have_posts()): ?>
			<?php while (have_posts()):
				the_post(); ?>

				<header class="mb-10 md:mb-12 mt-14 md:mt-0">
					<h4 class="mb-4 max-w-4xl"><?php the_title(); ?></h4>
				</header>

				<div class="grid md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)] gap-10 md:gap-14 mb-16">
					<div>
						<?php if (has_post_thumbnail()): ?>
							<div class="overflow-hidden rounded-xl border border-[#CBAF8A]/60">
								<?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
							</div>
						<?php endif; ?>

						<div class="flex space-x-11 items-center mt-4 text-sm body text-primary/60">
							<div>
								Whispers from Sandjong
							</div>
							<div>
								<span><?php echo get_the_date('d M Y'); ?></span>
							</div>
						</div>
					</div>

					<aside class="hidden md:block pt-4 md:pt-2 border-t md:border-t-0 md:border-l border-[#CBAF8A]/60 md:pl-8">
						<h5 class="text-terracota mb-4 border-b pb-2 border-terracota">Share</h5>
						<div class="flex space-x-4">
							<div class="flex flex-col gap-3 text-sm body">
								<a href="https://x.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>"
									target="_blank" rel="noopener noreferrer"
									class="inline-flex items-center gap-2 hover:text-terracota transition-colors">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/x.png" class="w-6 h-6"
										alt="Share on X">
								</a>
							</div>
							<div class="flex flex-col gap-3 text-sm body">
								<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
									target="_blank" rel="noopener noreferrer"
									class="inline-flex items-center gap-2 hover:text-terracota transition-colors">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.png"
										class="w-6 h-6" alt="">
								</a>
							</div>
						</div>
					</aside>
				</div>

				<article class="max-w-3xl body space-y-6 mb-20">
					<?php the_content(); ?>
				</article>

				<div class="md:hidden">
					<h5 class="text-terracota mb-4 pb-2 border-b border-terracota">Share</h5>
					<div class="flex space-x-4">
						<div class="flex flex-col gap-3 text-sm body">
							<a href="https://x.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"
								rel="noopener noreferrer"
								class="inline-flex items-center gap-2 hover:text-terracota transition-colors">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/x.png" class="w-6 h-6"
									alt="Share on X">
							</a>
						</div>
						<div class="flex flex-col gap-3 text-sm body">
							<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
								target="_blank" rel="noopener noreferrer"
								class="inline-flex items-center gap-2 hover:text-terracota transition-colors">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.png" class="w-6 h-6"
									alt="">
							</a>
						</div>
					</div>
				</div>

				<?php
				// More Whispers: related/other posts grid (3 items)
				$current_id = get_the_ID();
				$category_ids = wp_list_pluck(get_the_category($current_id), 'term_id');

				$more_args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'post__not_in' => array($current_id),
					'ignore_sticky_posts' => true,
				);

				if (!empty($category_ids)) {
					$more_args['category__in'] = $category_ids;
				}

				$more_query = new WP_Query($more_args);

				if ($more_query->have_posts()): ?>
					<section class="pt-12 border-t border-dotted border-[#CBAF8A]/60">
						<div class="flex justify-between items-center mb-10">
							<h4 class="text-terracota">More Whispers</h4>
						</div>

						<div class="grid md:grid-cols-3 gap-10">
							<?php while ($more_query->have_posts()):
								$more_query->the_post(); ?>
								<article>
									<div class="mb-6">
										<?php if (has_post_thumbnail()): ?>
											<a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-lg">
												<?php the_post_thumbnail('large', array(
													'class' => 'w-full h-[220px] object-cover',
												)); ?>
											</a>
										<?php else: ?>
											<a href="<?php the_permalink(); ?>"
												class="block overflow-hidden rounded-lg bg-primary/5 h-[220px] flex items-center justify-center">
												<span class="body text-primary/60">No image available</span>
											</a>
										<?php endif; ?>
									</div>

									<p class="body text-terracota mb-2"><?php echo get_the_date('d M Y'); ?></p>
									<h5 class="mb-3">
										<a href="<?php the_permalink(); ?>"
											class="hover:text-terracota transition-colors"><?php the_title(); ?></a>
									</h5>
									<div class="body text-primary/80 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 22); ?></div>
									<a href="<?php the_permalink(); ?>"
										class="inline-flex items-center body text-terracota hover:text-primary transition-colors">Read
										more</a>
								</article>
							<?php endwhile; ?>
						</div>
					</section>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
