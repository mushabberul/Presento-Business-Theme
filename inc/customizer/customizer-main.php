<?php
if(!class_exists('Kirki')){
	return false;
}
define('PRESENTO_CUSTOMIZER_CONFIG_ID','theme_config_id');
define('PRESENTO_CUSTOMIZER_PANEL_ID','panel_id');

Kirki::add_config( PRESENTO_CUSTOMIZER_CONFIG_ID, array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_panel( PRESENTO_CUSTOMIZER_PANEL_ID, array(
	'priority'    => 210,
	'title'       => esc_html__( 'Presento Home Page Setting', 'presento' ),
	'description' => esc_html__( 'You can control your content', 'presento' ),
) );
Kirki::add_section( 'hero_section_id', array(
	'title'          => esc_html__( 'Hero Section', 'presento' ),
	'description'    => esc_html__( 'Change content your hero section.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'hero_section_title',
	'label'    => esc_html__( 'Enter Your Title', 'presento' ),
	'section'  => 'hero_section_id',
	'default'  => esc_html__( 'Bettter digital experience with Presento', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'hero_section_description',
	'label'    => esc_html__( 'Enter Your Description', 'presento' ),
	'section'  => 'hero_section_id',
	'default'  => esc_html__( 'We are team of talented designers making websites with Bootstrap', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'hero_section_button',
	'label'    => esc_html__( 'Enter Your Button Text', 'presento' ),
	'section'  => 'hero_section_id',
	'default'  => esc_html__( 'Get Started', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'link',
	'settings' => 'hero_section_button_link',
	'label'    => esc_html__( 'Enter Your Button URL', 'presento' ),
	'section'  => 'hero_section_id',
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'image',
	'settings'    => 'hero_section_bg',
	'label'       => esc_html__( 'Upload Background Image', 'presento' ),
	'section'     => 'hero_section_id',
] );


Kirki::add_section( 'client_logos', array(
	'title'          => esc_html__( 'Clients Logo Section', 'presento' ),
	'description'    => esc_html__( 'Set your clients logo.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Enter Your Client Logos', 'presento' ),
	'section'     => 'client_logos',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Enter Logo', 'presento' ),
	],
	'button_label' => esc_html__('Add New', 'presento' ),
	'settings'     => 'client_logos_display',
	'fields' => [
		'client_logo_link' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Logo', 'presento' ),
		],
	]
] );

Kirki::add_section( 'about_section', array(
	'title'          => esc_html__( 'About Section', 'presento' ),
	'description'    => esc_html__( 'Set your about section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'about_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'Voluptatem dignissimos provident quasi', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'textarea',
	'settings' => 'about_description',
	'label'    => esc_html__( 'Description', 'present' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'about_button',
	'label'    => esc_html__( 'Button Text', 'presento' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'About us', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'link',
	'settings' => 'about_button_link',
	'label'    => __( 'About Button Link', 'presento' ),
	'section'  => 'about_section',
	'default'  => '#about',
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your About Items', 'presento' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'About Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'about_items',
	'fields' => [
		'about_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Item Icon', 'presento' ),
			'choices'     => [
				'bx bx-receipt' => esc_html__( 'Receipt', 'presento' ),
				'bx bx-cube-alt' => esc_html__( 'Cube', 'presento' ),
				'bx bx-images' => esc_html__( 'Image', 'presento' ),
				'bx bx-shield' => esc_html__( 'Shield', 'presento' ),
				'bi bi-briefcase' => esc_html__( 'Briefase', 'presento' ),
				'bi bi-card-checklist' => esc_html__( 'Checklist', 'presento' ),
				'bi bi-bar-chart' => esc_html__( 'Chart', 'presento' ),
				'bi bi-binoculars' => esc_html__( 'Binoculars', 'presento' ),
				'bi bi-brightness-high' => esc_html__( 'Brightness High', 'presento' ),
				'bi bi-calendar4-week' => esc_html__( 'Calendare Week', 'presento' ),
			],
		],
		'about_item_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Title', 'presento' ),
		],
		'about_item_description'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Item Description', 'presento' ),
		],
	]
] );

Kirki::add_section( 'count_section', array(
	'title'          => esc_html__( 'Count Section', 'presento' ),
	'description'    => esc_html__( 'Set your count section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your Count Items', 'presento' ),
	'section'     => 'count_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Count Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'count_items',
	'fields' => [
		'count_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Item Icon', 'presento' ),
			'choices'     => [
				'bi bi-emoji-smile' => esc_html__( 'Smile', 'presento' ),
				'bi bi-journal-richtext' => esc_html__( 'Journal Richtex', 'presento' ),
				'bi bi-headset' => esc_html__( 'Headset', 'presento' ),
				'bx bx-receipt' => esc_html__( 'Receipt', 'presento' ),
				'bi bi-people' => esc_html__( 'People', 'presento' ),
				'bx bx-cube-alt' => esc_html__( 'Cube', 'presento' ),
				'bx bx-images' => esc_html__( 'Image', 'presento' ),
				'bx bx-shield' => esc_html__( 'Shield', 'presento' ),
				'bi bi-briefcase' => esc_html__( 'Briefase', 'presento' ),
				'bi bi-card-checklist' => esc_html__( 'Checklist', 'presento' ),
				'bi bi-bar-chart' => esc_html__( 'Chart', 'presento' ),
				'bi bi-binoculars' => esc_html__( 'Binoculars', 'presento' ),
				'bi bi-brightness-high' => esc_html__( 'Brightness High', 'presento' ),
				'bi bi-calendar4-week' => esc_html__( 'Calendare Week', 'presento' ),
			],
		],
		'count_item_number'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Number', 'presento' ),
		],
		'count_item_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Title', 'presento' ),
		],
	]
] );

Kirki::add_section( 'services_section', array(
	'title'          => esc_html__( 'Services Section', 'presento' ),
	'description'    => esc_html__( 'Set your services section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'services_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'SERVICES', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'textarea',
	'settings' => 'services_description',
	'label'    => esc_html__( 'Description', 'present' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your About Items', 'presento' ),
	'section'     => 'services_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Services Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'services_items',
	'fields' => [
		'services_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Item Icon', 'presento' ),
			'choices'     => [
				'bi bi-briefcase' => esc_html__( 'Briefcase', 'presento' ),
				'bi bi-card-checklist' => esc_html__( 'Checklist', 'presento' ),
				'bi bi-bar-chart' => esc_html__( 'Chart', 'presento' ),
				'bi bi-calendar4-week' => esc_html__( 'Calender', 'presento' ),
				'bx bx-receipt' => esc_html__( 'Receipt', 'presento' ),
				'bx bx-cube-alt' => esc_html__( 'Cube', 'presento' ),
				'bx bx-images' => esc_html__( 'Image', 'presento' ),
				'bx bx-shield' => esc_html__( 'Shield', 'presento' ),
				'bi bi-briefcase' => esc_html__( 'Briefase', 'presento' ),
				'bi bi-card-checklist' => esc_html__( 'Checklist', 'presento' ),
				'bi bi-bar-chart' => esc_html__( 'Chart', 'presento' ),
				'bi bi-binoculars' => esc_html__( 'Binoculars', 'presento' ),
				'bi bi-brightness-high' => esc_html__( 'Brightness High', 'presento' ),
				'bi bi-calendar4-week' => esc_html__( 'Calendare Week', 'presento' ),
			],
		],
		'services_item_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Title', 'presento' ),
		],
		'services_item_description'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Item Description', 'presento' ),
		],
	]
] );

Kirki::add_section( 'portfolios_section', array(
	'title'          => esc_html__( 'Portfolio Section', 'presento' ),
	'description'    => esc_html__( 'Set your portfolio section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'portfolio_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'portfolios_section',
	'default'  => esc_html__( 'PORTFOLIO', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'textarea',
	'settings' => 'portfolio_description',
	'label'    => esc_html__( 'Description', 'present' ),
	'section'  => 'portfolios_section',
	'default'  => esc_html__( 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your About Items', 'presento' ),
	'section'     => 'portfolios_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Portfolios Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'portfolios_items',
	'fields' => [
		'portfolios_item_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Title', 'presento' ),
		],
		'portfolios_item_image'  => [
			'type'        => 'image',
			'label'       => esc_html__( 'Item Image', 'presento' ),
		],
	]
] );

Kirki::add_section( 'testimonial_section', array(
	'title'          => esc_html__( 'Testimonial Section', 'presento' ),
	'description'    => esc_html__( 'Set your testimonial section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'testimonial_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'testimonial_section',
	'default'  => esc_html__( 'TESTMONIAL', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'textarea',
	'settings' => 'testimonial_description',
	'label'    => esc_html__( 'Description', 'present' ),
	'section'  => 'testimonial_section',
	'default'  => esc_html__( 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your testimonial Items', 'presento' ),
	'section'     => 'testimonial_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Testimonial Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'testimonial_items',
	'fields' => [
		'testimonial_item_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Name', 'presento' ),
		],
		'testimonial_item_designation'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Item Designation', 'presento' ),
		],
		'testimonial_item_description'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Item Description', 'presento' ),
		],
		'testimonial_item_image'  => [
			'type'        => 'image',
			'label'       => esc_html__( 'Item Image', 'presento' ),
		],
	]
] );

Kirki::add_section( 'faq_section', array(
	'title'          => esc_html__( 'Faq Section', 'presento' ),
	'description'    => esc_html__( 'Set your faq section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'faq_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'faq_section',
	'default'  => esc_html__( 'FREQUENTLY ASKED QUESTIONS', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your faq Items', 'presento' ),
	'section'     => 'faq_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Faq Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'faq_items',
	'fields' => [
		'faq_question'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'FAQ Question', 'presento' ),
		],
		'faq_ans'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'FAQ Answer', 'presento' ),
		],
	]
] );

Kirki::add_section( 'team_section', array(
	'title'          => esc_html__( 'Team Section', 'presento' ),
	'description'    => esc_html__( 'Set your team section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'team_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'TEAM', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'textarea',
	'settings' => 'team_description',
	'label'    => esc_html__( 'Description', 'present' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your team Items', 'presento' ),
	'section'     => 'team_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Team Item', 'presento' ),
	],
	'button_label' => esc_html__('Add New Item', 'presento' ),
	'settings'     => 'team_items',
	'fields' => [
		'team_member_name'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Member Name', 'presento' ),
		],
		'team_member_designation'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Member Designation', 'presento' ),
		],

		'team_member_image'  => [
			'type'        => 'image',
			'label'       => esc_html__( 'Item Image', 'presento' ),
		],
	]
] );

Kirki::add_section( 'contact_section', array(
	'title'          => esc_html__( 'Contact Section', 'presento' ),
	'description'    => esc_html__( 'Set your contact section content.', 'presento' ),
	'panel'          => PRESENTO_CUSTOMIZER_PANEL_ID,
	'priority'       => 160,
	'active_callback'=>function (){
		return is_page_template('page-templates/homepage.php');
	}
) );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_title',
	'label'    => esc_html__( 'Title', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'CONTACT', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'textarea',
	'settings' => 'contact_description',
	'label'    => esc_html__( 'Description', 'present' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_our_address',
	'label'    => esc_html__( 'Our Address', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'Our Address', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_address_details',
	'label'    => esc_html__( 'Enter Your Address Details', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'A108 Adam Street, New York, NY 535022', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_mail_us',
	'label'    => esc_html__( 'Mail Us', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'Mail Us', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_mail_details',
	'label'    => esc_html__( 'Enter Your Mail Details', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'info@example.com', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_call_us',
	'label'    => esc_html__( 'Call Us', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'Call Us', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_call_details',
	'label'    => esc_html__( 'Enter Your Call', 'presento' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( '+1 5589 55488 55', 'presento' ),
	'priority' => 10,
] );
Kirki::add_field( PRESENTO_CUSTOMIZER_CONFIG_ID, [
	'type'     => 'text',
	'settings' => 'contact_form',
	'label'    => esc_html__( 'Enter Your Contact Form Shotcode', 'presento' ),
	'section'  => 'contact_section',
	'priority' => 10,
] );
