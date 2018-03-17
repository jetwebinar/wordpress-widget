<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.jetwebinar.com
 * @since      1.0.0
 *
 * @package    Jetwebinar
 * @subpackage Jetwebinar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Jetwebinar
 * @subpackage Jetwebinar/admin
 * @author     Brandon Burr <brandon@jetwebinar.com>
 */
 
 
 
 
 
class Jetwebinar_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		
		add_action('admin_menu', array($this,'jetwebinar_menu'));

		if ( is_admin() ){ // admin actions
		  register_setting( 'jw-settings', 'jw_url' );
		} else {
		  // non-admin enqueues, actions, and filters
		}
	}
	
	public function jetwebinar_menu() {
		add_menu_page('JetWebinar Registration Widget Settings', 'JetWebinar', 'administrator', 'jetwebinar-settings', array($this,'jetwebinar_settings_page'), 'dashicons-format-video');
	}
	
	public function jetwebinar_settings_page() {
	  include('partials/jetwebinar-admin-display.php');
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jetwebinar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jetwebinar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/jetwebinar-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jetwebinar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jetwebinar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jetwebinar-admin.js', array( 'jquery' ), $this->version, false );

	}

}
