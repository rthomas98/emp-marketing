<div class="relative isolate overflow-hidden bg-white pb-24 sm:pb-32">
	<svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_left,white,transparent)]" aria-hidden="true">
		<defs>
			<pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
				<path d="M.5 200V.5H200" fill="none" />
			</pattern>
		</defs>
		<rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
	</svg>
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0">
			<h2 class="text-base font-semibold leading-7 text-pink-600"><?php the_sub_field( 'subtitle' ); ?></h2>
			<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php the_sub_field( 'title' ); ?></p>
			<p class="mt-6 text-lg leading-8 text-gray-600 font-normal">
				<?php the_sub_field( 'content' ); ?>
			</p>
		</div>
		<div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
			<?php if ( have_rows( 'process' ) ) : ?>
			<dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
			<?php while ( have_rows( 'process' ) ) : the_row(); ?>
					<div class="flex flex-col">
						<dt class="text-base font-semibold leading-7 text-gray-900">
							<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-yellow-500">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
								</svg>

							</div>
							<?php the_sub_field( 'header' ); ?>
						</dt>
						<dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
							<p class="flex-auto">
								<?php the_sub_field( 'content' ); ?>
							</p>
						</dd>
					</div>
				<?php endwhile; ?>
			</dl>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>
		</div>
	</div>
</div>
