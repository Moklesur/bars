<?php
/**
 * Tabs widget.
 *
 * @package themetim
 */

class Themetim_Tabs_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-tabs-widget',
			__( 'ThemeTim Tabs', 'themetim' ),
			array(
				'description' => __( 'Displays Tabs', 'themetim' ),
			),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'themetim' ),
				),
				'tabs' => array(
					'type'       => 'repeater',
					'label'      => __( 'Tabs', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-tabs-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'tabs_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'themetim' ),
							'default' => '',
							'rows' => 10,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
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

siteorigin_widget_register( 'themetim-tabs-widget', __FILE__, 'Themetim_Tabs_Widget' );
