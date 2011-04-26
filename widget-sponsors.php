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
add_action( 'widgets_init', 'widget_sponsors_load' );

/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function widget_sponsors_load() {
	register_widget( 'Sponsors_Widget' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class Sponsors_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function Sponsors_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'sponsors', 'description' => __('A widget that displays the sponsors for this site.', 'sponsors') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'sponsors-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'sponsors-widget', __('Sponsors', 'sponsors'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$sponsor_img_a = $instance['sponsor_img_a'];
		$sponsor_img_b = $instance['sponsor_img_b'];
		$sponsor_img_c = $instance['sponsor_img_c'];
		$sponsor_img_d = $instance['sponsor_img_d'];
		$sponsor_link_a = $instance['sponsor_link_a'];
		$sponsor_link_b = $instance['sponsor_link_b'];
		$sponsor_link_c = $instance['sponsor_link_c'];
		$sponsor_link_d = $instance['sponsor_link_d'];
		

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		/* if ( $title )
			echo $before_title . $title . $after_title;
		*/
		
		printf('<div class=\'sponsors_box\'><span class=\'sponsors_caption\'>' . $title . '</span>');
		/* Display name from widget settings if one was input. */

		printf('<div class=\'sponsors_inner_box\'>');
		
		$val = rand(0,3); /* Expects 4 inputs for now */
		
		if ( $sponsor_img_a &&  $sponsor_link_a && $val == 0)
				printf( '<a id=\'sponsor_a\' href=\'%1$s\'  ><img src=\'%2$s\' alt=\'\'/></a>', $sponsor_link_a, $sponsor_img_a  );

		if ( $sponsor_img_b &&  $sponsor_link_b && $val == 1)
				printf( '<a id=\'sponsor_b\' href=\'%1$s\'  ><img src=\'%2$s\' alt=\'\'/></a>', $sponsor_link_b, $sponsor_img_b  );

		if ( $sponsor_img_c &&  $sponsor_link_c && $val == 2)
				printf( '<a id=\'sponsor_c\' href=\'%1$s\' ><img src=\'%2$s\' alt=\'\'/></a>', $sponsor_link_c, $sponsor_img_c  );

		if ( $sponsor_img_d &&  $sponsor_link_d && $val == 3)
				printf( '<a id=\'sponsor_d\' href=\'%1$s\'  ><img src=\'%2$s\' alt=\'\'/></a>', $sponsor_link_d, $sponsor_img_d  );

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
		$instance['sponsor_link_a'] = strip_tags( $new_instance['sponsor_link_a'] );
		$instance['sponsor_link_b'] = strip_tags( $new_instance['sponsor_link_b'] );
		$instance['sponsor_link_c'] = strip_tags( $new_instance['sponsor_link_c'] );
		$instance['sponsor_link_d'] = strip_tags( $new_instance['sponsor_link_d'] );
		$instance['sponsor_img_a'] = strip_tags( $new_instance['sponsor_img_a'] );
		$instance['sponsor_img_b'] = strip_tags( $new_instance['sponsor_img_b'] );
		$instance['sponsor_img_c'] = strip_tags( $new_instance['sponsor_img_c'] );
		$instance['sponsor_img_d'] = strip_tags( $new_instance['sponsor_img_d'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('Our Sponsors:', 'sponsors'), 
											 'sponsor_link_a' => __('', 'sponsors'), 'sponsor_link_b' => __('', 'sponsors') , 'sponsor_link_c' => __('', 'sponsors'), 'sponsor_link_d' => __('', 'sponsors'), 
											 'sponsor_img_a' => __('', 'sponsors'), 'sponsor_img_b' => __('', 'sponsors') , 'sponsor_img_c' => __('', 'sponsors'), 'sponsor_img_d' => __('', 'sponsors'));
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<!-- sponsor_img_a: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_img_a' ); ?>"><?php _e('Image A:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_img_a' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_img_a' ); ?>" value="<?php echo $instance['sponsor_img_a']; ?>" style="width:100%;" />
		</p>
		<!-- sponsor_link_a: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_link_a' ); ?>"><?php _e('Link A:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_link_a' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_link_a' ); ?>" value="<?php echo $instance['sponsor_link_a']; ?>" style="width:100%;" />
		</p>


		<!-- sponsor_img_b: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_img_b' ); ?>"><?php _e('Image B:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_img_b' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_img_b' ); ?>" value="<?php echo $instance['sponsor_img_b']; ?>" style="width:100%;" />
		</p>
		<!-- sponsor_link_b: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_link_b' ); ?>"><?php _e('Link B:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_link_b' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_link_b' ); ?>" value="<?php echo $instance['sponsor_link_b']; ?>" style="width:100%;" />
		</p>
			
		<!-- sponsor_img_c: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_img_c' ); ?>"><?php _e('Image C:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_img_c' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_img_c' ); ?>" value="<?php echo $instance['sponsor_img_c']; ?>" style="width:100%;" />
		</p>
		<!-- sponsor_link_c: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_link_c' ); ?>"><?php _e('Link C:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_link_c' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_link_c' ); ?>" value="<?php echo $instance['sponsor_link_c']; ?>" style="width:100%;" />
		</p>
	
		<!-- sponsor_img_d: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_img_d' ); ?>"><?php _e('Image D:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_img_d' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_img_d' ); ?>" value="<?php echo $instance['sponsor_img_d']; ?>" style="width:100%;" />
		</p>
		<!-- sponsor_link_d: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sponsor_link_d' ); ?>"><?php _e('Link D:', 'sponsors'); ?></label>
			<input id="<?php echo $this->get_field_id( 'sponsor_link_d' ); ?>" name="<?php echo $this->get_field_name( 'sponsor_link_d' ); ?>" value="<?php echo $instance['sponsor_link_d']; ?>" style="width:100%;" />
		</p>



	<?php
	}
}

?>
