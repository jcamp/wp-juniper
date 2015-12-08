<?php
/*
 	Juniper for WordPress
    Copyright (C) 2015 Plain, LLC. http://plainmade.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	See license.txt

----------------------------------------------------------------- 
	
	Social Accounts Widget
*/

// Creating the widget 
class juniper_social_widget extends WP_Widget {

function __construct() {
parent::__construct(
    // Base ID of your widget
    'juniper_social_widget', 

    // Widget name will appear in UI
    __('Juniper Social Icon', 'wpb_widget_domain'), 

    // Widget description
    array( 'description' => __( 'Add multiple social icons to your header.', 'wpb_widget_domain' ), )
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
	
	$services = array();
	$services['facebook'] = 'https://facebook.com/';
	$services['twitter'] = 'https://twitter.com/';
	$services['dribbble'] = 'https://dribbble.com/';
	$services['linkedin'] = 'https://linkedin.com/';
    $services['behance'] = 'https://www.behance.net/';
    $services['flickr'] = 'https://flickr.com/photos/';
	
    $service = apply_filters( 'widget_title', $instance['service'] );
	$url = apply_filters( 'widget_title', $instance['url'] );

echo $args['before_widget'];
    if ( ! empty( $service ) && ! empty( $url ) ) {
        echo '<a href="' . $services[$service] . $url . '"><img src="' . get_template_directory_uri() . '/images/social_icons/' . $service . '.svg"></a>';
    }
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
    if ( isset( $instance[ 'service' ] ) ) {
        $service = $instance[ 'service' ];
    } else {
        $service = __( 'twitter', 'wpb_widget_domain' );
    }
	
	if ( isset( $instance[ 'url' ] ) ) {
        $url = $instance[ 'url' ];
    } else {
        $url = __( 'plainmade', 'wpb_widget_domain' );
    }
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'service' ); ?>"><?php _e( 'Service:' ); ?></label> 
<select class="widefat" id="<?php echo $this->get_field_id( 'service' ); ?>" name="<?php echo $this->get_field_name( 'service' ); ?>">
	<option type="text" value="twitter" <?php if ( $service == 'twitter' ) : echo 'selected'; endif; ?>>Twitter</option>
	<option type="text" value="facebook" <?php if ( $service == 'facebook' ) : echo 'selected'; endif; ?>>Facebook</option>
	<option type="text" value="dribbble" <?php if ( $service == 'dribbble' ) : echo 'selected'; endif; ?>>Dribbble</option>
	<option type="text" value="linkedin" <?php if ( $service == 'linkedin' ) : echo 'selected'; endif; ?>>LinkedIn</option>
    <option type="text" value="behance" <?php if ( $service == 'behance' ) : echo 'selected'; endif; ?>>Behance</option>
    <option type="text" value="flickr" <?php if ( $service == 'flickr' ) : echo 'selected'; endif; ?>>Flickr</option>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Account name:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />
<small>Do not include any @ or + symbols before your name for Twitter or Google+.</small>
</p>
<?php
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['service'] = ( ! empty( $new_instance['service'] ) ) ? strip_tags( $new_instance['service'] ) : '';
	$instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
    return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function juniper_social_load_widget() {
	register_widget( 'juniper_social_widget' );
}
add_action( 'widgets_init', 'juniper_social_load_widget' );

?>