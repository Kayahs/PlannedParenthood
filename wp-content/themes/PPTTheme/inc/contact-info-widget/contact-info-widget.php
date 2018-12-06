<?php

class Contact_Info extends WP_Widget {

    /**
     * Contact Info Widget
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'contact-info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Contact Info Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Show the contact info'
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

		
		$tel = empty( $instance['tel'] ) ? '' : apply_filters( 'widget_title', $instance['tel'] );
		$fax = empty( $instance['fax'] ) ? '' : apply_filters( 'widget_title', $instance['fax'] );
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'widget_title', $instance['email'] );
		$media = empty( $instance['media'] ) ? '' : apply_filters( 'widget_title', $instance['media'] );

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

		$instance['tel'] = strip_tags( $new_instance['tel'] );		
		$instance['fax'] = strip_tags( $new_instance['fax'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		$instance['media'] = strip_tags( $new_instance['media'] );

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
				'title' => 'Contact Us',
				'tel' => '',
				'fax' => '',
				'email' => '',
				'media' => '',
				'note' => '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$tel = strip_tags( $new_instance['tel'] );
		$fax = strip_tags( $new_instance['fax'] );
		$email = strip_tags( $new_instance['email'] );
		$media = strip_tags( $new_instance['media'] );
		$note = strip_tags( $new_instance['note'] );


		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Contact_Info' );
});
