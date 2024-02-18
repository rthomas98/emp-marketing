<div class="bg-white">
	<div class="mx-auto max-w-7xl py-10 sm:px-6 sm:py-12 lg:px-8">
		<div class="relative isolate overflow-hidden bg-pink-500 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
			<svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
				<circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
				<defs>
					<radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
						<stop stop-color="#7775D6" />
						<stop offset="1" stop-color="#E935C1" />
					</radialGradient>
				</defs>
			</svg>
			<div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
				<h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php the_sub_field( 'title' ); ?></h2>
				<p class="mt-6 text-lg leading-8 text-gray-300">
					<?php the_sub_field( 'content' ); ?>
				</p>
				<div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
					<?php $button_one_link = get_sub_field( 'button_one_link' ); ?>
					<?php if ( $button_one_link ) : ?>
						<a class="rounded-md bg-yellow-500 px-3.5 py-2.5 text-sm font-semibold text-purple-900 shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white" href="<?php echo esc_url( $button_one_link); ?>"><?php the_sub_field( 'button_one_label' ); ?></a>
					<?php endif; ?>

					<?php $button_two_link = get_sub_field( 'button_two_link' ); ?>
					<?php if ( $button_two_link ) : ?>
						<a class="text-sm font-semibold leading-6 text-white hover:text-yellow-500" href="<?php echo esc_url( $button_two_link); ?>"><?php the_sub_field( 'button_two_label' ); ?> <span aria-hidden="true">→</span></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="relative mt-16 h-80 lg:mt-8">
				<?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10 object-fill" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
