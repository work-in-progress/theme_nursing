<?php
/**
 * Plugin Name: Example Widget
 * Plugin URI: http://example.com/widget
 * Description: A widget that serves as an example for developing more advanced widgets.
 * Version: 0.1
 * Author: Justin Tadlock
 * Author URI: http://justintadlock.com
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'widget_actionbuttons_load' );

/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function widget_actionbuttons_load() {
	register_widget( 'ActionButtons_Widget' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class ActionButtons_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function ActionButtons_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'actionbuttons', 'description' => __('A widget that displays the actionbuttons for this site.', 'actionbuttons') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'actionbuttons-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'actionbuttons-widget', __('ActionButtons', 'actionbuttons'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$actionbutton_link_a = $instance['actionbutton_link_a'];
		$actionbutton_link_b = $instance['actionbutton_link_b'];
		$actionbutton_link_c = $instance['actionbutton_link_c'];
		

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		/* if ( $title )
			echo $before_title . $title . $after_title;
		*/
		
		printf('<div class=\'actionbuttons_box\'><span class=\'actionbuttons_caption\'>' . $title . '</span>');
		/* Display name from widget settings if one was input. */

		printf('<div class=\'actionbuttons_inner_box\'>');
		
		printf( '<a id=\'actionbutton_a\' href=\'%1$s\'></a>', $actionbutton_link_a);
		printf( '<a id=\'actionbutton_b\' href=\'%1$s\'></a>', $actionbutton_link_b);
		printf( '<a id=\'actionbutton_c\' href=\'%1$s\'></a>', $actionbutton_link_c);

		printf('</div>');

		printf('</div>');
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['actionbutton_link_a'] = strip_tags( $new_instance['actionbutton_link_a'] );
		$instance['actionbutton_link_b'] = strip_tags( $new_instance['actionbutton_link_b'] );
		$instance['actionbutton_link_c'] = strip_tags( $new_instance['actionbutton_link_c'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('', 'actionbuttons'), 
											 'actionbutton_link_a' => __('', 'actionbuttons'), 'actionbutton_link_b' => __('', 'actionbuttons') , 'actionbutton_link_c' => __('', 'actionbuttons') );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<!-- actionbutton_link_a: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'actionbutton_link_a' ); ?>"><?php _e('Link A:', 'actionbuttons'); ?></label>
			<input id="<?php echo $this->get_field_id( 'actionbutton_link_a' ); ?>" name="<?php echo $this->get_field_name( 'actionbutton_link_a' ); ?>" value="<?php echo $instance['actionbutton_link_a']; ?>" style="width:100%;" />
		</p>


		<!-- actionbutton_link_b: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'actionbutton_link_b' ); ?>"><?php _e('Link B:', 'actionbuttons'); ?></label>
			<input id="<?php echo $this->get_field_id( 'actionbutton_link_b' ); ?>" name="<?php echo $this->get_field_name( 'actionbutton_link_b' ); ?>" value="<?php echo $instance['actionbutton_link_b']; ?>" style="width:100%;" />
		</p>
			
		<!-- actionbutton_link_c: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'actionbutton_link_c' ); ?>"><?php _e('Link C:', 'actionbuttons'); ?></label>
			<input id="<?php echo $this->get_field_id( 'actionbutton_link_c' ); ?>" name="<?php echo $this->get_field_name( 'actionbutton_link_c' ); ?>" value="<?php echo $instance['actionbutton_link_c']; ?>" style="width:100%;" />
		</p>
	

	<?php
	}
}

?>
