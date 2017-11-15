<?php
/*
Plugin Name: Simple Social Media
Plugin URI: http://colibrimedia.de/
Description: A Plugin to generate customized social media icons, which will link to your social media accounts.
Author: Bent Gebelein
Version: 1.1
Author URI: http://colibrimedia.de/
*/

// Add Menu Item "Social Media" to Admin Menu

function ssm_addSocialMenu() {
  add_menu_page('Social Media', 'Social Media', 10, __FILE__, 'ssm_social');
}

add_action('admin_menu', 'ssm_addSocialMenu');

// Enqueue plugin sytles

function ssm_enqueue_plugin_styles()
{
    // Register styles
    wp_register_style( 'plugin-style', plugins_url('social_media_plugin.css', __FILE__ ) );

    // Enqueue styles
    wp_enqueue_style( 'plugin-style' );
}

add_action( 'admin_print_styles', 'ssm_enqueue_plugin_styles' );

// Add Color Picker

function ssm_color_picker_assets($hook_suffix) {
    // $hook_suffix to apply a check for admin page.
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('social_media_plugin.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

add_action( 'admin_enqueue_scripts', 'ssm_color_picker_assets' );

// Define Plugin Page

if(!function_exists("ssm_social")){
  function ssm_social() {
    ?>
      <div class="wrap">
        <h2>Social Media Channels</h2>

        <p>
          Here you can add social media icons to your WordPress-page.<br>
          You can display them by including the <code>[social_media]</code> shortcode to any page, post or text-widget you like.
        </p>

        <!-- Define Social Media Channels -->

        <h4 class="social_info_text">
          1. Fill in the URLs
        </h4>
        <p>
          Simply visit your social media page and copy the URL you can find in the top bar of your browser.<br>
          Afterwards paste it into the matching input field here.
        </p>

        <form method="post" action="options.php">

          <?php settings_fields('social_media_channels'); ?>
          <?php do_settings_sections('social_media_channels'); ?>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/facebook.svg', __FILE__ ) ?>" height="20" width="20" alt="Facebook Logo" />
            <label class="social_title" for="facebook">Facebook:</label>
            <input class="social_url" type="url" id="facebook" name="facebook" value="<?php echo get_option('facebook'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/twitter.svg', __FILE__) ?>" height="20" width="20" alt="Twitter Logo" />
            <label class="social_title" for="twitter">Twitter:</label>
            <input class="social_url" type="url" id="twitter" name="twitter" value="<?php echo get_option('twitter'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/instagram.svg', __FILE__) ?>" height="20" width="20" alt="Instagram Logo" />
            <label class="social_title" for="instagram">Instagram:</label>
            <input class="social_url" type="url" id="instagram" name="instagram" value="<?php echo get_option('instagram'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/tumblr.svg', __FILE__) ?>" height="20" width="20" alt="Tumblr Logo" />
            <label class="social_title" for="tumblr">Tumblr:</label>
            <input class="social_url" type="url" id="tumblr" name="tumblr" value="<?php echo get_option('tumblr'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/youtube.svg', __FILE__) ?>" height="20" width="20" alt="Youtube Logo" />
            <label class="social_title" for="youtube">Youtube:</label>
            <input class="social_url" type="url" id="youtube" name="youtube" value="<?php echo get_option('youtube'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/linkedin.svg', __FILE__) ?>" height="20" width="20" alt="LinkedIn Logo" />
            <label class="social_title" for="linkedin">LinkedIn:</label>
            <input class="social_url" type="url" id="linkedin" name="linkedin" value="<?php echo get_option('linkedin'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/pinterest.svg', __FILE__) ?>" height="20" width="20" alt="Pinterest Logo" />
            <label class="social_title" for="pinterest">Pinterest:</label>
            <input class="social_url" type="url" id="pinterest" name="pinterest" value="<?php echo get_option('pinterest'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/vine.svg', __FILE__) ?>" height="20" width="20" alt="Vine Logo" />
            <label class="social_title" for="vine">Vine:</label>
            <input class="social_url" type="url" id="vine" name="vine" value="<?php echo get_option('vine'); ?>" />
          </div>
          
          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/googleplus.svg', __FILE__) ?>" height="20" width="20" alt="google+ Logo" />
            <label class="social_title" for="googleplus">Google+:</label>
            <input class="social_url" type="url" id="googleplus" name="googleplus" value="<?php echo get_option('googleplus'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/xing.svg', __FILE__) ?>" height="20" width="20" alt="Xing Logo" />
            <label class="social_title" for="xing">Xing:</label>
            <input class="social_url" type="url" id="xing" name="xing" value="<?php echo get_option('xing'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/github.svg', __FILE__) ?>" height="20" width="20" alt="Xing Logo" />
            <label class="social_title" for="github">Github:</label>
            <input class="social_url" type="url" id="github" name="github" value="<?php echo get_option('github'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/flickr.svg', __FILE__) ?>" height="20" width="20" alt="Xing Logo" />
            <label class="social_title" for="flickr">flickr:</label>
            <input class="social_url" type="url" id="flickr" name="flickr" value="<?php echo get_option('flickr'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/digg.svg', __FILE__) ?>" height="20" width="20" alt="Xing Logo" />
            <label class="social_title" for="digg">digg:</label>
            <input class="social_url" type="url" id="digg" name="digg" value="<?php echo get_option('digg'); ?>" />
          </div>

          <div class="social_channel">
            <img class="social_logo" src="<?php echo plugins_url( '/images/dribbble.svg', __FILE__) ?>" height="20" width="20" alt="Xing Logo" />
            <label class="social_title" for="dribbble">Dribbble:</label>
            <input class="social_url" type="url" id="dribbble" name="dribbble" value="<?php echo get_option('dribbble'); ?>" />
          </div>

          <!-- Choose Color -->

          <h4 class="social_info_text">
          2. Choose a color
          </h4>
          <p>
            You can choose a color for your icons to make them match your theme.
          </p>

          <input type="text" name="icon_color" class="wp-color-picker" value="<?php echo esc_attr( get_option('icon_color') ); ?>">

          <!-- Save changes -->

          <h4 class="social_info_text">
          3. Save changes.
          </h4>

          <p>
            Don't worry, you can still change your settings later.
          </p>

          <?php submit_button(); ?>
        </form>

        <p>This plug-in was developed by <strong>newscope GmbH</strong>.<br>
        Check out our website <a href="https://www.newscope.com/">www.newscope.com</a> for more fancy stuff.</p>

      </div>
    <?php
  }
}

add_action('admin_init', 'ssm_add_social_channel');

// Register entered URLs and Color in WP Database

if(!function_exists("ssm_add_social_channel")){
  function ssm_add_social_channel(){
    register_setting('social_media_channels', 'facebook');
    register_setting('social_media_channels', 'twitter');
    register_setting('social_media_channels', 'instagram');
    register_setting('social_media_channels', 'tumblr');
    register_setting('social_media_channels', 'youtube');
    register_setting('social_media_channels', 'linkedin');
    register_setting('social_media_channels', 'pinterest');
    register_setting('social_media_channels', 'vine');
    register_setting('social_media_channels', 'googleplus');
    register_setting('social_media_channels', 'xing');
    register_setting('social_media_channels', 'github');
    register_setting('social_media_channels', 'flickr');
    register_setting('social_media_channels', 'digg');
    register_setting('social_media_channels', 'dribbble');

    register_setting('social_media_channels', 'icon_color');
  }
}

// Define social media icons

function ssm_social_media_items($items){

  $opts = array(

    'facebook' => '<svg viewBox="0 0 49.6 49.6" width="30px" height="30px">
                    <path class="facebook_svg" d="M24.8,0C11.1,0,0,11.1,0,24.8s11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M31,25.7h-4
                      c0,6.5,0,14.4,0,14.4h-6c0,0,0-7.9,0-14.4h-2.8v-5.1H21v-3.3c0-2.4,1.1-6,6-6h4.4v4.9c0,0-2.7,0-3.2,0S27,16.5,27,17.6v3h4.6
                      L31,25.7z"/>
                  </svg>',

    'twitter' => '<svg viewBox="0 0 49.6 49.6" height="30px" width="30px">
                    <path class="twitter_svg" d="M24.8,0C11.1,0,0,11.1,0,24.8s11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M35.9,19.1
                      c0,0.2,0,0.5,0,0.7c0,7.6-5.7,16.3-16.3,16.3c-3.2,0-6.2-0.9-8.8-2.6c0.4,0.1,0.9,0.1,1.4,0.1c2.7,0,5.1-0.9,7.1-2.4
                      c-2.5,0-4.6-1.7-5.3-4c0.3,0.1,0.7,0.1,1.1,0.1c0.5,0,1-0.1,1.5-0.2C14,26.6,12,24.3,12,21.5c0,0,0,0,0-0.1c0.8,0.4,1.7,0.7,2.6,0.7
                      c-1.5-1-2.5-2.8-2.5-4.8c0-1,0.3-2,0.8-2.9c2.8,3.5,7,5.7,11.8,6c-0.1-0.4-0.1-0.9-0.1-1.3c0-3.2,2.6-5.7,5.7-5.7
                      c1.6,0,3.1,0.7,4.2,1.8c1.3-0.3,2.5-0.7,3.6-1.4c-0.4,1.3-1.3,2.5-2.5,3.2c1.2-0.1,2.3-0.4,3.3-0.9C38,17.3,37,18.3,35.9,19.1z"/>
                  </svg>',

    'instagram' => '<svg viewBox="0 0 49.6 49.6" height="30px" width="30px">
                      <path class="instagram_svg" d="M24.8,29.8c2.7,0,5-2.2,5-5c0-1.1-0.4-2.1-0.9-2.9c-0.9-1.3-2.4-2.1-4-2.1c-1.7,0-3.1,0.8-4,2.1
                        c-0.6,0.8-0.9,1.8-0.9,2.9C19.9,27.6,22.1,29.8,24.8,29.8z M35.7,18.7v-4.1V14h-0.6h-4.2v4.8L35.7,18.7z M24.8,0
                        C11.1,0,0,11.1,0,24.8s11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M38.9,21.9v11.6c0,3-2.4,5.5-5.5,5.5H16.2
                        c-3,0-5.5-2.4-5.5-5.5V21.9v-5.8c0-3,2.4-5.5,5.5-5.5h17.3c3,0,5.5,2.4,5.5,5.5L38.9,21.9L38.9,21.9z M32.5,24.8
                        c0,4.3-3.5,7.7-7.7,7.7s-7.7-3.5-7.7-7.7c0-1,0.2-2,0.6-2.9h-4.2v11.6c0,1.5,1.2,2.7,2.7,2.7h17.3c1.5,0,2.7-1.2,2.7-2.7V21.9H32
                        C32.3,22.8,32.5,23.8,32.5,24.8z"/>
                    </svg>',

    'tumblr' => '<svg viewBox="0 0 49.6 49.6" height="30px" width="30px">
                  <path class="tumblr_svg" d="M24.8,0C11.1,0,0,11.1,0,24.8s11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M33.2,36.7
                    c-1.2,0.5-2.2,0.9-3.1,1.1c-0.9,0.2-1.9,0.3-3,0.3c-1.2,0-2-0.2-2.9-0.5s-1.8-0.8-2.4-1.3c-0.7-0.6-1.1-1.2-1.4-1.8
                    c-0.3-0.7-0.4-1.6-0.4-2.8v-9.5h-3.7v-3.8c1.1-0.3,2.3-0.8,3-1.5c0.8-0.6,1.4-1.4,1.8-2.3c0.5-0.9,0.8-2,0.9-3.4h3.8v6.2H32v4.8
                    h-6.2v6.9c0,1.6,0,2.5,0.1,2.9c0.2,0.4,0.6,0.9,1,1.2c0.6,0.4,1.3,0.5,2,0.5c1.4,0,2.7-0.4,4.1-1.3L33.2,36.7L33.2,36.7L33.2,36.7z"
                    />
                </svg>',

    'youtube' => '<svg viewBox="0 0 97.8 97.8" height="30px" width="30px">
                    <path class="youtube_svg" d="M25.7,52.5h3.9v21h3.6v-21h4V49H25.7V52.5z M56.7,55c-1.2,0-2.3,0.7-3.4,2v-8H50v24.4h3.3v-1.8
                    c1.1,1.4,2.2,2,3.4,2c1.3,0,2.2-0.7,2.6-2c0.2-0.8,0.3-2,0.3-3.7v-7.2c0-1.7-0.1-2.9-0.3-3.7C58.9,55.7,58,55,56.7,55z M56.3,68.3
                    c0,1.6-0.5,2.5-1.4,2.5c-0.5,0-1.1-0.3-1.6-0.8V58.8c0.6-0.5,1.1-0.8,1.6-0.8c1,0,1.4,0.8,1.4,2.5V68.3z M43.8,69.2
                    c-0.7,1-1.4,1.5-2.1,1.5c-0.4,0-0.7-0.3-0.8-0.8c0-0.1,0-0.5,0-1.3V55.3h-3.3v14.4c0,1.3,0.1,2.2,0.3,2.7c0.3,0.9,1.1,1.4,2.1,1.4
                    c1.2,0,2.5-0.7,3.8-2.2v2h3.3V55.3h-3.3V69.2z M46.7,38.5c1.1,0,1.6-0.9,1.6-2.6v-7.7c0-1.7-0.5-2.5-1.6-2.5s-1.6,0.8-1.6,2.5v7.7
                    C45.1,37.6,45.6,38.5,46.7,38.5z M48.9,0C21.9,0,0,21.9,0,48.9s21.9,48.9,48.9,48.9s48.9-21.9,48.9-48.9S75.9,0,48.9,0z M54.3,22.9
                    h3.3v13.5c0,0.8,0,1.2,0,1.3c0.1,0.5,0.3,0.8,0.8,0.8c0.7,0,1.4-0.5,2.1-1.6v-14h3.3v18.4h-3.3v-2c-1.3,1.5-2.6,2.3-3.8,2.3
                    c-1.1,0-1.8-0.4-2.1-1.4c-0.2-0.6-0.3-1.4-0.3-2.7V22.9L54.3,22.9z M41.7,28.9c0-2,0.3-3.4,1-4.3c0.9-1.3,2.2-1.9,3.9-1.9
                    s3,0.6,3.9,1.9c0.7,0.9,1,2.4,1,4.3v6.4c0,2-0.3,3.4-1,4.3c-0.9,1.3-2.2,1.9-3.9,1.9s-3-0.6-3.9-1.9c-0.7-0.9-1-2.4-1-4.3V28.9z
                     M32.8,16.6l2.6,9.7l2.5-9.7h3.7l-4.4,14.7v10h-3.7v-10c-0.3-1.8-1.1-4.4-2.3-7.8c-0.8-2.3-1.6-4.6-2.4-6.9
                    C28.9,16.6,32.8,16.6,32.8,16.6z M75.2,75.1c-0.7,2.9-3,5-5.9,5.4c-6.8,0.8-13.6,0.8-20.4,0.8s-13.7,0-20.4-0.8
                    c-2.9-0.3-5.2-2.5-5.9-5.4c-1-4.1-1-8.6-1-12.9s0-8.8,1-12.9c0.7-2.9,3-5,5.9-5.4c6.8-0.8,13.6-0.8,20.4-0.8s13.7,0,20.4,0.8
                    c2.9,0.3,5.2,2.5,5.9,5.4c0.9,4.1,0.9,8.6,0.9,12.9S76.1,70.9,75.2,75.1z M67.2,55c-1.7,0-3,0.6-3.9,1.9c-0.7,0.9-1,2.3-1,4.3v6.4
                    c0,1.9,0.4,3.4,1.1,4.3c1,1.2,2.3,1.9,4,1.9s3.1-0.7,4-2c0.4-0.6,0.7-1.2,0.8-2c0-0.3,0.1-1.1,0.1-2.1v-0.5h-3.4
                    c0,1.3,0,2.1-0.1,2.2c-0.2,0.9-0.7,1.3-1.5,1.3c-1.1,0-1.7-0.8-1.7-2.5V65h6.6v-3.8c0-1.9-0.3-3.4-1-4.3C70.1,55.7,68.8,55,67.2,55z
                     M68.8,62.2h-3.3v-1.7c0-1.7,0.6-2.5,1.7-2.5s1.6,0.8,1.6,2.5C68.8,60.5,68.8,62.2,68.8,62.2z"/>
                  </svg>',

    'linkedin' => '<svg viewBox="0 0 49.6 49.6" height="30px" width="30px">
                    <path class="linkedin_svg" d="M29.4,21.3c-2.1,0-3.1,1.2-3.6,2v-1.7h-4c0.1,1.1,0,12,0,12h4v-6.7c0-0.4,0-0.7,0.1-1c0.3-0.7,0.9-1.5,2.1-1.5
                      c1.4,0,2,1.1,2,2.7v6.4h4l0,0v-6.9C34,23,32,21.3,29.4,21.3z M25.7,23.3L25.7,23.3L25.7,23.3L25.7,23.3z M15.5,21.6h4v12h-4V21.6z
                       M24.8,0C11.1,0,0,11.1,0,24.8s11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M38,36.1c0,1.1-0.9,1.9-2,1.9
                      H13.5c-1.1,0-2-0.9-2-1.9V13.2c0-1.1,0.9-1.9,2-1.9H36c1.1,0,2,0.9,2,1.9V36.1z M17.6,15.8c-1.4,0-2.3,0.9-2.3,2.1
                      c0,1.2,0.9,2.1,2.2,2.1l0,0c1.4,0,2.3-0.9,2.3-2.1C19.8,16.7,18.9,15.8,17.6,15.8z"/>
                  </svg>',

    'pinterest' => '<svg viewBox="0 0 533.4 533.4" height="30px" width="30px">
                      <path class="pinterest_svg" d="M266.7,0C119.4,0,0,119.4,0,266.7s119.4,266.7,266.7,266.7S533.4,414,533.4,266.7C533.3,119.4,413.9,0,266.7,0z
                         M292.5,356.3c-24.2-1.9-34.4-13.9-53.4-25.4c-10.4,54.8-23.2,107.3-61,134.7c-11.7-82.8,17.1-145,30.5-211
                        c-22.8-38.4,2.7-115.6,50.8-96.6c59.2,23.4-51.2,142.7,22.9,157.6c77.4,15.6,109-134.3,61-183C274,62.2,141.5,131,157.8,231.7
                        c4,24.6,29.4,32.1,10.2,66.1c-44.4-9.8-57.6-44.8-55.9-91.5c2.7-76.4,68.6-129.9,134.7-137.3c83.6-9.4,162,30.7,172.9,109.3
                        C431.8,267.1,381.9,363.2,292.5,356.3z"/>
                    </svg>',

    'vine' => '<svg viewBox="0 0 97.8 97.8" height="30px" width="30px">
                <path class="vine_svg" d="M48.9,0C21.9,0,0,21.9,0,48.9s21.9,48.9,48.9,48.9s48.9-21.9,48.9-48.9S75.9,0,48.9,0z M79.7,56.7
                  c-1,0.2-2,0.5-3,0.6c-1.7,0.3-3.4,0.5-5.2,0.5c-0.8,0-1.1,0.3-1.4,0.9c-4.2,8.2-9.7,15.4-16.6,21.6c-0.6,0.6-1.3,1.1-2,1.6
                  c-2.5,1.7-5,1.8-7.6,0.2c-2.2-1.4-4.1-3.2-5.9-5.1c-5.4-6-9.1-12.9-12-20.3c-4-10.1-6.3-20.6-7.8-31.3l-0.1-0.7H30V26
                  c0.4,3.4,1,6.9,1.7,10.3c2.5,12.4,6.9,24.1,14.8,34.1c1.6,2,1.6,2,3.2,0.2c3.9-4.3,7.1-9.1,9.8-14.2c0.3-0.6,0.3-0.9-0.3-1.3
                  c-6.6-3.9-10.1-9.8-11.4-17.2c-0.8-4.4-0.7-8.8,0.8-13.1c2.7-7.4,9.2-11,17-10.2c8.7,0.9,12.3,6.8,13,13.7c0.5,4.8-0.2,9.4-1.8,13.9
                  c-0.1,0.3-0.4,1.1-0.4,1.1s-0.7,0.1-1.1,0.1c-3.1,0.2-5.9-0.3-8.1-2.6c-0.3-0.3-0.8-0.8-0.8-0.8s0.2-0.7,0.3-1
                  c0.9-3.3,1.5-6.6,0.7-10.1c-0.6-2.7-2.1-4-4.4-3.9c-1.5,0.1-2.6,0.9-3.4,2.1c-0.8,1.4-1.1,2.9-1.2,4.4c-0.2,3.9,0.3,7.6,2.4,11
                  c3.5,5.6,8.8,7.4,15.1,6.8c1.3-0.1,2.6-0.3,3.8-0.7L79.7,56.7L79.7,56.7L79.7,56.7z"/>
              </svg>',

    'googleplus' => '<svg viewBox="0 0 220 220" height="30px" width="30px">
                      <path class="googleplus_svg" d="M110,0C49.2,0,0,49.2,0,110s49.2,110,110,110s110-49.2,110-110S170.8,0,110,0z M137.6,110
                        c0,27.6-22.5,50.1-50.1,50.1s-50-22.5-50-50.1S60,59.9,87.6,59.9c11.1,0,21.7,3.6,30.5,10.4l-11.6,15.1c-5.5-4.2-12-6.4-18.9-6.4
                        c-17.1,0-31,13.9-31,31s13.9,31,31,31c13.8,0,25.5-9,29.5-21.5H87.6v-19.1h50.1L137.6,110L137.6,110z M190.3,116.2H176v14.3h-12.5
                        v-14.3h-14.3v-12.5h14.3V89.4H176v14.3h14.3V116.2z"/>
                    </svg>',

    'xing' => '<svg viewBox="0 0 512 512" height="30px" width="30px">
                <path class="xing_svg" d="M256,0C114.6,0,0,114.6,0,256s114.6,256,256,256s256-114.6,256-256S397.4,0,256,0z M172.7,320.2h-46.3
                  c-2.8,0-4.9-1.2-6-3.1c-1.2-2-1.3-4.5,0-7.1l49.2-86.5c0.1-0.1,0.1-0.2,0-0.3l-31.3-54c-1.3-2.6-1.5-5.1-0.3-7.1
                  c1.2-1.9,3.5-2.9,6.3-2.9h46.3c7.1,0,10.6,4.6,12.9,8.7c0,0,31.6,55,31.8,55.3c-1.9,3.3-49.9,88.1-49.9,88.1
                  C183,315.5,179.7,320.2,172.7,320.2z M391.5,106.1L289.1,286.7c-0.1,0.1-0.1,0.2,0,0.3l65.2,118.9c1.3,2.6,1.3,5.2,0.1,7.1
                  c-1.2,1.9-3.4,2.9-6.1,2.9h-46.2c-7.1,0-10.6-4.7-12.9-8.8c0,0-65.6-120-65.7-120.3c3.3-5.8,103-182.1,103-182.1
                  c2.5-4.4,5.5-8.8,12.4-8.8h46.7c2.8,0,5,1,6.2,2.9C392.8,100.9,392.8,103.5,391.5,106.1z"/>
                </svg>',

    'Github' => '<svg viewBox="0 0 438.4 427.9" height="30px" width="30px">
                  <path class="github_svg" d="M409.1,109.2c-19.6-33.6-46.2-60.2-79.8-79.8S259.1,0,219.3,0s-76.5,9.8-110.1,29.4S49,75.6,29.4,109.2
                    S0,179.5,0,219.2c0,47.8,13.9,90.7,41.8,128.9s63.9,64.6,108.1,79.2c5.1,1,8.9,0.3,11.4-2s3.7-5.1,3.7-8.6c0-0.6,0-5.7-0.1-15.4
                    c-0.1-9.7-0.1-18.2-0.1-25.4l-6.6,1.1c-4.2,0.8-9.5,1.1-15.8,1c-6.4-0.1-13-0.8-19.8-2c-6.9-1.2-13.2-4.1-19.1-8.6
                    s-10.1-10.3-12.6-17.6l-2.9-6.6c-1.9-4.4-4.9-9.2-9-14.6c-4.1-5.3-8.2-8.9-12.4-10.8l-2-1.4c-1.3-1-2.6-2.1-3.7-3.4
                    c-1.1-1.3-2-2.7-2.6-4s-0.1-2.4,1.4-3.3s4.3-1.1,8.3-1.1l5.7,0.9c3.8,0.8,8.5,3,14.1,6.9c5.6,3.8,10.2,8.8,13.8,14.8
                    c4.4,7.8,9.7,13.8,15.8,17.8c6.2,4.1,12.4,6.1,18.7,6.1s11.7-0.5,16.3-1.4c4.6-1,8.8-2.4,12.8-4.3c1.7-12.8,6.4-22.6,14-29.4
                    c-10.8-1.1-20.6-2.9-29.3-5.1c-8.7-2.3-17.6-6-26.8-11.1s-16.9-11.5-23-19.1s-11.1-17.6-15-30s-5.9-26.6-5.9-42.8
                    c0-23,7.5-42.6,22.6-58.8c-7-17.3-6.4-36.7,2-58.2c5.5-1.7,13.7-0.4,24.6,3.9c10.9,4.3,18.8,8,23.8,11s9.1,5.6,12.1,7.7
                    c17.7-4.9,36-7.4,54.8-7.4s37.1,2.5,54.8,7.4l10.8-6.8c7.4-4.6,16.2-8.8,26.3-12.6c10.1-3.8,17.8-4.9,23.1-3.1
                    c8.6,21.5,9.3,40.9,2.3,58.2c15,16.2,22.6,35.8,22.6,58.8c0,16.2-2,30.5-5.9,43c-3.9,12.5-8.9,22.5-15.1,30s-13.9,13.9-23.1,19
                    s-18.2,8.9-26.8,11.1c-8.7,2.3-18.4,4-29.3,5.1c9.9,8.6,14.8,22.1,14.8,40.5v60.2c0,3.4,1.2,6.3,3.6,8.6c2.4,2.3,6.1,3,11.3,2
                    c44.2-14.7,80.2-41.1,108.1-79.2c27.9-38.2,41.8-81.1,41.8-128.9C438.5,179.5,428.7,142.8,409.1,109.2z"/>
                </svg>',

    'Flickr' => '<svg viewBox="0 0 508.6 508.6" height="30px" width="30px">
                  <path class="flickr_svg" d="M254.3,0C113.8,0,0,113.8,0,254.3s113.8,254.3,254.3,254.3s254.3-113.8,254.3-254.3
                    C508.5,113.8,394.7,0,254.3,0z M160.7,318c-35.6,0-64.5-28.9-64.5-64.5s28.9-64.5,64.5-64.5s64.5,28.9,64.5,64.5
                    S196.3,318,160.7,318z M348.5,318c-35.6,0-64.5-28.9-64.5-64.5s28.9-64.5,64.5-64.5s64.5,28.9,64.5,64.5S384.1,318,348.5,318z"/>
                </svg>',

    'Digg' => '<svg viewBox="0 0 97.8 97.8" height="30px" width="30px">
                <path class="digg_svg" d="M51.7,43.3h4.2v12.5h-4.2V43.3z M72.5,43.3h4.2v12.5h-4.2V43.3z M48.9,0C21.9,0,0,21.9,0,48.9
                  s21.9,48.9,48.9,48.9s48.9-21.9,48.9-48.9S75.9,0,48.9,0z M32.2,61.4h-18V37.8h11.1v-9.7h6.9V61.4z M41.9,61.4H35V37.8h6.9V61.4z
                   M41.9,35H35v-6.9h6.9V35z M62.7,69.7h-18v-5.5h11.1v-2.8H44.7V37.8h18V69.7z M65.5,69.7v-5.5h11.1v-2.8H65.5V37.8h18v31.9H65.5
                  L65.5,69.7z M21.1,43.3h4.2v12.5h-4.2V43.3z"/>
              </svg>',

    'Dribbble' => '<svg viewBox="0 0 49.6 49.6" height="30px" width="30px">
                    <path class="dribbble_svg" d="M24.1,20.5c-2.3-4.1-4.8-7.4-4.9-7.7c-3.7,1.8-6.5,5.2-7.4,9.3C12.1,22.1,17.7,22.2,24.1,20.5z M21.6,11.9
                      L21.6,11.9L21.6,11.9L21.6,11.9z M33.6,14.8c-2.3-2.1-5.4-3.3-8.8-3.3c-1.1,0-2.1,0.1-3.1,0.4c0.2,0.3,2.7,3.6,5,7.8
                      C31.7,17.8,33.6,14.9,33.6,14.8z M27.1,27c-7.9,2.7-10.4,8.3-10.4,8.3c2.3,1.8,5.1,2.8,8.2,2.8c1.8,0,3.6-0.4,5.2-1.1
                      C29.8,35.9,29.1,31.8,27.1,27C27.2,27,27.1,27,27.1,27z M25.7,24.9c0.2-0.1,0.4-0.1,0.5-0.2c-0.3-0.8-0.7-1.5-1.1-2.3
                      c-6.9,2.1-13.4,1.9-13.7,1.9c0,0.1,0,0.3,0,0.4c0,3.4,1.3,6.5,3.4,8.9l0,0C14.9,33.7,18.6,27.3,25.7,24.9z M24.8,0
                      C11.1,0,0,11.1,0,24.8s11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M40.1,28c-0.2,1-0.5,2-0.9,2.9
                      s-0.9,1.8-1.4,2.6c-0.6,0.8-1.2,1.6-1.9,2.3s-1.5,1.3-2.3,1.9c-0.8,0.6-1.7,1-2.6,1.4c-1,0.5-2,0.8-3,1s-2.1,0.3-3.1,0.3
                      c-1.1,0-2.1-0.1-3.1-0.3s-2-0.5-2.9-0.9s-1.8-0.9-2.6-1.4c-0.8-0.6-1.6-1.2-2.3-1.9s-1.3-1.5-1.9-2.3c-0.6-0.8-1-1.7-1.4-2.6
                      c-0.6-1-0.9-2-1.2-3c-0.2-1-0.3-2.1-0.3-3.1c0-1.1,0.1-2.1,0.3-3.1s0.5-2,0.9-2.9s0.9-1.8,1.4-2.6c0.6-0.8,1.2-1.6,1.9-2.3
                      s1.5-1.3,2.3-1.9c0.8-0.6,1.7-1,2.6-1.4s1.9-0.7,2.9-0.9s2.1-0.3,3.1-0.3c1.1,0,2.1,0.1,3.1,0.3s2,0.5,2.9,0.9s1.8,0.9,2.6,1.4
                      c0.8,0.6,1.6,1.2,2.3,1.9s1.3,1.5,1.9,2.3c0.6,0.8,1,1.7,1.4,2.6s0.7,1.9,0.9,2.9s0.3,2.1,0.3,3.1C40.4,25.9,40.3,26.9,40.1,28z
                       M29.7,26.4c1.7,4.8,2.5,8.7,2.6,9.5c3-2,5.1-5.2,5.7-8.9C37.7,26.9,34,25.7,29.7,26.4z M27.7,21.6c0.3,0.6,0.6,1.3,0.9,1.9
                      c0.1,0.2,0.2,0.5,0.3,0.7c4.6-0.6,9.1,0.4,9.3,0.4c0-3.2-1.2-6.1-3-8.3C35.1,16.4,33,19.5,27.7,21.6z"/>
                  </svg>',

  );

// Output Icons

  foreach ( $opts as $key => $value ) {
    $url = get_option($key);
    if (!empty($url)) {
      ob_start(); ?>
          <a href="<?php echo $url ?>" target="_blank" >
            <style>
              svg .facebook_svg,
              svg .twitter_svg,
              svg .instagram_svg,
              svg .tumblr_svg,
              svg .youtube_svg,
              svg .linkedin_svg,
              svg .pinterest_svg,
              svg .vine_svg,
              svg .googleplus_svg,
              svg .xing_svg,
              svg .github_svg,
              svg .flickr_svg,
              svg .digg_svg,
              svg .dribbble_svg{
                fill:<?php echo get_option( 'icon_color', false ); ?>;
              }
            </style>
            <?php echo $value ?>
          </a>
      <?php
      $items = $items . ob_get_clean();
    }
  }

  return $items;

}

// Display social-media-icons anywhere with shortcode = [social_media]

add_shortcode('social_media', 'ssm_social_media_items');

?>
