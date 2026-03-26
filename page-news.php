<?php

/**
 * Template Name: News
 */

get_header();
?>

<section class="relative h-screen flex justify-center items-center">
	<div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
		<img class="w-full h-full object-cover"
			src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-wellness.webp" alt="News hero background">
	</div>

	<div class="container relative z-10 mt-14 text-center text-beige">
		<h4 class="mb-6">A Quiet Space of Wellness in a Fast World</h4>
		<p class="body max-w-[621px] mx-auto">
			Wellness Whisper is where Sandjong shares what stirs within, such as thoughtful updates, seasonal
			rituals, and cultural moments that follow the rhythm of rest and renewal. From treatments inspired by
			ancestral ingredients to workshops and limited offerings, each story unfolds gently for your eyes only.
		</p>
	</div>
</section>

<section class="bg-beige relative py-10">
	<div class="container relative z-10 text-primary pt-16">
		<div class="mb-10 md:mb-12 text-left">
			<h4 class="text-terracota mb-3">Gentle Offerings</h4>
			<p class="body">
				Limited-time rituals and curated treatments inspired by the season's energy that are designed to bring
				balance in rhythm with nature.
			</p>
		</div>

		<div id="promo-ajax-wrapper">
			<?php
			$promo_paged = isset($_GET['promo_page']) ? max(1, (int) $_GET['promo_page']) : 1;
			$promo_per_page = 3;

			$promo_query = new WP_Query(
				array(
					'post_type' => 'promotions', // CPT slug
					'posts_per_page' => $promo_per_page,
					'paged' => $promo_paged,
					'ignore_sticky_posts' => true,
				)
			);

			if ($promo_query->have_posts()): ?>
				<div class="grid md:grid-cols-3 gap-10 md:gap-16 mb-12">
					<?php while ($promo_query->have_posts()):
						$promo_query->the_post(); ?>
						<article>
							<?php if (has_post_thumbnail()): ?>
								<a href=" <?php echo get_field('link') ?>" class="block">
									<?php the_post_thumbnail('large', array(
										'class' => 'w-full object-cover rounded-xl mb-4 aspect-video',
									)); ?>
								</a>
							<?php endif; ?>

							<h5 class="mb-2">
								<a href="<?php echo get_field('link') ?>"
									class="hover:text-terracota transition-colors !no-underline">
									<?php the_title(); ?>
								</a>
							</h5>
							<div class="body text-primary/80 mb-4">
								<?php echo wp_trim_words(get_the_excerpt(), 20); ?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>

				<?php
				$promo_total_pages = $promo_query->max_num_pages;
				if ($promo_total_pages > 1):
					$promo_links = paginate_links(
						array(
							'base' => esc_url(remove_query_arg('promo_page')) . '%_%',
							'format' => (strpos(get_permalink(), '?') === false ? '?' : '&') . 'promo_page=%#%',
							'current' => $promo_paged,
							'total' => $promo_total_pages,
							'type' => 'array',
							'prev_text' => '&laquo;',
							'next_text' => '&raquo;',
						)
					);

					if (!empty($promo_links)): ?>
						<div class="flex justify-center mt-4 news-pagination">
							<ul class="flex items-center gap-4 text-sm body text-primary/80">
								<?php foreach ($promo_links as $link): ?>
									<li class="px-1">
										<?php echo wp_kses_post($link); ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p class="body text-primary/80">Belum ada promotions untuk ditampilkan.</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="bg-beige py-10 relative">
	<div class="container text-primary">
		<div class="mb-16">
			<h4 class="text-terracota mb-5 md:mb-3 max-w-[240px] md:max-w-full">Whispers from Sandjong</h4>
			<p class="body max-w-[291px] md:max-w-full">
				The thoughtful updates from our sanctuaries, including new rituals, cultural moments, and
				what’s quietly unfolding at Sandjong.
			</p>
		</div>

		<div id="news-ajax-wrapper">
			<?php
			// Main News loop with pagination
			$news_paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$news_per_page = 6;
			$news_query = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => $news_per_page,
					'paged' => $news_paged,
				)
			);

			if ($news_query->have_posts()):
				while ($news_query->have_posts()):
					$news_query->the_post();
					?>
					<article class="border-b border-gold border-dashed mb-12 pb-12 last:mb-0">
						<div class="grid md:grid-cols-[minmax(0,320px)_minmax(0,1fr)] gap-8 md:gap-24 items-start">
							<div class="w-full">
								<?php if (has_post_thumbnail()): ?>
									<a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-lg">
										<?php the_post_thumbnail('large', array(
											'class' => 'w-full h-full object-cover',
										)); ?>
									</a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>"
										class="block !no-underline overflow-hidden rounded-lg bg-primary/5 h-full min-h-[250px] flex items-center justify-center">
										<span class="body text-primary/60">No image available</span>
									</a>
								<?php endif; ?>
							</div>

							<div>
								<p class="opacity-60 text-primary text-[10px] mb-3">
									<?php echo get_the_date('d M Y'); ?>
								</p>
								<h4 class="mb-4">
									<a href="<?php the_permalink(); ?>"
										class="hover:text-terracota transition-colors !no-underline">
										<?php the_title(); ?>
									</a>
								</h4>
								<div class="body line-clamp-2 mb-10 md:mb-24">
									<?php the_excerpt(); ?>
								</div>
								<div>
									<a href="<?php the_permalink(); ?>"
										class="inline-flex items-center body text-terracota hover:text-primary transition-colors">
										Read more
									</a>
								</div>
							</div>

						</div>
					</article>
					<?php
				endwhile;

				// Numeric pagination styled like the design
				$total_pages = $news_query->max_num_pages;
				if ($total_pages > 1):
					$current_page = max(1, $news_paged);
					$links = paginate_links(
						array(
							'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
							'format' => '?paged=%#%',
							'current' => $current_page,
							'total' => $total_pages,
							'type' => 'array',
							'prev_text' => '&laquo;',
							'next_text' => '&raquo;',
						)
					);

					if (!empty($links)): ?>
						<div class="mt-16 pt-6 border-t border-dotted border-[#CBAF8A]/60 news-pagination">
							<div class="flex justify-center">
								<ul class="flex items-center gap-4 text-sm body text-primary/80">
									<?php foreach ($links as $link): ?>
										<li class="px-1">
											<?php echo wp_kses_post($link); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p class="body text-primary/70 mb-12">Belum ada news yang bisa ditampilkan.</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($) {
		$(document).on('click', '.news-pagination a', function(e) {
			e.preventDefault();
			const url = $(this).attr('href');
			const $wrapper = $(this).closest('[id$="-ajax-wrapper"]');
			const wrapperId = $wrapper.attr('id');

			// Add a subtle loading state
			$wrapper.animate({
				opacity: 0.5
			}, 200);

			// Perform AJAX request
			$.ajax({
				url: url,
				type: 'GET',
				success: function(response) {
					const $newHtml = $(response).find('#' + wrapperId).html();
					if ($newHtml) {
						$wrapper.html($newHtml);
						$wrapper.animate({
							opacity: 1
						}, 200);

						// Update Browser URL
						window.history.pushState({
							path: url
						}, '', url);

						// Optional: Scroll to the top of the section
						$('html, body').animate({
							scrollTop: $wrapper.offset().top - 150
						}, 500);
					}
				},
				error: function() {
					window.location.href = url; // Fallback to normal load
				}
			});
		});

		// Handle browser back/forward buttons
		window.onpopstate = function() {
			window.location.reload();
		};
	});
</script>
<?php get_footer(); ?>