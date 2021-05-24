<?php
/**
 * Plugin Name: Cool Timeline Addon For Elementor
 * Description:  Cool Timeline Addon For Elementor
 * Plugin URI:  https://www.cooltimeline.com
 * Version:     1.2
 * Author:      Cool Plugins
 * Author URI:  https://coolplugins.net/
 * Text Domain: cool-timeline
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if( !defined( 'CTLA_VERSION' ) ) {
    define( 'CTLA_VERSION', '1.2' );
}
if( !defined( 'CTLA_DIR_PATH' ) ) {
	define( 'CTLA_DIR_PATH', plugin_dir_path( __FILE__ ) );
}
if( !defined( 'CTLA_URL' ) ) {
    define( 'CTLA_URL', plugin_dir_url( __FILE__ ));	
}
define('CTLA_FILE', __FILE__);

// register plugin activation and deactivation hook
register_activation_hook(CTLA_FILE, array('CoolTimelineElementorAddon', 'ctla_activate'));
register_deactivation_hook(CTLA_FILE, array('CoolTimelineElementorAddon', 'ctla_deactivate'));

/**
 * Class CoolTimelineElementorAddon
 */
final class CoolTimelineElementorAddon 
{
	
	/**
	 * Plugin instance.
	 *
	 * @var CoolTimelineElementorAddon
	 * @access private
	 */
	private static $instance = null;

	/**
	 * Get plugin instance.
	 *
	 * @return CoolTimelineElementorAddon
	 * @static
	 */
	public static function get_instance()
	{
	    if (!isset(self::$instance)) {
	        self::$instance = new self;
	    }

	    return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * @access private
	 */
	private function __construct()  
	{
		//Load the plugin after Elementor (and other plugins) are loaded. 
		add_action( 'plugins_loaded', array($this, 'ctla_loaded') );
	}


	function ctla_activate_required_plugins(){

	    // Require parent plugin
	    if ( !is_plugin_active( 'cool-timeline/cooltimeline.php' )) {
			// Stop activation redirect and show error
			?>
			<div class="notice notice-warning is-dismissible">
				<p><?php echo sprintf( __( 'Sorry, but this plugin requires the <a href="%s"  target="_blank" >Cool Timeline</a>
				to be installed and active. ','cool-timeline' ),  'https://wordpress.org/plugins/cool-timeline'); ?></p>
			</div>
	      <?php
	    }

	}

	function ctla_loaded() {

		// Load localization file
		load_plugin_textdomain( 'cool-timeline' );
		
		if ( !class_exists('CoolTimeline')) {
			add_action( 'admin_notices', array($this,'ctla_fail_load_coolTimeline') );
		}
		// Notice if the Elementor is not active
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', array($this, 'ele_fail_to_load') );
			return;
		}
		
		// Check required version
		$elementor_version_required = '1.8.0';
		if ( ! version_compare( ELEMENTOR_VERSION, $elementor_version_required, '>=' ) ) {
			add_action( 'admin_notices', array($this,'ctla_fail_load_out_of_date') );
			return;
		}
	
		
		// Require the main plugin file
		require( __DIR__ . '/class-cool-timeline-addon.php' );
	
	
	}	// end of ctla_loaded()

			
	function ele_fail_to_load() { ?>

		<?php if (!is_plugin_active( 'elementor/elementor.php' ) ) : ?>
			<div class="notice notice-warning is-dismissible">
				<p><?php echo sprintf( __( '<a href="%s"  target="_blank" >Elementor Page Builder</a>  must be installed and activated for "<strong>Cool Timeline Addon For Elementor</strong>" to work' ),'https://wordpress.org/plugins/elementor/'); ?></p>
			</div>
		<?php endif; ?>

	<?php }

	function ctla_fail_load_coolTimeline(){
		if( !is_plugin_active( 'cool-timeline/cooltimeline.php' ) ){ ?>
		<div class="notice notice-warning is-dismissible">
			<p><?php echo sprintf( __( 'Sorry, but "<strong>Cool Timeline Addon For Elementor</strong>" plugin requires the <a href="%s"  target="_blank" >Cool Timeline</a>
			to be installed and active. ' ),  'https://wordpress.org/plugins/cool-timeline'); ?></p>
		</div>
	  <?php
		}
	}

	function ctla_fail_load_out_of_date() {
		if ( ! current_user_can( 'update_plugins' ) ) {
			return;
		}
		$file_path = 'elementor/elementor.php';
		$upgrade_link = wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' ) . $file_path, 'upgrade-plugin_' . $file_path );
		$message = '<p>' . __( 'Cool Timeline Addon For Elementor is not working because you are using an old version of Elementor.', 'cool-timeline' ) . '</p>';
		$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $upgrade_link, __( 'Update Elementor Now', 'cool-timeline' ) ) . '</p>';
	
		echo '<div class="error">' . $message . '</div>';
	}

	/*
      |----------------------------------------------------------------------------
      | Run when activate plugin.
      |----------------------------------------------------------------------------
    */
    public static function ctla_activate() {
		update_option("ctla-v",CTLA_VERSION);
		update_option("ctla-type","FREE");
		update_option("ctla-installDate",date('Y-m-d h:i:s') );
    }

    /*
      |----------------------------------------------------------------------------
      | Run when de-activate plugin.
      |----------------------------------------------------------------------------
    */
    public static function ctla_deactivate() {
    }


}

function CoolTimelineElementorAddon()
{
    return CoolTimelineElementorAddon::get_instance();
}

$CoolTimelineElementorAddon = CoolTimelineElementorAddon();

