<?php

if ( class_exists( 'QuadLayers\\WP_Notice_Plugin_Promote\\Load' ) ) {
	/**
	 *  Promote constants
	 */
	define( 'QLWAPP_PROMOTE_LOGO_SRC', plugins_url( '/assets/backend/img/logo.jpg', QLWAPP_PLUGIN_FILE ) );
	/**
	 * Notice review
	 */
	define( 'QLWAPP_PROMOTE_REVIEW_URL', 'https://wordpress.org/support/plugin/wp-tiktok-feed/reviews/?filter=5#new-post' );
	/**
	 * Notice premium sell
	 */
	define( 'QLWAPP_PROMOTE_PREMIUM_SELL_SLUG', 'wp-whatsapp-chat-pro' );
	define( 'QLWAPP_PROMOTE_PREMIUM_SELL_NAME', 'Social Chat PRO' );
	define( 'QLWAPP_PROMOTE_PREMIUM_SELL_URL', QLWAPP_PREMIUM_SELL_URL );
	define( 'QLWAPP_PROMOTE_PREMIUM_INSTALL_URL', 'https://quadlayers.com/product/whatsapp-chat/?utm_source=qlwapp_admin' );
	/**
	 * Notice cross sell 1
	 */
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_1_SLUG', 'insta-gallery' );
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_1_NAME', 'Instagram Feed Gallery' );
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_1_DESCRIPTION', esc_html__( 'Instagram Feed Gallery is the most user-friendly Instagram plugin for WordPress. It was built to simplify the integration, to reduce time to have sites updated and to be on track with social media that shows best growing indicators.', 'wp-whatsapp-chat' ) );
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_1_URL', 'https://quadlayers.com/portfolio/instagram-feed/?utm_source=qlwapp_admin' );
	/**
	 * Notice cross sell 2
	 */
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_2_SLUG', 'wp-tiktok-feed' );
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_2_NAME', 'TikTok Feed' );
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_2_DESCRIPTION', esc_html__( 'TikTok Feed is the most user-friendly TikTok plugin for WordPress. It was built to simplify the integration, to reduce time to have sites updated and to be on track with social media that shows best growing indicators.', 'wp-whatsapp-chat' ) );
	define( 'QLWAPP_PROMOTE_CROSS_INSTALL_2_URL', 'https://quadlayers.com/portfolio/tiktok-feed/?utm_source=qlwapp_admin' );

	new \QuadLayers\WP_Notice_Plugin_Promote\Load(
		QLWAPP_PLUGIN_FILE,
		array(
			array(
				'type'               => 'ranking',
				'notice_delay'       => MONTH_IN_SECONDS,
				'notice_logo'        => QLWAPP_PROMOTE_LOGO_SRC,
				'notice_title'       => sprintf(
					esc_html__(
						'Hello! Thank you for choosing the %s plugin!',
						'wp-whatsapp-chat'
					),
					QLWAPP_PLUGIN_NAME
				),
				'notice_description' => esc_html__( 'Could you please give it a 5-star rating on WordPress?. Your feedback will boost our motivation and help us promote and continue to improve this product.', 'wp-whatsapp-chat' ),
				'notice_link'        => QLWAPP_PROMOTE_REVIEW_URL,
				'notice_link_label'  => esc_html__(
					'Yes, of course!',
					'wp-whatsapp-chat'
				),
				'notice_more_link'   => QLWAPP_SUPPORT_URL,
				'notice_more_label'  => esc_html__(
					'Report a bug',
					'wp-whatsapp-chat'
				),
			),
			array(
				'plugin_slug'        => QLWAPP_PROMOTE_PREMIUM_SELL_SLUG,
				'plugin_install_link'   => QLWAPP_PROMOTE_PREMIUM_INSTALL_URL,
				'plugin_install_label'  => esc_html__(
					'Purchase Now',
					'wp-whatsapp-chat'
				),
				'notice_delay'       => MONTH_IN_SECONDS,
				'notice_logo'        => QLWAPP_PROMOTE_LOGO_SRC,
				'notice_title'       => esc_html__(
					'Hello! We have a special gift!',
					'wp-whatsapp-chat'
				),
				'notice_description' => sprintf(
					esc_html__(
						'Today we want to make you a special gift. Using the coupon code %1$s before the next 48 hours you can get a 20 percent discount on the premium version of the %2$s plugin.',
						'wp-whatsapp-chat'
					),
					'ADMINPANEL20%',
					QLWAPP_PROMOTE_PREMIUM_SELL_NAME
				),
				'notice_more_link'   => QLWAPP_PROMOTE_PREMIUM_SELL_URL,
				'notice_more_label'  => esc_html__(
					'More info!',
					'wp-whatsapp-chat'
				),
			),
			array(
				'plugin_slug'        => QLWAPP_PROMOTE_CROSS_INSTALL_1_SLUG,
				'notice_delay'       => MONTH_IN_SECONDS * 4,
				'notice_logo'        => QLWAPP_PROMOTE_LOGO_SRC,
				'notice_title'       => sprintf(
					esc_html__(
						'Hello! We want to invite you to try our %s plugin!',
						'wp-whatsapp-chat'
					),
					QLWAPP_PROMOTE_CROSS_INSTALL_1_NAME
				),
				'notice_description' => QLWAPP_PROMOTE_CROSS_INSTALL_1_DESCRIPTION,
				'notice_more_link'   => QLWAPP_PROMOTE_CROSS_INSTALL_1_URL,
				'notice_more_label'  => esc_html__(
					'More info!',
					'wp-whatsapp-chat'
				),
			),
			array(
				'plugin_slug'        => QLWAPP_PROMOTE_CROSS_INSTALL_2_SLUG,
				'notice_delay'       => MONTH_IN_SECONDS * 6,
				'notice_logo'        => QLWAPP_PROMOTE_LOGO_SRC,
				'notice_title'       => sprintf(
					esc_html__(
						'Hello! We want to invite you to try our %s plugin!',
						'wp-whatsapp-chat'
					),
					QLWAPP_PROMOTE_CROSS_INSTALL_2_NAME
				),
				'notice_description' => QLWAPP_PROMOTE_CROSS_INSTALL_2_DESCRIPTION,
				'notice_more_link'   => QLWAPP_PROMOTE_CROSS_INSTALL_2_URL,
				'notice_more_label'  => esc_html__(
					'More info!',
					'wp-whatsapp-chat'
				),
			),
		)
	);
}
