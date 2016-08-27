<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'ThachPham_Theme_Options' ) ) {

        class ThachPham_Theme_Options {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            public function setSections() {
                //for change the content in header top
                $this->sections[] = array(
                    'title'  => __( 'Header top', 'thachpham' ),
                    'desc'   => __( 'Change the content default', 'thachpham' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'header-top-left',
                            'type'     => 'textarea',
                            'title'    => __( 'Change content of header top', 'thachpham' ),
                        ),
                    )
                );
                // ACTUAL DECLARATION OF SECTIONS
                //for change the logo in header and the header information
                $this->sections[] = array(
                    'title'  => __( 'Header', 'thachpham' ),
                    'desc'   => __( 'All of setings for header on this theme.', 'thachpham' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id'       => 'logo-on',
                            'type'     => 'switch',
                            'title'    => __( 'Enable Image Logo', 'thachpham' ),
                            'compiler' => 'bool',
                            // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( 'Do you want to enable image logo?', 'thachpham' ),
                            'on'        => __('Enabled', 'thachpham'),
                            'off'       => __('Disabled', 'thachpham')
                        ),
                        array(
                            'id'    => 'logo-image',
                            'type'  => 'media',
                            'title' => __('Logo Image', 'thachpham'),
                            'desc'  => __('Image that you want to use as logo.', 'thachpham')
                        ),
                         array(
                            'id'       => 'live-help',
                            'type'     => 'text',
                            'title'    => __( 'Change live help of header middle', 'thachpham' ),
                        ),
                         array(
                            'id'       => 'open-time',
                            'type'     => 'text',
                            'title'    => __( 'Change opentime of header middle', 'thachpham' ),
                        ),
                         array(
                            'id'       => 'email',
                            'type'     => 'text',
                            'title'    => __( 'Change email of header middle', 'thachpham' ),
                        ),
                    )
                );
                //for change the logo in footer and the footer information
                  $this->sections[] = array(
                    'title'  => __( 'Footer', 'thachpham' ),
                    'desc'   => __( 'All of setings for footer on this theme.', 'thachpham' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'logo-ft-on',
                            'type'     => 'switch',
                            'title'    => __( 'Enable Image Logo Footer', 'thachpham' ),
                            'compiler' => 'bool',
                            // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( 'Do you want to enable image logo  for footer?', 'thachpham' ),
                            'on'        => __('Enabled', 'thachpham'),
                            'off'       => __('Disabled', 'thachpham')
                        ),
                        array(
                            'id'    => 'logo-ft-image',
                            'type'  => 'media',
                            'title' => __('Logo Footer Image', 'thachpham'),
                            'desc'  => __('Image that you want to use as logo.', 'thachpham')
                        ),
                         array(
                            'id'       => 'ft-description',
                            'type'     => 'textarea',
                            'title'    => __( 'Change the description content in footer', 'thachpham' ),
                        ), 
                          array(
                            'id'       => 'ft-social',
                            'type'     => 'textarea',
                            'title'    => __( 'Change the socail icon  in footer', 'thachpham' ),
                        ), 
                        
                    )
                );
                //option for change the contact infor in footer
                $this->sections[] = array(
                    'title'  => __( 'Contact Infor', 'thachpham' ),
                    'desc'   => __( 'Change the contact content in footer', 'thachpham' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                         array(
                            'id'       => 'contact-title',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit title for contact', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                         array(
                            'id'       => 'location',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the location', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                        array(
                            'id'       => 'phone',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the phone number', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                         array(
                            'id'       => 'mail',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the email', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                          array(
                            'id'       => 'www',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the www', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                        
                    )
                );   
                    //copyright
                $this->sections[] = array(
                    'title'  => __( 'Copyright Footer', 'thachpham' ),
                    'desc'   => __( 'Change the text copyright in footer', 'thachpham' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                         array(
                            'id'       => 'left-bl-ft',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the description-above footer', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                         array(
                            'id'       => 'middle-bl-ft',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the copyright footer', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                        array(
                            'id'       => 'copyright-ft',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the copyright footer', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                        
                    )
                );    
                //for change the opening time in contact page
                  $this->sections[] = array(
                    'title'  => __( 'Opening time', 'thachpham' ),
                    'desc'   => __( 'Change the opening time', 'thachpham' ),
                    'icon'   => '',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                         array(
                            'id'       => 'opening-title',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit or remove the opening time title', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                         array(
                            'id'       => 'time',
                            'type'     => 'textarea',
                            'title'    => __( 'Edit  the time details', 'thachpham' ),
                            // Can be set to false to allow any media type, or can also be set to any mime type.           
                        ),
                    )
                );  
                $this->sections[] = array(
                    'title'  => __( 'Typography', 'thachpham' ),
                    'desc'   => __( 'All of typography settings.', 'thachpham' ),
                    'icon'   => 'el el-icon-font',

                    'fields' => array(
                        array(
                            'id'       => 'typo-main',
                            'type'     => 'typography',
                            'title'    => __( 'Main Typography', 'thachpham' ),
                            'output'    => 'body',
                            'text-transform'    => true,
                            'default'   => array(
                                'font-size' => '14px',
                                'font-family' => 'Helvetica Neue, Arial, sans-serif',
                                'color'    => '#333333'
                            )
                        ),
                    )
                );
            }
            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'tp_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Sample Options', 'redux-framework-demo' ),
                    'page_title'         => __( 'Sample Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module

                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => true,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support

                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE

                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );


                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                $this->args['share_icons'][] = array(
                    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                    'title' => 'Visit us on GitHub',
                    'icon'  => 'el el-github'
                    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/reduxframework',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/company/redux-framework',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
            }

        }

        global $reduxConfig;
        $reduxConfig = new ThachPham_Theme_Options();
    }
