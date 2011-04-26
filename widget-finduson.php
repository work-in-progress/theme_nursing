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
add_action( 'widgets_init', 'widget_finduson_load' );

/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function widget_finduson_load() {
	register_widget( 'FindUsOn_Widget' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class FindUsOn_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function FindUsOn_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'finduson', 'description' => __('A widget that displays the social links for the site.', 'finduson') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base' => 'finduson-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'finduson-widget', __('Find Us On', 'finduson'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook_link = $instance['facebook_link'];
		$twitter_link = $instance['twitter_link'];
		$linkedin_link = $instance['linkedin_link'];
		$youtube_link = $instance['youtube_link'];
		

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		/* if ( $title )
			echo $before_title . $title . $after_title;
		*/
		
		printf('<div class=\'finduson_socialbox\'><span class=\'finduson_caption\'>' . $title . '</span>');
		/* Display name from widget settings if one was input. */
		if ( $facebook_link )
				printf( '<a id=\'socialbuttonfacebook\' href=\'%1$s\'  target=\'_blank\'>Facebook</a>', $facebook_link );
		if ( $twitter_link )
				printf( '<a id=\'socialbuttontwitter\' href=\'%1$s\'  target=\'_blank\'>Twitter</a>', $twitter_link );
		if ( $linkedin_link )
				printf( '<a id=\'socialbuttonlinkedin\' href=\'%1$s\'  target=\'_blank\'>LinkedIn</a>', $linkedin_link );
		if ( $youtube_link )
				printf( '<a id=\'socialbuttonyoutube\' href=\'%1$s\'  target=\'_blank\'>YouTube</a>', $youtube_link );
		
		/*	printf( '<p>' . __('Hello. My name is %1$s.', 'example') . '</p>', $facebook_link ); */

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
		$instance['facebook_link'] = strip_tags( $new_instance['facebook_link'] );
		$instance['twitter_link'] = strip_tags( $new_instance['twitter_link'] );
		$instance['linkedin_link'] = strip_tags( $new_instance['linkedin_link'] );
		$instance['youtube_link'] = strip_tags( $new_instance['youtube_link'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('Find Us On', 'finduson'), 'facebook_link' => __('', 'finduson'), 'twitter_link' => __('', 'finduson') , 'linkedin_link' => __('', 'finduson'), 'youtube_link' => __('', 'finduson'));
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<!-- Facebook: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook_link' ); ?>"><?php _e('Facebook:', 'finduson'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook_link' ); ?>" name="<?php echo $this->get_field_name( 'facebook_link' ); ?>" value="<?php echo $instance['facebook_link']; ?>" style="width:100%;" />
		</p>
		<!-- Twitter: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter_link' ); ?>"><?php _e('Twitter:', 'finduson'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter_link' ); ?>" name="<?php echo $this->get_field_name( 'twitter_link' ); ?>" value="<?php echo $instance['twitter_link']; ?>" style="width:100%;" />
		</p>
		<!-- LinkedIN: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin_link' ); ?>"><?php _e('LinkedIn:', 'finduson'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin_link' ); ?>" name="<?php echo $this->get_field_name( 'linkedin_link' ); ?>" value="<?php echo $instance['linkedin_link']; ?>" style="width:100%;" />
		</p>
		<!-- YouTube: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube_link' ); ?>"><?php _e('YouTube:', 'finduson'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube_link' ); ?>" name="<?php echo $this->get_field_name( 'youtube_link' ); ?>" value="<?php echo $instance['youtube_link']; ?>" style="width:100%;" />
		</p>



	<?php
	}
}

?>
