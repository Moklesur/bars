<?php
/**
 * Gallery widget.
 *
 * @package themetim
 */

class Themetim_Gallery_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-gallery-widget',
			__( 'ThemeTim Gallery', 'themetim' ),
			array(
				'description' => __( 'Displays Gallery', 'themetim' ),
			),
			array(),
			array(
				'gallery' => array(
					'type'       => 'repeater',
					'label'      => __( 'Gallery', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-gallery-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'themetim' ),
							'fallback' => true,
						),
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-gallery-widget', __FILE__, 'Themetim_Gallery_Widget' );
