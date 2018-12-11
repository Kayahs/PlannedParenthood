<?php


class Location extends WP_Widget {

    /**
     * Location Widget
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'location';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Location Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Show the location.'
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

		$locLine1 = empty( $instance['locLine1'] ) ? '' : apply_filters( 'widget_title', $instance['locLine1'] );
		$locLine2 = empty( $instance['locLine2'] ) ? '' : apply_filters( 'widget_title', $instance['locLine2'] );
		$locLine3 = empty( $instance['locLine3'] ) ? '' : apply_filters( 'widget_title', $instance['locLine3'] );
		$locLine4 = empty( $instance['locLine4'] ) ? '' : apply_filters( 'widget_title', $instance['locLine4'] );
		$note = empty( $instance['note'] ) ? '' : apply_filters( 'widget_title', $instance['note'] );



		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

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
		$instance['locLine1'] = strip_tags( $new_instance['locLine1'] );
		$instance['locLine2'] = strip_tags( $new_instance['locLine2'] );
		$instance['locLine3'] = strip_tags( $new_instance['locLine3'] );
		$instance['locLine4'] = strip_tags( $new_instance['locLine4'] );
		$instance['note'] = strip_tags( $new_instance['note'] );

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
				'title' => 'our address',
				'locLine1' => '',
				'locLine2' => '',
				'locLine2' => '',
				'note' => '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$locLine1 = strip_tags( $instance['locLine1'] );
		$locLine2 = strip_tags( $instance['locLine2'] );
		$locLine3 = strip_tags( $instance['locLine3'] );
		$locLine4 = strip_tags( $instance['locLine4'] );
		$note = strip_tags( $instance['note'] );


		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Location' );
});
