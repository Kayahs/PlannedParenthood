<?php

class Clinic_Hours_Widget extends WP_Widget {

    /**
     * Clinic Hours Widget
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'clinic-hours-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Clinic Hours Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Show Clinic-hours'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );

    $des = empty( $instance['des'] ) ? '' : apply_filters( 'widget_title', $instance['des'] );
		$mon_tue_thu = empty( $instance['mon_tue_thu'] ) ? '' : apply_filters( 'widget_title', $instance['mon_tue_thu'] );
		$wed = empty( $instance['wed'] ) ? '' : apply_filters( 'widget_title', $instance['wed'] );
		$fri = empty( $instance['fri'] ) ? '' : apply_filters( 'widget_title', $instance['fri'] );



		ob_start();

		// if ( $title ){
		// 	$widget_string .= $before_title;
		// 	$widget_string .= $title;
		// 	$widget_string .= $after_title;
		// }

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );



		// $widget_string .= ob_get_clean();
		// $widget_string .= $after_widget;

		// print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );

    $instance['des'] = strip_tags( $new_instance['des'] );
		$instance['mon_tue_thu'] = strip_tags( $new_instance['mon_tue_thu'] );
		$instance['wed'] = strip_tags( $new_instance['wed'] );
		$instance['fri'] = strip_tags( $new_instance['fri'] );


		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'clinic hours',
        'des' => '',
				'mon_tue_thu' => '',
				'wed' => '',
				'fri' => '',
			)
		);

		$title = strip_tags( $instance['title'] );

    $des = strip_tags( $instance['des'] );
		$mon_tue_thu = strip_tags( $instance['mon_tue_thu'] );
		$wed = strip_tags( $instance['wed'] );
		$fri = strip_tags( $instance['fri'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Clinic_Hours_Widget' );
});


?>