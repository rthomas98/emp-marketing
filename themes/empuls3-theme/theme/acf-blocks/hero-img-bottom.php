<div class="bg-white">
    <div class="relative isolate">
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
        <div class="py-24 sm:py-32 lg:pb-40">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"><?php the_sub_field( 'title' ); ?></h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600"><?php the_sub_field( 'content' ); ?></p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <?php $button_one_link = get_sub_field( 'button_one_link' ); ?>
                        <?php if ( $button_one_link ) : ?>
                            <a href="<?php echo esc_url( $button_one_link); ?>" class="rounded-md bg-pink-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600"><?php the_sub_field( 'button_one_label' ); ?></a>
                        <?php endif; ?>

                        <?php $button_two_link = get_sub_field( 'button_two_link' ); ?>
                        <?php if ( $button_two_link ) : ?>
                            <a href="<?php echo esc_url( $button_two_link); ?>" class="text-sm font-semibold leading-6 text-gray-900 hover:text-pink-600"><?php the_sub_field( 'button_two_label' ); ?><span aria-hidden="true">→</a>
                        <?php endif; ?>

                    </div>
                </div>
				<!-- Grid -->
				<div class="mt-20 grid grid-cols-12 items-center gap-x-2 sm:gap-x-6 lg:gap-x-8">
					<div class="hidden md:block col-span-4 md:col-span-3">
						<img class="rounded-xl" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80" alt="Image Description">
					</div>
					<!-- End Col -->

					<div class="col-span-4 md:col-span-3">
						<img class="rounded-xl" src="https://images.unsplash.com/photo-1587613991119-fbbe8e90531d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1003&q=80" alt="Image Description">
					</div>
					<!-- End Col -->

					<div class="col-span-4 md:col-span-3">
						<img class="rounded-xl" src="https://images.unsplash.com/photo-1554295405-abb8fd54f153?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=652&q=80" alt="Image Description">
					</div>
					<!-- End Col -->

					<div class="col-span-4 md:col-span-3">
						<img class="rounded-xl" src="https://images.unsplash.com/photo-1640622300473-977435c38c04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2072&q=80" alt="Image Description">
					</div>
					<!-- End Col -->
				</div>
				<!-- End Grid -->
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
</div>
