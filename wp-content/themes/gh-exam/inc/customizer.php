<?php
/**
 * gh-exam Theme Customizer
 *
 * @package gh-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /**
     * Footer section
     */

    $wp_customize->add_setting(
        'copyright_date', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'copyright_date',
        array(
            'label' => esc_html__('Fill in Year', 'gh-exam'),
            'section' => 'footer_settings'
        )
    );
    $wp_customize->add_section(
        'footer_settings',
        array(
            'title' => esc_html__('Footer settings', 'gh-exam'),
            'priority' => 3
        )
    );
    $wp_customize->add_setting(
        'copyright', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'copyright',
        array(
            'label' => esc_html__('Copyright', 'gh-exam'),
            'section' => 'footer_settings'
        )
    );

    /**
     * Clients section
     */
    $wp_customize->add_section( 'clients_section', array(
        'title' => esc_html__('Clients section', 'gh-exam'),
        'priority' => 3,
    ) );
    $wp_customize->add_setting(
        'clients_section_title', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'clients_section_title',
        array(
            'label' => esc_html__('Title', 'gh-exam'),
            'section' => 'clients_section'
        )
    );


    /**
     * Contact section
     */
    $wp_customize->add_section( 'contact_section', array(
        'title' => esc_html__('Contact section', 'gh-exam'),
        'priority' => 4,
    ) );
    $wp_customize->add_setting(
        'contact_section_title', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'contact_section_title',
        array(
            'label' => esc_html__('Title', 'gh-exam'),
            'section' => 'contact_section'
        )
    );
    $wp_customize->add_setting(
        'contact_section_subtitle', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'contact_section_subtitle',
        array(
            'label' => esc_html__('Description', 'gh-exam'),
            'section' => 'contact_section',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'contact_section_phone', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'contact_section_phone',
        array(
            'label' => esc_html__('Phone number', 'gh-exam'),
            'section' => 'contact_section'
        )
    );
    $wp_customize->add_setting(
        'contact_section_address', array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'contact_section_address',
        array(
            'label' => esc_html__('Address', 'gh-exam'),
            'section' => 'contact_section',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'contact_section_bg'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'contact_section_bg',
            array(
                'label' => esc_html__('Background image', 'gh-exam'),
                'section' => 'contact_section'
            )
        )
    );
    $wp_customize->add_setting(
        'contact_section_show',
        array(
            'default'    =>  'true',
            'transport'  =>  'postMessage'
        ));
    $wp_customize->add_control(
        'contact_section_show',
        array(
            'section'   => 'contact_section',
            'label'     => esc_html__('Display Section?', 'gh-exam' ),
            'type'      => 'checkbox'
        )
    );


    /**
     *  Homepage panel
     */
    $wp_customize->add_panel( 'homepage', array(
        'priority' => 5,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Homepage', 'gh-exam' ),
        'description' => __( 'Settings of homepage.', 'gh-exam' ),
    ) );
    /**
     * Hero section
     */
    $wp_customize->add_section(
        'hero_section',
        array(
            'title' => esc_html__('Hero', 'gh-exam'),
            'priority' => 10,
            'panel' => 'homepage',
        )
    );
    $wp_customize->add_setting(
        'hero_title'
    );
    $wp_customize->add_control(
        'hero_title',
        array(
            'label' => esc_html__('Title', 'gh-exam'),
            'section' => 'hero_section'
        )
    );
    $wp_customize->add_setting(
        'hero_subtitle'
    );
    $wp_customize->add_control(
        'hero_subtitle',
        array(
            'label' => esc_html__('Subtitle', 'gh-exam'),
            'section' => 'hero_section'
        )
    );
    $wp_customize->add_setting(
        'hero_elements'
    );
    $wp_customize->add_control(
        'hero_elements',
        array(
            'label' => esc_html__('Tags', 'gh-exam'),
            'section' => 'hero_section'
        )
    );
    $wp_customize->add_setting(
        'hero_section_info'
    );
    $wp_customize->add_control(
        'hero_section_info',
        array(
            'label'          => __( 'Main text', 'gh-exam' ),
            'section'        => 'hero_section',
            'type'           => 'textarea'
        )

    );
    $wp_customize->add_setting(
        'hero_section_image'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_section_image',
            array(
                'label' => esc_html__('Section image', 'gh-exam'),
                'section' => 'hero_section'
            )
        )
    );
    $wp_customize->add_setting(
        'hero_section_show',
        array(
            'default'    =>  'true',
            'transport'  =>  'postMessage'
        ));
    $wp_customize->add_control(
        'hero_section_show',
        array(
            'section'   => 'hero_section',
            'label'     => esc_html__('Display Section?', 'gh-exam' ),
            'type'      => 'checkbox'
        )
    );
    /**
     * About us section
     */
    $wp_customize->add_section(
        'about_us_section',
        array(
            'title' => esc_html__('About', 'gh-exam'),
            'priority' => 10,
            'panel' => 'homepage',
        )
    );
    $wp_customize->add_setting(
        'about_us_section_title'
    );
    $wp_customize->add_control(
        'about_us_section_title',
        array(
            'label' => esc_html__('Title', 'gh-exam'),
            'section' => 'about_us_section'
        )
    );
    $wp_customize->add_setting(
        'about_us_section_info'
    );
    $wp_customize->add_control(
        'about_us_section_info',
        array(
            'label'          => __( 'Main text', 'gh-exam' ),
            'section'        => 'about_us_section',
            'type'           => 'textarea'
        )

    );
    $wp_customize->add_setting(
        'about_us_section_image'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'about_us_section_image',
            array(
                'label' => esc_html__('Section image', 'gh-exam'),
                'section' => 'about_us_section'
            )
        )
    );
    $wp_customize->add_setting(
        'about_us_section_show',
        array(
            'default'    =>  'true',
            'transport'  =>  'postMessage'
        ));
    $wp_customize->add_control(
        'about_us_section_show',
        array(
            'section'   => 'about_us_section',
            'label'     => esc_html__('Display Section?', 'gh-exam' ),
            'type'      => 'checkbox'
        )
    );
    /**
     * Services section
     */
    $wp_customize->add_section(
        'services_section',
        array(
            'title' => esc_html__('Services', 'gh-exam'),
            'priority' => 12,
            'panel' => 'homepage',
        )
    );
    $wp_customize->add_setting(
        'services_section_title'
    );
    $wp_customize->add_control(
        'services_section_title',
        array(
            'label' => esc_html__('Title', 'gh-exam'),
            'section' => 'services_section'
        )
    );
    $wp_customize->add_setting(
        'services_section_description'
    );
    $wp_customize->add_control(
        'services_section_description',
        array(
            'label'          => __( 'Description', 'gh-exam' ),
            'section'        => 'services_section',
            'type'           => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'services_section_show',
        array(
            'default'    =>  'true',
            'transport'  =>  'postMessage'
        ));
    $wp_customize->add_control(
        'services_section_show',
        array(
            'section'   => 'services_section',
            'label'     => esc_html__('Display Section?', 'gh-exam' ),
            'type'      => 'checkbox'
        )
    );
    /**
     * Portfolio section
     */
    $wp_customize->add_section(
        'portfolio_section',
        array(
            'title' => esc_html__('Portfolio', 'gh-exam'),
            'priority' => 12,
            'panel' => 'homepage',
        )
    );
    $wp_customize->add_setting(
        'portfolio_section_title'
    );
    $wp_customize->add_control(
        'portfolio_section_title',
        array(
            'label' => esc_html__('Title', 'gh-exam'),
            'section' => 'portfolio_section'
        )
    );
    $wp_customize->add_setting(
        'portfolio_section_description'
    );
    $wp_customize->add_control(
        'portfolio_section_description',
        array(
            'label'          => __( 'Description', 'gh-exam' ),
            'section'        => 'portfolio_section',
            'type'           => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'services_section_show',
        array(
            'default'    =>  'true',
            'transport'  =>  'postMessage'
        ));
    $wp_customize->add_control(
        'services_section_show',
        array(
            'section'   => 'portfolio_section',
            'label'     => esc_html__('Display Section?', 'gh-exam' ),
            'type'      => 'checkbox'
        )
    );

}
add_action( 'customize_register', 'gh_exam_customize_register' );

function custom_style() {
    ?>
    <style type="text/css">

        <?php if( false === get_theme_mod( 'contact_section_show' ) ) { ?>
        .about-us-section { display: none; }
        <?php }  ?>
        .contact-us-section  {
            background: url(<?php echo get_theme_mod('contact_section_bg')  ?>) center center /cover no-repeat;
        }

        .blog .header-section,
        .single-post .header-section{
            background: url(<?php the_field('background_header_section', get_option('page_for_posts')); ?>) center /cover no-repeat;
            height: 210px;
        }

    </style>
    <?php
}
add_action('wp_head', 'custom_style');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessplus_customize_preview_js() {
    wp_enqueue_script( 'businessplus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'businessplus_customize_preview_js' );
