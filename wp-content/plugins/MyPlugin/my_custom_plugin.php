<?php
/*
Plugin Name: My Custom Plugin
*/


    //PROFANITY FILTER
    add_filter( 'the_content', 'myplugin_profanity_filter' );
    
    function myplugin_profanity_filter( $content ) {

        $profanities = array( 'sissy', 'dummy' );
        $content = str_ireplace( $profanities, '[censored]', $content );
            
        return $content;
    }




// create custom plugin settings menu
add_action( 'admin_menu', 'myplugin_create_menu' );

function myplugin_create_menu() {
	
    //create new top-level menu
    add_menu_page( 'Plugin Options', 'Plugin Options', 'manage_options', 'myplugin_main_menu', 'myplugin_settings_page', plugins_url( '/images/wordpress.png', __FILE__ ) );

    //call register settings function
    add_action( 'admin_init', 'myplugin_register_settings' );
	
}

function myplugin_register_settings() {
	
    //register our settings
    register_setting( 'myplugin-settings-group', 'myplugin_options', 'myplugin_sanitize_options' );
	
}

function myplugin_sanitize_options( $input ) {

    $input['option_name'] = sanitize_text_field( $input['option_name'] );
    $input['option_email'] = sanitize_email( $input['option_email'] );
    $input['option_url'] = esc_url( $input['option_url'] );

    return $input;

}


function myplugin_settings_page() {
?>
	<div class="wrap">
	<h2>Plugin Options</h2>

	<form method="post" action="options.php">
		<?php settings_fields( 'myplugin-settings-group' ); ?>
		<?php $myplugin_options = get_option( 'myplugin_options' ); ?>
		<table class="form-table">
			<tr valign="top">
			<th scope="row">Name</th>
			<td><input type="text" name="myplugin_options[option_name]" value="<?php echo esc_attr( $myplugin_options['option_name'] ); ?>" /></td>
			</tr>

			<tr valign="top">
			<th scope="row">Email</th>
			<td><input type="text" name="myplugin_options[option_email]" value="<?php echo esc_attr( $myplugin_options['option_email'] ); ?>" /></td>
			</tr>

			<tr valign="top">
			<th scope="row">URL</th>
			<td><input type="text" name="myplugin_options[option_url]" value="<?php echo esc_url( $myplugin_options['option_url'] ); ?>" /></td>
			</tr>
		</table>

		<p class="submit">
			<input type="submit" class="button-primary"	value="Save Changes" />
		</p>

	</form>
	</div>
<?php 
}





?>