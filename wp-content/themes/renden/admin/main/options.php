<?php
/**
 * Setup theme options used in customizer.
 *
 * @package ThinkUpThemes
 */

function thinkup_customizer_theme_options( $wp_customize ) {

	global $thinkup_prefix;

	$prefix_name = $thinkup_prefix;

	// ==========================================================================================
	// 1. ADD PANELS / SECTIONS
	// ==========================================================================================

	// Add Upgrade Section
	$wp_customize->add_section(
		new thinkup_customizer_customswitch_button_link(
			$wp_customize,
			$prefix_name . 'thinkup_customizer_section_upgrade_top',
			array(
				'title'        => esc_html__( 'Renden Pro', 'renden' ),
				'priority'     => 1,
				'button_text' => esc_html__( 'Upgrade Now', 'renden' ),
				'button_url'  => 'https://www.thinkupthemes.com/themes/renden/',
				'button_class' => 'button-primary',
			)
		)
	);

	// Add Documentation Section
	$wp_customize->add_section(
		new thinkup_customizer_customswitch_button_link(
			$wp_customize,
			$prefix_name . 'thinkup_customizer_section_docs',
			array(
				'title'        => esc_html__( 'Documentation', 'renden' ),
				'priority'     => 1,
				'button_text' => __( 'View Docs', 'renden' ),
				'button_url'  => esc_url( admin_url( 'themes.php?page=thinkup-welcome&tab=documentation' ) ),
				'button_class' => 'button-secondary',
			)
		)
	);

	// Add Theme Options Panel
	$wp_customize->add_panel(
		$prefix_name . 'thinkup_customizer_section_themeoptions',
		array(
			'title'       => esc_html__( 'Theme Options', 'renden' ),
			'description' => esc_html__( 'Use the options below to customize your theme!', 'renden' ),
			'priority'    => 2,
		)
	);

	// Add General Settings Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_generalsettings',
		array(
			'title'    => esc_html__( 'General Settings', 'renden' ),
			'priority' => 10,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Homepage Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_homepage',
		array(
			'title'    => esc_html__( 'Homepage', 'renden' ),
			'priority' => 20,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Homepage (Featured) Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_homepagefeatured',
		array(
			'title'    => esc_html__( 'Homepage (Featured)', 'renden' ),
			'priority' => 30,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Header Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_header',
		array(
			'title'    => esc_html__( 'Header', 'renden' ),
			'priority' => 40,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Footer Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_footer',
		array(
			'title'    => esc_html__( 'Footer', 'renden' ),
			'priority' => 50,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Social Media Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_socialmedia',
		array(
			'title'    => esc_html__( 'Social Media', 'renden' ),
			'priority' => 60,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Blog Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_blog',
		array(
			'title'    => esc_html__( 'Blog', 'renden' ),
			'priority' => 70,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);

	// Add Upgrade (10% off) Section
	$wp_customize->add_section(
		$prefix_name . 'thinkup_customizer_section_upgrade_inner',
		array(
			'title'    => esc_html__( 'Upgrade (10% off)', 'renden' ),
			'priority' => 80,
			'panel'    => $prefix_name . 'thinkup_customizer_section_themeoptions',
		)
	);


	// ==========================================================================================
	// 2. ADD CONTROLS
	// ==========================================================================================

	//----------------------------------------------------
	// 2.1. Add General Settings Controls
	//----------------------------------------------------

	// Add Logo Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_general_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_general_heading',
			array(
				'label'           => esc_html__( 'Logo Settings', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_general_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Logo Info Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_logosetting]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_general_logosetting',
			array(
				'label'           => esc_html__( 'Since WordPress v4.5 you can now add a site logo using the native WordPress options. To add a site logo go the "Site Identitiy" settings on the main customizer screen.', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_general_logosetting]',
				'active_callback' => '',
			)
		)
	);

	// Add General Page Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_general_page]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_general_page',
			array(
				'label'           => esc_html__( 'Page Structure', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_general_page]',
				'active_callback' => '',
			)
		)
	);

	// Add General Page Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_general_page]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_general_page',
			array(
				'label'           => esc_html__( 'Page Structure', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_general_page]',
				'active_callback' => '',
			)
		)
	);

	// Add Page Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_general_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_general_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'label'			  => esc_html__( 'Page Layout', 'renden' ),
				'description'	  => esc_html__( 'Select page layout. This will only be applied to published Pages.', 'renden' ),
				'choices'		  => array(
					'option1' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add General Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_general_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_general_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_generalsettings',
			'type'			  => 'select',
			'label'			  => esc_html__( 'Select a Sidebar', 'renden' ),
			'description'	  => esc_html__( 'Choose a sidebar to use with the page layout.', 'renden' ),
			'choices'		  => thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Enable Fixed Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_fixedlayoutswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_general_fixedlayoutswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_general_fixedlayoutswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'label'           => esc_html__( 'Enable Fixed Layout', 'renden' ),
				'description'	  => esc_html__( '(i.e. Disable responsive layout)', 'renden' ),
				'choices'		  => array(
					'1'      => __( 'On', 'renden' ),
					'off'    => __( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Backup Theme Options Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_general_backup]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_general_backup',
			array(
				'label'           => esc_html__( 'Backup Theme Options', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_general_backup]',
				'active_callback' => '',
			)
		)
	);

	// Add Backup Theme Options Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_general_backupswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_general_backupswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_general_backupswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_generalsettings',
				'label'           => esc_html__( 'Backup Theme Options', 'renden' ),
				'description'	  => esc_html__( 'Switch on to backup your theme options settings each time the customizer is updated and saved. If enabled then a new page called "ThinkUp Created Content Backup" will be created where the option values can be found.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);


	//----------------------------------------------------
	// 2.2. Homepage
	//----------------------------------------------------

	// Add Homepage Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_homepage_heading',
			array(
				'label'           => esc_html__( 'Control Homepage Layout', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Homepage Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_homepage_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'			  => esc_html__( 'Homepage Layout', 'renden' ),
				'description'	  => esc_html__( 'Select page layout. This will only be applied to static homepages (front page) and not to homepage blogs.', 'renden' ),
				'choices'		  => array(
					'option1' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Homepage Select a Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'select',
			'label'			  => esc_html__( 'Select a Sidebar', 'renden' ),
			'description'	  => esc_html__( 'Choose a sidebar to use with the layout.', 'renden' ),
			'choices'		  => thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Homepage Slider Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_slider]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_homepage_slider',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_slider]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'           => esc_html__( 'Homepage Slider', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Choose Homepage Slider Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'radio',
			'label'			  => esc_html__( 'Choose Homepage Slider', 'renden' ),
			'description'	  => esc_html__( 'Switch on to enable home page slider.', 'renden' ),
			'choices'		  => array(
				'option4' => esc_html__( 'Image Slider', 'renden' ),
				'option3' => esc_html__( 'Disable', 'renden' ),
			),
			'active_callback' => '',
		)
	);


	// Add Image Slide 1 - Info
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_info]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_homepage_sliderimage1_info',
			array(
				'label'           => esc_html__( 'Slide 1', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_info]',
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 1 - Image
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_image][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_homepage_sliderimage1_image',
			array(
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_image][url]',
				'label'	          => '',
				'description'	  => esc_html__( 'Image', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 1 - Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage1_title',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_title]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => esc_html__( 'Title', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 1 - Description
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage1_desc',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_desc]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => esc_html__( 'Description', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Slide 1 - Page Link
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage1_link',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage1_link]',
			'type'			  => 'dropdown-pages',
			'label'			  => '',
			'description'	  => esc_html__( 'URL', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 2 - Info
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_info]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_homepage_sliderimage2_info',
			array(
				'label'           => esc_html__( 'Slide 2', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_info]',
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 2 - Image
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_image][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_homepage_sliderimage2_image',
			array(
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_image][url]',
				'label'	          => '',
				'description'	  => esc_html__( 'Image', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 2 - Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage2_title',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_title]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => esc_html__( 'Title', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 2 - Description
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage2_desc',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_desc]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => esc_html__( 'Description', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Slide 2 - Page Link
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage2_link',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage2_link]',
			'type'			  => 'dropdown-pages',
			'label'			  => '',
			'description'	  => esc_html__( 'URL', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 3 - Info
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_info]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_raw(
			$wp_customize,
			'thinkup_homepage_sliderimage3_info',
			array(
				'label'           => esc_html__( 'Slide 3', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_info]',
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 3 - Image
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_image][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_homepage_sliderimage3_image',
			array(
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_image][url]',
				'label'	          => '',
				'description'	  => esc_html__( 'Image', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Image Slide 3 - Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage3_title',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_title]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => esc_html__( 'Title', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Image Slide 3 - Description
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage3_desc',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_desc]',
			'type'			  => 'text',
			'label'			  => '',
			'description'	  => esc_html__( 'Description', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Slide 3 - Page Link
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderimage3_link',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderimage3_link]',
			'type'			  => 'dropdown-pages',
			'label'			  => '',
			'description'	  => esc_html__( 'URL', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Enable Full-Width Slider Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetwidth]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_homepage_sliderpresetwidth',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetwidth]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'           => esc_html__( 'Enable Full-Width Slider', 'renden' ),
				'description'	  => esc_html__( 'Switch on to enable full-width slider.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Add Slider Height (Max) Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetheight]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'absint',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_sliderpresetheight',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sliderpresetheight]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'label'			  => esc_html__( 'Slider Height (Max)', 'renden' ),
			'description'	  => esc_html__( 'Specify the maximum slider height (px).', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Call To Action - Intro Section Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_ctaintro]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_homepage_ctaintro',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_homepage_ctaintro]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepage',
				'label'           => esc_html__( 'Call To Action - Intro', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Homepage - Intro Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Message', 'renden' ),
			'description'	  => esc_html__( 'Check to enable intro on home page.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introaction]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introaction',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introaction]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'description'	  => wp_kses_post( __( 'Enter a <strong>title</strong> message.<br /><br />This will be one of the first messages your visitors see. Use this to get their attention.', 'renden' ) ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Teaser Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionteaser]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionteaser',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionteaser]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'description'	  => wp_kses_post( __( 'Enter a <strong>teaser</strong> message.<br /><br />Use this to provide more details about what you offer.', 'renden' ) ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Button 1 Text Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactiontext1]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactiontext1',
		array(
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactiontext1]',
			'type'			  => 'text',
			'label'	          => esc_html__( 'Button - Text', 'renden' ),
			'description'	  => esc_html__( 'Specify a text for button 1.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Homepage - Intro Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionlink1]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionlink1',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionlink1]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'radio',
			'label'			  => esc_html__( 'Button - Link', 'renden' ),
			'description'	  => esc_html__( 'Specify whether the action button should link to a page on your site, out to external webpage or disable the link altogether.', 'renden' ),
			'choices'		  => array(
				'option1' => esc_html__( 'Link to a Page', 'renden' ),
				'option2' => esc_html__( 'Specify Custom link', 'renden' ),
				'option3' => esc_html__( 'Disable Link', 'renden' ),
			),
			'active_callback' => '',
		)
	);
	
	// Add Homepage - Intro Page Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionpage1]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactionpage1',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactionpage1]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'dropdown-pages',
			'label'			  => esc_html__( 'Button - Link to a page', 'renden' ),
			'description'	  => esc_html__( 'Select a target page for action button link.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);	
	
	// Add Homepage - Intro Custom Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactioncustom1]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_introactioncustom1',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_introactioncustom1]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepage',
			'type'			  => 'text',
			'label'			  => esc_html__( 'Button - Custom link', 'renden' ),
			'description'	  => esc_html__( 'Input a custom url for the action button link. Add http:// if linking to an external webpage.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);


	//----------------------------------------------------
	// 2.3. Homepage (Featured)
	//----------------------------------------------------

	// Add Homepage (Featured) Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_homepagefeatured_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_homepagefeatured_heading',
			array(
				'label'           => esc_html__( 'Display Pre-Designed Homepage', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_homepagefeatured_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Enable Pre-Made Homepage Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_sectionswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_homepage_sectionswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_sectionswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'label'           => esc_html__( 'Enable Pre-Made Homepage', 'renden' ),
				'description'	  => esc_html__( 'switch on to enable pre-designed homepage layout.', 'renden' ),
				'choices'		  => array(
					'1'      => __( 'On', 'renden' ),
					'off'    => __( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Content Area 1 Image Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_image][id]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'absint',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'thinkup_homepage_section1_image',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_image][id]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'label'	          => esc_html__( 'Content Area 1', 'renden' ),
				'description'	  => esc_html__( 'Add an image for the section background.', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Content Area 1 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add a title to the section.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 1 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add some text to featured section 1.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 1 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section1_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section1_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Link to a page', 'renden' ),
		)
	);

	// Add Content Area 2 Image Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_image][id]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'absint',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'thinkup_homepage_section2_image',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_image][id]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'label'	          => esc_html__( 'Content Area 2', 'renden' ),
				'description'	  => esc_html__( 'Add an image for the section background.', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Content Area 2 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add a title to the section.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 2 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add some text to featured section 2.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 2 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section2_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section2_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Link to a page', 'renden' ),
		)
	);

	// Add Content Area 3 Image Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_image][id]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'absint',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'thinkup_homepage_section3_image',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_image][id]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'label'	          => esc_html__( 'Content Area 3', 'renden' ),
				'description'	  => esc_html__( 'Add an image for the section background.', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Content Area 3 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add a title to the section.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 3 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add some text to featured section 3.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 3 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section3_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section3_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Link to a page', 'renden' ),
		)
	);

	// Add Content Area 4 Image Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_image][id]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'absint',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'thinkup_homepage_section4_image',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_image][id]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
				'label'	          => esc_html__( 'Content Area 4', 'renden' ),
				'description'	  => esc_html__( 'Add an image for the section background.', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Content Area 4 Title Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_title]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section4_title',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_title]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add a title to the section.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 4 Description Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_desc]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section4_desc',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_desc]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Add some text to featured section 4.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Content Area 4 Link Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_link]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control(
		'thinkup_homepage_section4_link',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_homepage_section4_link]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_homepagefeatured',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Link to a page', 'renden' ),
		)
	);


	//----------------------------------------------------
	// 2.4. Header
	//----------------------------------------------------

	// Add Header Section Title
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_header_content]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_header_content',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_header_content]',
				'section'         => $prefix_name . 'thinkup_customizer_section_header',
				'label'           => esc_html__( 'Control Header Content', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Enable Search (Main Header) Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_searchswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_searchswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_searchswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_header',
				'label'           => esc_html__( 'Enable Search (Pre Header)', 'renden' ),
				'description'	  => esc_html__( 'Switch on to enable header search.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);


	//----------------------------------------------------
	// 2.5. Footer
	//----------------------------------------------------

	// Add Footer Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_footer_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_footer_heading',
			array(
				'label'           => esc_html__( 'Control Footer Content', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_footer',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_footer_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Footer Widgets Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_footer_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_footer_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_footer_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
				'label'			  => esc_html__( 'Footer Widgets Layout', 'renden' ),
				'description'	  => esc_html__( 'Select footer layout. Take complete control of the footer content by adding widgets.', 'renden' ),
				'choices'		  => array(
					'option1'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option01.png',
					'option2'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option02.png',
					'option3'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option03.png',
					'option4'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option04.png',
					'option5'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option05.png',
					'option6'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option06.png',
					'option7'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option07.png',
					'option8'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option08.png',
					'option9'  => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option09.png',
					'option10' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option10.png',
					'option11' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option11.png',
					'option12' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option12.png',
					'option13' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option13.png',
					'option14' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option14.png',
					'option15' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option15.png',
					'option16' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option16.png',
					'option17' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option17.png',
					'option18' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/footer/option18.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Disable Footer Widgets Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_footer_widgetswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_footer_widgetswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_footer_widgetswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Disable Footer Widgets', 'renden' ),
			'description'	  => esc_html__( 'Check to disable footer widgets.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Sub Footer Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_subfooter]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_subfooter',
			array(
				'label'           => esc_html__( 'Control Sub-Footer Content', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_footer',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_subfooter]',
				'active_callback' => '',
			)
		)
	);


	// Add Sub Footer Widgets Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_subfooter_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_subfooter_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_subfooter_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
				'label'			  => esc_html__( 'Sub-Footer Widgets Layout', 'renden' ),
				'description'	  => esc_html__( 'Select sub-footer layout. Take complete control of the post-footer content by adding widgets.', 'renden' ),
				'choices'		  => array(
					'option1' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option01.png',
					'option2' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option02.png',
					'option3' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option03.png',
					'option4' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option04.png',
					'option5' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option05.png',
					'option6' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option06.png',
					'option7' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option07.png',
					'option8' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/sub-footer/option08.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Disable Sub Footer Widgets Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_subfooter_widgetswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_subfooter_widgetswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_subfooter_widgetswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Disable Sub-Footer Widgets', 'renden' ),
			'description'	  => esc_html__( 'Check to disable sub-footer widgets.', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Social Media Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_subfooter_widgetclose]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_subfooter_widgetclose',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_subfooter_widgetclose]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_footer',
				'label'           => esc_html__( 'Enable Widget Close Button', 'renden' ),
				'description'	  => esc_html__( 'Switch on to enable button to hide post-footer widgets.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);


	//----------------------------------------------------
	// 2.6. Social Media
	//----------------------------------------------------

	// Add Social Media Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_socialmedia_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_socialmedia_heading',
			array(
				'label'           => esc_html__( 'Social Media Control', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_socialmedia_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Header Social Media Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_socialswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_socialswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_socialswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Enable Social Media Links (Header)', 'renden' ),
				'description'	  => esc_html__( 'Switch on to enable links to social media pages.', 'renden' ),
				'choices'		  => array(
					'1'      => __( 'On', 'renden' ),
					'off'    => __( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Footer Social Media Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_footer_socialswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_footer_socialswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_footer_socialswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Enable Social Media Links (footer)', 'renden' ),
				'description'	  => esc_html__( 'Switch on to enable links to social media pages.', 'renden' ),
				'choices'		  => array(
					'1'      => __( 'On', 'renden' ),
					'off'    => __( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Add Social Media Content Header
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_header_social]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_header_social',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_header_social]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Social Media Content', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Social Media Display Message Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_socialmessage]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_socialmessage',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_socialmessage]',
			'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => wp_kses_post( __( 'Add a message here. E.g. &#34;Follow Us&#34;.<br />(Only shown in header)', 'renden' ) ),
			'active_callback' => '',
		)
	);

	// Facebook social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebookswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_facebookswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebookswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Facebook', 'renden' ),
				'description'	  => esc_html__( 'Enable link to Facebook profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebooklink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_facebooklink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebooklink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Input the url to your Facebook page.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebookiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_facebookiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebookiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom Facebook icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_facebookcustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_facebookcustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_facebookcustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Twitter social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twitterswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_twitterswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_twitterswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Twitter', 'renden' ),
				'description'	  => esc_html__( 'Enable link to Twitter profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twitterlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_twitterlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_twitterlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Input the url to your Twitter page.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twittericonswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_twittericonswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_twittericonswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom Twitter icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_twittercustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_twittercustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_twittercustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Google+ social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googleswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_googleswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_googleswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Google+', 'renden' ),
				'description'	  => esc_html__( 'Enable link to Google+ profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googlelink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_googlelink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_googlelink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Input the url to your Google+ page.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googleiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_googleiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_googleiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom Google+ icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_googlecustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_googlecustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_googlecustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// LinkedIn social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_linkedinswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'LinkedIn', 'renden' ),
				'description'	  => esc_html__( 'Enable link to LinkedIn profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);
				
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_linkedinlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkedinlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Input the url to your LinkedIn page.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkediniconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_linkediniconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkediniconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom LinkedIn icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_linkedincustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_linkedincustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_linkedincustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Flickr social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickrswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_flickrswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_flickrswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Flickr', 'renden' ),
				'description'	  => esc_html__( 'Enable link to Flickr profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickrlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_flickrlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_flickrlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'	  => esc_html__( 'Input the url to your Flickr page.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickriconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_flickriconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_flickriconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom Flickr icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_flickrcustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_flickrcustomicon',
			array(
				'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_header_flickrcustomicon][url]',
				'section'		=> $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	=> esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// Pinterest social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_pinterestswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_pinterestswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_pinterestswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'Pinterest', 'renden' ),
				'description'	  => esc_html__( 'Enable link to Pinterest profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_pinterestlink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_pinterestlink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_pinterestlink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'     => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_pinteresticonswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_pinteresticonswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_pinteresticonswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Use Custom Pinterest Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom Pinterest icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_pinterestcustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_pinterestcustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_pinterestcustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// YouTube social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_youtubeswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'YouTube', 'renden' ),
				'description'	  => esc_html__( 'Enable link to YouTube profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubelink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_youtubelink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubelink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'     => esc_html__( 'Input the url to your YouTube page.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_youtubeiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubeiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Check to use custom YouTube icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_youtubecustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_youtubecustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_youtubecustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);

	// RSS social settings
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_rssswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_header_rssswitch',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_header_rssswitch]',
				'section'         => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'label'           => esc_html__( 'RSS', 'renden' ),
				'description'	  => esc_html__( 'Enable link to RSS profile.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_rsslink]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_rsslink',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_rsslink]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'text',
			'description'     => esc_html__( 'Input the url to your RSS feed.', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_rssiconswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_header_rssiconswitch',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_rssiconswitch]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Custom Icon', 'renden' ),
			'description'	  => esc_html__( 'Use Custom RSS Icon', 'renden' ),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_header_rsscustomicon][url]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thinkup_header_rsscustomicon',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_header_rsscustomicon][url]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_socialmedia',
				'description'	  => esc_html__( 'Add a link to the image or upload one from your desktop. The image will be resized.', 'renden' ),
				'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
			)
		)
	);


	//----------------------------------------------------
	// 2.7. Blog
	//----------------------------------------------------

	// Add Blog Heading
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_blog_heading]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_blog_heading',
			array(
				'label'           => esc_html__( 'Control Blog (Archive) Pages', 'renden' ),
				'section'         => $prefix_name . 'thinkup_customizer_section_blog',
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_blog_heading]',
				'active_callback' => '',
			)
		)
	);

	// Add Blog Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_blog_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_blog_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
				'label'			  => esc_html__( 'Blog Layout', 'renden' ),
				'description'	  => esc_html__( 'Select blog page layout. Only applied to the main blog page and not individual posts.', 'renden' ),
				'choices'		  => array(
					'option1' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Blog Select a Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_blog_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
			'type'			  => 'select',
			'label'			  => esc_html__( 'Select a Sidebar', 'renden' ),
			'description'	  => esc_html__( 'Note: Sidebars will not be applied to homepage Blog. Control sidebars on the homepage from the &#39;Home Settings&#39; option.', 'renden' ),
			'choices'		  => thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Blog Traditional Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_style1layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_style1layout',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_blog_style1layout]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_blog',
			'type'			=> 'radio',
			'label'			=> esc_html__( 'Blog Traditional Layout', 'renden' ),
			'description'	=> esc_html__( 'Select a layout for your blog page. This will also be applied to all pages set using the blog template.', 'renden' ),
			'choices'		=> array(
				'option1' => esc_html__( 'Style 1', 'renden' ),
				'option2' => esc_html__( 'Style 2', 'renden' ),
			)
		)
	);

	// Add Blog Links Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_hovercheck][option1]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_hovercheck_option1',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_blog_hovercheck][option1]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Blog Links - Lightbox', 'renden' ),
			'description'	  => esc_html__( 'Check to show lightbox link', 'renden' ),
			'active_callback' => '',
		)
	);
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_hovercheck][option2]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_hovercheck_option2',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_blog_hovercheck][option2]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
			'type'			  => 'checkbox',
			'label'			  => esc_html__( 'Blog Links - Post', 'renden' ),
			'description'	  => esc_html__( 'Check to show post link', 'renden' ),
			'active_callback' => '',
		)
	);

	// Add Post Content Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_blog_postswitch]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		'thinkup_blog_postswitch',
		array(
			'settings'		=> $prefix_name . 'thinkup_redux_variables[thinkup_blog_postswitch]',
			'section'		=> $prefix_name . 'thinkup_customizer_section_blog',
			'type'			=> 'radio',
			'label'			=> esc_html__( 'Post Content', 'renden' ),
			'description'	=> wp_kses_post( __( 'Control how much content you want to show from each post on the main blog page. Remember to control the full article content by using the WordPress <a href="http://en.support.wordpress.com/splitting-content/more-tag/">more</a> tag in your post.', 'renden' ) ),
			'choices'		=> array(
				'option1' => esc_html__( 'Show excerpt', 'renden' ),
				'option2' => esc_html__( 'Show full article', 'renden' ),
				'option3' => esc_html__( 'Hide article', 'renden' ),
			)
		)
	);

	// Add Control Single Post Page Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_section_post_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_section(
			$wp_customize,
			'thinkup_section_post_layout',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_section_post_layout]',
				'section'         => $prefix_name . 'thinkup_customizer_section_blog',
				'label'           => esc_html__( 'Control Single Post Page', 'renden' ),
				'active_callback' => '',
			)
		)
	);

	// Add Post Layout Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_post_layout]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'sanitize_key',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_radio_image(
			$wp_customize,
			'thinkup_post_layout',
			array(
				'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_post_layout]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
				'label'			  => esc_html__( 'Post Layout', 'renden' ),
				'description'	  => esc_html__( 'Select blog page layout. This will only be applied to individual posts and not the main blog page.', 'renden' ),
				'choices'		  => array(
					'option1' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option01.png',
					'option2' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option02.png',
					'option3' => trailingslashit( esc_url( get_template_directory_uri() ) ) . 'admin/main/assets/img/layout/blog/option03.png',
				),
				'active_callback' => '',
			)
		)
	);

	// Add Post Select a Sidebar Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_post_sidebars]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_select_sidebar',
		)
	);
	$wp_customize->add_control(
		'thinkup_post_sidebars',
		array(
			'settings'		  => $prefix_name . 'thinkup_redux_variables[thinkup_post_sidebars]',
			'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
			'type'			  => 'select',
			'label'			  => esc_html__( 'Select a Sidebar', 'renden' ),
			'description'	  => esc_html__( 'Choose a sidebar to use with the layout.', 'renden' ),
			'choices'		  => thinkup_customizer_select_array_sidebar(),
			'active_callback' => $prefix_name . 'thinkup_customizer_callback_active_global',
		)
	);

	// Add Show Author Bio Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_post_share]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => $prefix_name . 'thinkup_customizer_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_switch(
			$wp_customize,
			'thinkup_post_share',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_post_share]',
				'section'		  => $prefix_name . 'thinkup_customizer_section_blog',
				'label'           => esc_html__( 'Show Social Sharing', 'renden' ),
				'description'	  => esc_html__( 'Check to enable social media sharing.', 'renden' ),
				'choices'		  => array(
					'1'      => esc_html__( 'On', 'renden' ),
					'off'    => esc_html__( 'Off', 'renden' ),
				),
				'active_callback' => '',
			)
		)
	);


	//----------------------------------------------------
	// 2.8. Upgrade Section (10% off)
	//----------------------------------------------------

	// Add Upgrade Control
	$wp_customize->add_setting(
		$prefix_name . 'thinkup_redux_variables[thinkup_upgrade_content]',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'wp_filter_post_kses',
		)
	);
	$wp_customize->add_control(
		new thinkup_customizer_customcontrol_upgrade_inner(
			$wp_customize,
			'thinkup_upgrade_content',
			array(
				'settings'        => $prefix_name . 'thinkup_redux_variables[thinkup_upgrade_content]',
				'section'         => $prefix_name . 'thinkup_customizer_section_upgrade_inner',
				'upgrade_url'     => 'https://www.thinkupthemes.com/themes/renden/',
				'price_discount'  => esc_html__( 'Upgrade for $31 (10% off)', 'renden' ),
				'price_normal'	  => esc_html__( 'Normally $35. Use coupon at checkout.', 'renden' ),
				'coupon'	      => esc_html__( 'renden31', 'renden' ),
				'button'	      => esc_html__( 'Upgrade Now', 'renden' ),
				'title_main'	  => esc_html__( 'So&hellip; Why upgrade?', 'renden' ),
				'title_secondary' => esc_html__( 'We&#39;re glad you asked! Here&#39;s just some of the amazing features you&#39;ll get when you upgrade&hellip;', 'renden' ),
				'images'		  => array(
					'%s/admin/main/inc/controls/upgrade_inner/img/1_trusted_team.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/2_page_builder.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/3_premium_support.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/4_theme_options.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/5_shortcodes.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/6_unlimited_colors.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/7_parallax_pages.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/8_typography.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/9_backgrounds.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/10_responsive.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/11_retina_ready.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/12_site_layout.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/13_translation_ready.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/14_rtl_support.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/15_infinite_sidebars.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/16_portfolios.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/17_seo_optimized.png',
					'%s/admin/main/inc/controls/upgrade_inner/img/18_demo_content.png',
				),
				'active_callback' => '',
			)
		)
	);
}
add_action( 'customize_register', 'thinkup_customizer_theme_options' );