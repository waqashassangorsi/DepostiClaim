<?php
namespace TheplusAddons;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

final class L_Theplus_Element_Load {
	/**
		* Core singleton class
		* @var self - pattern realization
	*/
	private static $_instance;

	/**
	 * @var Manager
	 */
	private $_modules_manager;

	/**
	 * @deprecated
	 * @return string
	 */
	public function get_version() {
		return L_THEPLUS_VERSION;
	}
	
	/**
	* Cloning disabled
	*/
	public function __clone() {
	}
	
	/**
	* Serialization disabled
	*/
	public function __sleep() {
	}
	
	/**
	* De-serialization disabled
	*/
	public function __wakeup() {
	}
	
	/**
	* @return \Elementor\Theplus_Element_Loader
	*/
	public static function elementor() {
		return \Elementor\Plugin::$instance;
	}
	
	/**
	* @return Theplus_Element_Loader
	*/
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	/**
	 * we loaded module manager + admin php from here
	 * @return [type] [description]
	 */
	private function includes() {
		if ( ! class_exists( 'CMB2' ) ){
			require_once L_THEPLUS_INCLUDES_URL.'plus-options/metabox/init.php';
		}
		$option_name='default_plus_options';
		$value='1';
		if ( is_admin() && get_option( $option_name ) !== false ) {
		} else if( is_admin() ){
			$default_load=get_option( 'theplus_options' );
			if ( $default_load !== false && $default_load!='') {
				$deprecated = null;
				$autoload = 'no';
				add_option( $option_name,$value, $deprecated, $autoload );
			}else{
				$theplus_options=get_option( 'theplus_options' );
				$theplus_options['check_elements']= array('tp_accordion','tp_adv_text_block','tp_blockquote','tp_blog_listout','tp_button','tp_contact_form_7','tp_countdown','tp_clients_listout','tp_gallery_listout','tp_flip_box','tp_heading_animation','tp_header_extras','tp_heading_title','tp_info_box','tp_navigation_menu_lite','tp_page_scroll','tp_progress_bar','tp_number_counter','tp_pricing_table','tp_scroll_navigation','tp_social_icon','tp_tabs_tours','tp_team_member_listout','tp_testimonial_listout','tp_video_player');
				
				$deprecated = null;
				$autoload = 'no';
				add_option( 'theplus_options',$theplus_options, $deprecated, $autoload );
				add_option( $option_name,$value, $deprecated, $autoload );
			}
		}
		
		require_once L_THEPLUS_INCLUDES_URL .'plus_addon.php';
		
		
		if ( file_exists(L_THEPLUS_INCLUDES_URL . 'plus-options/metabox/init.php' ) ) {
			require_once L_THEPLUS_INCLUDES_URL.'plus-options/includes.php';
		}
		
		require L_THEPLUS_INCLUDES_URL.'theplus_options.php';		
		
		if(!defined('THEPLUS_VERSION')){
			require L_THEPLUS_PATH.'modules/theplus-integration.php';
		}
		
		require L_THEPLUS_PATH.'modules/query-control/module.php';
		
		require_once L_THEPLUS_PATH .'modules/helper-function.php';
		
		
	}
	
	/**
	* Widget Include required files
	*
	*/
	public function include_widgets()
	{			
		require_once L_THEPLUS_PATH.'modules/theplus-include-widgets.php';		
	}
	
	public function theplus_editor_styles() {
		wp_enqueue_style( 'theplus-ele-admin', L_THEPLUS_ASSETS_URL .'css/admin/theplus-ele-admin.css', array(),L_THEPLUS_VERSION,false );
	}
	public function theplus_elementor_admin_css() {  
		wp_enqueue_script( 'jquery-ui-dialog' );
		wp_enqueue_style( 'wp-jquery-ui-dialog' );
		wp_enqueue_style( 'theplus-ele-admin', L_THEPLUS_ASSETS_URL .'css/admin/theplus-ele-admin.css', array(),L_THEPLUS_VERSION,false );
		wp_enqueue_script( 'theplus-admin-js', L_THEPLUS_ASSETS_URL .'js/admin/theplus-admin.js', array(),L_THEPLUS_VERSION,false );
		
		echo '<script> var theplus_ajax_url = "'.admin_url("admin-ajax.php").'";
		var theplus_nonce = "'.wp_create_nonce("theplus-addons").'";</script>';
	}
	function theplus_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';
		return $mimes;
	}
	
	
	/**
	 * Print style.
	 *
	 * Adds custom CSS to the HEAD html tag. The CSS that emphasise the maintenance
	 * mode with red colors.
	 *
	 * Fired by `admin_head` and `wp_head` filters.
	 *
	 * @since 2.1.0
	 */
	public function print_style() {
		?>
		<style>*:not(.elementor-editor-active) .plus-conditions--hidden {
				  display: none;
				}</style>
		<?php
	}
	
	
	
	public function add_elementor_category() {
			
		$elementor = \Elementor\Plugin::$instance;
		
		//Add elementor category
		$elementor->elements_manager->add_category('plus-essential', 
			[
				'title' => esc_html__( 'PlusEssential', 'tpebl' ),
				'icon' => 'fa fa-plug',
			],
			1
		);
		$elementor->elements_manager->add_category('plus-listing', 
			[
				'title' => esc_html__( 'PlusListing', 'tpebl' ),
				'icon' => 'fa fa-plug',
			],
			1
		);
		$elementor->elements_manager->add_category('plus-creatives', 
			[
				'title' => esc_html__( 'PlusCreatives', 'tpebl' ),
				'icon' => 'fa fa-plug',
			],
			1
		);
		$elementor->elements_manager->add_category('plus-tabbed', 
			[
				'title' => esc_html__( 'PlusTabbed', 'tpebl' ),
				'icon' => 'fa fa-plug',
			],
			1
		);
		$elementor->elements_manager->add_category('plus-adapted', 
			[
				'title' => esc_html__( 'PlusAdapted', 'tpebl' ),
				'icon' => 'fa fa-plug',
			],
			1
		);
		$elementor->elements_manager->add_category('plus-header', 
			[
				'title' => esc_html__( 'PlusHeader', 'tpebl' ),
				'icon' => 'fa fa-plug',
			],
			1
		);
		
	}
	
	function theplus_settings_links ( $links ) {
		$setting_link = array(
				'<a href="' . admin_url( 'admin.php?page=theplus_options' ) . '">'.esc_html__("Settings","tpebl").'</a>',
			);
		return array_merge( $links, $setting_link );
	
	}
	
	
	private function hooks() {
		$theplus_options=get_option('theplus_options');
		$plus_extras=l_theplus_get_option('general','extras_elements');
		
		if((isset($plus_extras) && empty($plus_extras) && empty($theplus_options)) || (!empty($plus_extras) && in_array('plus_display_rules',$plus_extras))){
			add_action( 'wp_head', [ $this, 'print_style' ] );
		}
		add_action( 'elementor/init', [ $this, 'add_elementor_category' ] );
		add_action( 'elementor/editor/after_enqueue_styles', [ $this, 'theplus_editor_styles' ] );
		
		add_filter('upload_mimes', array( $this,'theplus_mime_types'));
		// Include some backend files
		add_action( 'admin_enqueue_scripts', [ $this,'theplus_elementor_admin_css'] );
		add_filter( 'plugin_action_links_' . L_THEPLUS_PBNAME ,[ $this, 'theplus_settings_links'] );
		
		
	}	
	
	/**
	 * ThePlus_Load constructor.
	 */
	private function __construct() {
		
		// Register class automatically
		$this->includes();
		// Finally hooked up all things
		$this->hooks();
		if(!defined('THEPLUS_VERSION')){	
			L_Theplus_Elements_Integration()->init();
		}
		$this->include_widgets();		
		l_theplus_widgets_include();
		
	}
}

function l_theplus_addon_load()
{
	return L_Theplus_Element_Load::instance();
}
// Get l_theplus_addon_load Running
l_theplus_addon_load();