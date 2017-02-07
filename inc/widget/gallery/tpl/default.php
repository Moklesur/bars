<ul class="themetim-gallery-list gallery-list list-inline margin-bottom-0">
	<?php foreach( $instance['gallery'] as $i => $gallery ) : ?>
		<li class="portfolio-image">
			<?php
			$profile_picture = $gallery['profile_picture'];
			$profile_picture_fallback = $gallery['profile_picture_fallback'];
			$image_details = siteorigin_widgets_get_attachment_image_src(
				$profile_picture,
				'',
				$profile_picture_fallback
			);
			?>
			<a class="fancybox" rel="gallery1" href="<?php echo esc_url( $image_details[0] ); ?>">
				<?php
				if ( ! empty( $image_details ) ) {
					echo '<img src="' . esc_url( $image_details[0] ) . '" class="img-responsive center-block" />';
				}
				?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>