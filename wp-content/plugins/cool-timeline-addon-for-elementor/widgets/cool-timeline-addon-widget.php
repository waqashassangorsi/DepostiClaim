<?php
namespace CoolTimelineFreeAddonWidget\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor CoolTimelineFreeAddonWidget
 *
 * Elementor widget for CoolTimelineFreeAddonWidget
 *
 * @since 1.0.0
 */
class CoolTimelineFreeAddonWidget extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'ctl-addon';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Cool Timeline', 'cool-timeline' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-time-line';
	}


	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'cool-timeline' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'ctla' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Cool Timeline Shortcode Settings', 'cool-timeline' ),
			]
		);

		$this->add_control(
			'timeline_layout',
			[
				'label' => __( 'Timeline Layout', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => __( 'Default Layout', 'cool-timeline' ),
					'horizontal' => __( 'Horizontal Layout', 'cool-timeline' ),
					'one-side' => __( 'One Side Layout', 'cool-timeline' ),
					'simple' => __( 'Simple Layout', 'cool-timeline' ),
					'compact' => __( 'Compact Layout', 'cool-timeline' ),
				]
				
			]
		);

		$this->add_control(
			'date_format',
			[
				'label' => __( 'Timeline Date Format', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'F j',
				'options' => [
					'F j' => __( date('F j'), 'cool-timeline' ),
					'F j Y' => __( date('F j Y'), 'cool-timeline' ),
					'Y-m-d' => __( date('Y-m-d'), 'cool-timeline' ),
					'm/d/Y' => __( date('m/d/Y'), 'cool-timeline' ),
					'd/m/Y' => __( date('d/m/Y'), 'cool-timeline' ),
					'F j Y g:i A' => __( date('F j Y g:i A'), 'cool-timeline' ),
					'Y' => __( date('Y'), 'cool-timeline' ),
				],
				
			]
		);

		$this->add_control(
			'skin',
			[
				'label' => __( 'Timeline Skin', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => __( 'Default', 'cool-timeline' ),
					'clean' => __( 'Clean', 'cool-timeline' ),
				],
				'condition'   => [
					'timeline_layout!'   => 'horizontal',
				]
				
			]
		);
		
		$this->add_control(
			'ctl_icons',
			[
				'label' => __( 'Story Icon', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'NO',
				'options' => [
					'NO' => __( 'NO', 'cool-timeline' ),
					'YES' => __( 'YES', 'cool-timeline' ),
				],
				'condition'   => [
					'timeline_layout!'   => 'horizontal',
				]
				
			]
		);

		$this->add_control(
			'stories_to_show',
			[
				'label' => __( 'Number of stories to show', 'cool-timeline' ),
				'type' => Controls_Manager::TEXT,
				'default' => '4',
				'condition'   => [
					'timeline_layout'   => 'horizontal',
				]
			]
		);

		$this->add_control(
			'number_of_posts',
			[
				'label' => __( 'Show number of stories per page', 'cool-timeline' ),
				'type' => Controls_Manager::TEXT,
				'default' => '10',
				'condition'   => [
					'timeline_layout!'   => 'horizontal',
				]
			]
		);
		$this->add_control(
			'animations',
			[
				'label' => __( 'Stories Animation Effect', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => __( 'None', 'cool-timeline' ),
					'fadeInUp' => __( 'FadeInUp', 'cool-timeline' ),
				],
				'condition'   => [
					'timeline_layout!'   => 'horizontal',
				]
				
			]
		);

		$this->add_control(
			'stories_description',
			[
				'label' => __( 'Stories Description?', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'short',
				'options' => [
					'short' => __( 'Summary', 'cool-timeline' ),
					'full' => __( 'Full Text', 'cool-timeline' ),
				],
				
			]
		);

		$this->add_control(
			'story_order',
			[
				'label' => __( 'Stories Order?', 'cool-timeline' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => __( 'DESC', 'cool-timeline' ),
					'ASC' => __( 'ASC', 'cool-timeline' ),
				],
				
			]
		);

		$this->end_controls_section();

		
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();
		//echo"<pre>";
	
		$layout=isset($settings['timeline_layout'])?$settings['timeline_layout']:"default";
        $date_format=isset($settings['date_format'])?$settings['date_format']:"F j";
        
        $stories_to_show = isset( $settings['stories_to_show'] )? $settings['stories_to_show']: '4';

        $skin=isset($settings['skin'])?$settings['skin']:"default";
        $ctl_icons=isset($settings['ctl_icons'])?$settings['ctl_icons']:"NO";
        $number_of_posts=isset($settings['number_of_posts'])?$settings['number_of_posts']:"10";
        $animations=isset($settings['animations'])?$settings['animations']:"none";
        
        $description='';
        if(isset($settings['stories_description'])){
            $description = 'story-content="'.$settings['stories_description'].'"';
        }
        $order='';
        if(isset($settings['story_order'])){
            $order = 'order="'.$settings['story_order'].'"';
        }

         echo'<div class="elementor-shortcode cool-timeline-free-addon">';
		 if( is_admin() ){
			echo "<strong>It is only a shortcode builder. Kindly update/publish the page and check the actually cool timeline on front-end</strong><br/>";
		}
         if( $layout != 'horizontal' ){
            echo '[cool-timeline layout="'.$layout.'" animation="'.$animations.'" date-format="'.$date_format.'" icons="'.$ctl_icons.'" show-posts="'.$number_of_posts.'" skin="'.$skin.'" '.$description.' '.$order.']';
         }else{
            echo '[cool-timeline layout="'.$layout.'" date-format="'.$date_format.'" show-posts="'.$stories_to_show.'" '.$description.' '.$order.']';
         }

 		 echo'</div>';
	}

	
	
}
