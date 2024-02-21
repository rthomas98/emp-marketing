<!-- Features -->
<div class="relative isolate max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
	<svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
		<defs>
			<pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
				<path d="M100 200V.5M.5 .5H200" fill="none" />
			</pattern>
		</defs>
		<svg x="50%" y="-1" class="overflow-visible fill-gray-50">
			<path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
		</svg>
		<rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
	</svg>
	<!-- Grid -->
	<div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
		<div>
			<?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img class="rounded-xl" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
		</div>
		<!-- End Col -->

		<div class="mt-5 sm:mt-10 lg:mt-0">
			<div class="space-y-6 sm:space-y-8">
				<!-- Title -->
				<div class="space-y-2 md:space-y-4">
					<h2 class="text-base font-semibold leading-7 text-pink-600"><?php the_sub_field( 'subtitle' ); ?></h2>
					<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php the_sub_field( 'title' ); ?></p>
					<p class="mt-6 text-lg leading-8 text-gray-600 font-normal">
						<?php the_sub_field( 'content' ); ?>
					</p>
				</div>
				<!-- End Title -->

				<!-- List -->
				<?php if ( have_rows( 'bullet_points' ) ) : ?>
					<ul role="list" class="mt-8 space-y-8 text-gray-600">
						<?php while ( have_rows( 'bullet_points' ) ) : the_row(); ?>
							<li class="flex gap-x-3 mb-3">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 h-5 w-5 flex-none text-yellow-500">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
								</svg>

								<span><strong class="font-normal text-gray-900">
										<?php the_sub_field( 'item' ); ?>
								</span>
							</li>
					<?php endwhile; ?>
				</ul>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
				<div class="mt-10 flex items-center gap-x-6">
					<a href="#" class="rounded-md bg-purple-500-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">Get started</a>
				</div>

				<!-- End List -->
			</div>
		</div>
		<!-- End Col -->
	</div>
	<!-- End Grid -->
</div>
<!-- End Features -->
