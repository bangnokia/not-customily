<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://daudau.cc
 * @since      1.0.0
 *
 * @package    Not_Customily
 * @subpackage Not_Customily/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Not_Customily
 * @subpackage Not_Customily/admin
 * @author     Nguyen Viet <bangnokia@gmail.com>
 */
class Not_Customily_Admin {

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
		 * defined in Not_Customily_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Not_Customily_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/not-customily-admin.css', array(), $this->version, 'all' );

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
		 * defined in Not_Customily_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Not_Customily_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/not-customily-admin.js', array( 'jquery' ), $this->version, false );

	}

    public function add_warehouse_product_id_field()
    {
        global $product_object;

        woocommerce_wp_text_input(array(
            'id' => 'warehouse_product_id',
            'label' => __('Warehouse Product ID', 'woocommerce'),
            'placeholder' => '',
            'description' => __('Enter the Warehouse Product ID here.', 'woocommerce'),
            'value' => $product_object->get_meta('warehouse_product_id')
        ));
    }

    public function save_warehouse_product_id_field($post_id)
    {
        if (isset($_POST['warehouse_product_id'])) {
            $product = wc_get_product($post_id);
            $product->update_meta_data('warehouse_product_id', sanitize_text_field($_POST['warehouse_product_id']));
            $product->save();
        }
    }
}
