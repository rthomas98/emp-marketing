<div class="relative isolate bg-white py-24 sm:py-32">
	<svg class="absolute inset-0 -z-10 hidden h-full w-full stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)] sm:block" aria-hidden="true">
		<defs>
			<pattern id="55d3d46d-692e-45f2-becd-d8bdc9344f45" width="200" height="200" x="50%" y="0" patternUnits="userSpaceOnUse">
				<path d="M.5 200V.5H200" fill="none" />
			</pattern>
		</defs>
		<svg x="50%" y="0" class="overflow-visible fill-gray-50">
			<path d="M-200.5 0h201v201h-201Z M599.5 0h201v201h-201Z M399.5 400h201v201h-201Z M-400.5 600h201v201h-201Z" stroke-width="0" />
		</svg>
		<rect width="100%" height="100%" stroke-width="0" fill="url(#55d3d46d-692e-45f2-becd-d8bdc9344f45)" />
	</svg>
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl text-center">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php the_sub_field( 'title' ); ?></h2>
			<p class="mt-2 text-lg leading-8 text-gray-600">
				<?php the_sub_field( 'content' ); ?>
			</p>
		</div>
		<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
			<?php
			// WP_Query arguments
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC',
			);

			// The Query
			$the_query = new WP_Query($args);

			// The Loop
			if ($the_query->have_posts()) {
				while ($the_query->have_posts()) {
					$the_query->the_post();

					// Get the post ID
					$post_id = get_the_ID();

					// Get the categories
					$categories = get_the_category($post_id);
					$category_names = array();
					foreach ($categories as $category) {
						$category_names[] = $category->name;
					}

					// Get the featured image
					$featured_image_url = get_the_post_thumbnail_url($post_id, 'full');

					// Get author fields
					$author_name = get_the_author_meta('display_name');
					$author_email = get_the_author_meta('email');
					$author_image_url = get_avatar_url($author_email, ['size' => '100']);
					?>
					<article class="flex flex-col items-start justify-between">
						<div class="relative w-full">
							<?php if ($featured_image_url) : ?>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo esc_url($featured_image_url); ?>" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
							</a>
							<?php endif; ?>
							<div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
						</div>
						<div class="max-w-xl">
							<div class="mt-8 flex items-center gap-x-4 text-xs">
								<time datetime="<?php echo get_the_date('c'); ?>" class="text-gray-500"><?php echo get_the_date(); ?></time>
								<?php foreach ($category_names as $category_name) : ?>
									<a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?php echo esc_html($category_name); ?></a>
								<?php endforeach; ?>
							</div>
							<div class="group relative">
								<h3 class="mt-3 text-lg font-semibold leading-6 text-pink-500 group-hover:text-pink-300">
									<a href="<?php the_permalink(); ?>">
										<span class="absolute inset-0"></span>
										<?php the_title(); ?>
									</a>
								</h3>
								<p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
									<?php echo substr(get_the_excerpt(), 0, 275) . '...'; ?>
								</p>
							</div>
							<div class="relative mt-8 flex items-center gap-x-4">
								<?php if ($author_image_url) : ?>
									<img src="<?php echo esc_url($author_image_url); ?>" alt="Avatar of <?php echo esc_attr($author_name); ?>" class="h-10 w-10 rounded-full bg-gray-100">
								<?php endif; ?>
								<div class="text-sm leading-6">
									<p class="font-semibold text-gray-900">
										<a href="#">
											<span class="absolute inset-0"></span>
											<p class="font-semibold text-gray-900"><?php echo esc_html($author_name); ?></p>
										</a>
									</p>
								</div>
							</div>
						</div>
					</article>
					<?php
				}
			} else {
				// No posts found
				echo '<p>No recent posts found.</p>';
			}
			// Restore original Post Data
			wp_reset_postdata();
			?>
		</div>

	</div>
</div>
