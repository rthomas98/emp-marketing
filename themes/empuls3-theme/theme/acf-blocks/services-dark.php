<div class="relative isolate bg-purple-600 py-24 sm:py-32 text-whites">
	<svg class="absolute inset-0 -z-10 hidden h-full w-full stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)] sm:block opacity-[.17]" aria-hidden="true">
		<defs>
			<pattern id="55d3d46d-692e-45f2-becd-d8bdc9344f45" width="200" height="200" x="50%" y="0" patternUnits="userSpaceOnUse">
				<path d="M.5 200V.5H200" fill="none" />
			</pattern>
		</defs>

		<rect width="100%" height="100%" stroke-width="0" fill="url(#55d3d46d-692e-45f2-becd-d8bdc9344f45)" />
	</svg>
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0 text-white font-medium">
			<h2 class="text-base font-semibold leading-7 text-yellow-500 mb-3"><?php the_sub_field( 'subtitle' ); ?></h2>
			<p class="text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php the_sub_field( 'title' ); ?></p>
			<p class="text-white mt-6 text-lg leading-8">
				<?php the_sub_field( 'content' ); ?>
			</p>
		</div>
		<div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
			<dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
					<?php if ( have_rows( 'service_list' ) ) : ?>
						<?php while ( have_rows( 'service_list' ) ) : the_row(); ?>
							<div class="flex flex-col">
							<dt class="text-base font-semibold leading-7 text-white">
								<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-purple-300">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
									</svg>
								</div>
								<p class="font-bold">
									<?php the_sub_field( 'header' ); ?>
								</p>
							</dt>
							<dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
								<p class="flex-auto font-medium">
									<?php the_sub_field( 'content' ); ?>
								</p>
								<p class="mt-6">
									<?php $link_url = get_sub_field( 'link_url' ); ?>
									<?php if ( $link_url ) : ?>
										<a href="<?php echo esc_url( $link_url); ?>" class="text-sm font-semibold leading-6 text-pink-400 hover:text-pink-200">
											<?php the_sub_field( 'link_label' ); ?>
										</a>
									<?php endif; ?>
								</p>
							</dd>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // No rows found ?>
					<?php endif; ?>
			</dl>
		</div>
	</div>
</div>
