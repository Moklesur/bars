<div class="tabs-wrap">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<h2 class="menu-title"><?php echo  esc_html( $instance['title'] ); ?></h2>
	<?php endif; ?>

	<!-- Nav tabs -->
	<div class="tabs-list">
		<ul class="nav nav-tabs" role="tablist">
			<?php foreach( $instance['tabs'] as $i => $tabs ) : ?>
				<?php if ( ! empty( $tabs['tabs_title'] ) ) :
					$tabs_title = '';
					$tabs_title = $tabs['tabs_title'];
					?>
					<li role="presentation" class="tabs-fix text-capitalize"><a href="#<?php echo str_replace(' ', '', $tabs_title); ?>" aria-controls="<?php echo str_replace(' ', '', $tabs_title); ?>" role="tab" data-toggle="tab"><?php echo trim( $tabs['tabs_title'] ); ?></a></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
		<div class="tab-content">
			<?php foreach( $instance['tabs'] as $i => $tabs ) : ?>
				<?php if ( ! empty( $tabs['texteditor'] ) ) :
					$tabs_title = '';
					$tabs_title = $tabs['tabs_title'];
					?>
					<div role="tabpanel" class="tab-pane tabs-list-details" id="<?php echo str_replace(' ', '', $tabs_title); ?>">
						<?php echo $tabs['texteditor']; ?>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function () {
		if(jQuery('.tabs-list').length){
			jQuery('.nav-tabs').find('.tabs-fix').first().addClass('active');
			jQuery('.tab-content').find('.tab-pane').first().addClass('active');
		}
	});
</script>
