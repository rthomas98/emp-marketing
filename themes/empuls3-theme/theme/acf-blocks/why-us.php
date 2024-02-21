<?php if ( have_rows( 'why_box List' ) ) : ?>
	<?php $counter = 0; // Initialize counter ?>
	<?php while ( have_rows( 'why_box List' ) ) : the_row(); ?>
		<?php $counter++; // Increment counter ?>
		<div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
			<svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
				<defs>
					<pattern id="pattern-<?php echo $counter; ?>" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
						<path d="M.5 200V.5H200" fill="none" />
					</pattern>
				</defs>
				<rect width="100%" height="100%" stroke-width="0" fill="url(#pattern-<?php echo $counter; ?>)" />
			</svg>
			<div class="mx-auto max-w-7xl px-6 lg:px-8">
				<!-- Adjust the grid layout for staggering -->
				<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none <?php echo $counter % 2 == 0 ? 'lg:grid-cols-2 lg:grid-flow-row-dense' : 'lg:grid-cols-2'; ?> lg:items-start">
					<!-- Conditionally place image on the left or right -->
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image && $counter % 2 == 0 ) : // For even counters, image first ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="lg:order-1 w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10" width="2432" height="1442" />
					<?php endif; ?>

					<div class="lg:pr-4 lg:pt-4 lg:order-2">
						<div class="lg:max-w-lg">
							<h2 class="text-base font-semibold leading-7 text-pink-500"><?php the_sub_field( 'subtitle' ); ?></h2>
							<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php the_sub_field( 'title' ); ?></p>
							<p class="mt-6 text-lg leading-8 text-gray-600"><?php the_sub_field( 'description' ); ?></p>

							<?php if ( have_rows( 'details' ) ) : ?>
								<dl class="mt-10 space-y-8">
									<?php while ( have_rows( 'details' ) ) : the_row(); ?>
										<div class="relative pl-9">
											<dt class="font-semibold text-gray-900"><?php the_sub_field( 'header' ); ?></dt>
											<dd><?php the_sub_field( 'content' ); ?></dd>
										</div>
									<?php endwhile; ?>
								</dl>
							<?php endif; ?>
						</div>
					</div>

					<?php if ( $image && $counter % 2 != 0 ) : // For odd counters, image after text ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="lg:order-3 w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10" width="2432" height="1442" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php else : ?>
	<!-- No rows found -->
<?php endif; ?>
