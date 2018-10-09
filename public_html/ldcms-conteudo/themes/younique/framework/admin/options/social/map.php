<?php

if ( ! function_exists( 'eiddo_qodef_social_options_map' ) ) {
	function eiddo_qodef_social_options_map() {

	    $page = '_social_page';
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_social_page',
				'title' => esc_html__( 'Social Networks', 'eiddo' ),
				'icon'  => 'fa fa-share-alt'
			)
		);
		
		/**
		 * Enable Social Share
		 */
		$panel_social_share = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_social_page',
				'name'  => 'panel_social_share',
				'title' => esc_html__( 'Enable Social Share', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_social_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Social Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow social share on networks of your choice', 'eiddo' ),
				'parent'        => $panel_social_share
			)
		);
		
		$panel_show_social_share_on = eiddo_qodef_add_admin_panel(
			array(
				'page'            => '_social_page',
				'name'            => 'panel_show_social_share_on',
				'title'           => esc_html__( 'Show Social Share On', 'eiddo' ),
				'dependency' => array(
					'show' => array(
						'enable_social_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_social_share_on_post',
				'default_value' => 'no',
				'label'         => esc_html__( 'Posts', 'eiddo' ),
				'description'   => esc_html__( 'Show Social Share on Blog Posts', 'eiddo' ),
				'parent'        => $panel_show_social_share_on
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_social_share_on_page',
				'default_value' => 'no',
				'label'         => esc_html__( 'Pages', 'eiddo' ),
				'description'   => esc_html__( 'Show Social Share on Pages', 'eiddo' ),
				'parent'        => $panel_show_social_share_on
			)
		);

        /**
         * Action for embedding social share option for custom post types
         */
		do_action('eiddo_qodef_post_types_social_share', $panel_show_social_share_on);
		
		/**
		 * Social Share Networks
		 */
		$panel_social_networks = eiddo_qodef_add_admin_panel(
			array(
				'page'            => '_social_page',
				'name'            => 'panel_social_networks',
				'title'           => esc_html__( 'Social Networks', 'eiddo' ),
				'dependency' => array(
					'hide' => array(
						'enable_social_share'  => 'no'
					)
				)
			)
		);
		
		/**
		 * Facebook
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'facebook_title',
				'title'  => esc_html__( 'Share on Facebook', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_facebook_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Facebook', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_facebook_share_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_facebook_share_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_facebook_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'facebook_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_facebook_share_container
			)
		);
		
		/**
		 * Twitter
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'twitter_title',
				'title'  => esc_html__( 'Share on Twitter', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_twitter_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Twitter', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_twitter_share_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_twitter_share_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_twitter_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'twitter_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_twitter_share_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'twitter_via',
				'default_value' => '',
				'label'         => esc_html__( 'Via', 'eiddo' ),
				'parent'        => $enable_twitter_share_container
			)
		);
		
		/**
		 * Google Plus
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'google_plus_title',
				'title'  => esc_html__( 'Share on Google Plus', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_google_plus_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Google Plus', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_google_plus_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_google_plus_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_google_plus_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'google_plus_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_google_plus_container
			)
		);
		
		/**
		 * Linked In
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'linkedin_title',
				'title'  => esc_html__( 'Share on LinkedIn', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_linkedin_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via LinkedIn', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_linkedin_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_linkedin_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_linkedin_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'linkedin_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_linkedin_container
			)
		);
		
		/**
		 * Tumblr
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'tumblr_title',
				'title'  => esc_html__( 'Share on Tumblr', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_tumblr_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Tumblr', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_tumblr_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_tumblr_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_tumblr_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'tumblr_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_tumblr_container
			)
		);
		
		/**
		 * Pinterest
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'pinterest_title',
				'title'  => esc_html__( 'Share on Pinterest', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_pinterest_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Pinterest', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_pinterest_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_pinterest_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_pinterest_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'pinterest_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_pinterest_container
			)
		);
		
		/**
		 * VK
		 */
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'vk_title',
				'title'  => esc_html__( 'Share on VK', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_vk_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via VK', 'eiddo' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_vk_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_vk_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_vk_share'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'vk_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'eiddo' ),
				'parent'        => $enable_vk_container
			)
		);
		
		if ( defined( 'QODE_TWITTER_FEED_VERSION' ) ) {
			$twitter_panel = eiddo_qodef_add_admin_panel(
				array(
					'title' => esc_html__( 'Twitter', 'eiddo' ),
					'name'  => 'panel_twitter',
					'page'  => '_social_page'
				)
			);
			
			eiddo_qodef_add_admin_twitter_button(
				array(
					'name'   => 'twitter_button',
					'parent' => $twitter_panel
				)
			);
		}
		
		if ( defined( 'QODE_INSTAGRAM_FEED_VERSION' ) ) {
			$instagram_panel = eiddo_qodef_add_admin_panel(
				array(
					'title' => esc_html__( 'Instagram', 'eiddo' ),
					'name'  => 'panel_instagram',
					'page'  => '_social_page'
				)
			);
			
			eiddo_qodef_add_admin_instagram_button(
				array(
					'name'   => 'instagram_button',
					'parent' => $instagram_panel
				)
			);
		}
		
		/**
		 * Open Graph
		 */
		$panel_open_graph = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_social_page',
				'name'  => 'panel_open_graph',
				'title' => esc_html__( 'Open Graph', 'eiddo' ),
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_open_graph',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Open Graph', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will allow usage of Open Graph protocol on your site', 'eiddo' ),
				'parent'        => $panel_open_graph
			)
		);
		
		$enable_open_graph_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'enable_open_graph_container',
				'parent'          => $panel_open_graph,
				'dependency' => array(
					'show' => array(
						'enable_open_graph'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'open_graph_image',
				'default_value' => QODE_ASSETS_ROOT . '/img/open_graph.jpg',
				'label'         => esc_html__( 'Default Share Image', 'eiddo' ),
				'parent'        => $enable_open_graph_container,
				'description'   => esc_html__( 'Used when featured image is not set. Make sure that image is at least 1200 x 630 pixels, up to 8MB in size', 'eiddo' ),
			)
		);

        /**
         * Action for embedding social share option for custom post types
         */
        do_action('eiddo_qodef_social_options', $page);
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_social_options_map', 18 );
}