<div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
	<div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
		<svg class="h-[40rem] w-[80rem] flex-none stroke-gray-200" aria-hidden="true">
			<defs>
				<pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%" patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
					<path d="M.5 200V.5H200" fill="none" />
				</pattern>
			</defs>
			<svg x="50%" y="50%" class="overflow-visible fill-gray-50">
				<path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0" />
			</svg>
			<rect width="100%" height="100%" stroke-width="0" fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)" />
		</svg>
	</div>
	<div class="mx-auto max-w-7xl px-6 lg:px-8 content-center">
		<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
			<div class="lg:ml-auto lg:pl-4 lg:pt-4">
				<div class="lg:max-w-lg">
					<h2 class="text-base font-semibold leading-7 text-pink-500"><?php the_sub_field( 'subtitle' ); ?></h2>
					<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php the_sub_field( 'title' ); ?></p>
					<p class="mt-6 text-lg leading-8 text-gray-600">
						<?php the_sub_field( 'content' ); ?>
					</p>
					<?php if ( have_rows( 'services_list' ) ) : ?>
					<dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
						<?php while ( have_rows( 'services_list' ) ) : the_row(); ?>
							<div class="relative pl-9">
								<dt class="inline font-semibold text-gray-900">
									<svg class="absolute left-1 top-1 h-5 w-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
									</svg>

									<?php the_sub_field( 'header' ); ?>
								</dt>
								<dd class="inline font-normal">
									<?php the_sub_field( 'content' ); ?>
								</dd>

								<p class="mt-6">
									<?php $link_url = get_sub_field( 'link_url' ); ?>
									<?php if ( $link_url ) : ?>
										<a href="<?php echo esc_url( $link_url); ?>" class="text-sm font-semibold leading-6 text-pink-400 hover:text-pink-200">
											<?php the_sub_field( 'link_label' ); ?>
										</a>
									<?php endif; ?>
								</p>
							</div>
						<?php endwhile; ?>
					</dl>
					<?php else : ?>
						<?php // No rows found ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="flex items-start justify-end lg:order-first">
				<?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
