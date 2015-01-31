<?php
/*
    Plugin Name: Creative Socials Free
    Plugin URI: http://codecanyon.net/user/Megatpl
    Description: plugin is add icons socials.
    Author: Hossam Hamed
    Version: 1.0
    Author URI: http://codecanyon.net/user/Megatpl
*/

require_once ( 'socials-panel.php' );
require_once ( 'socials-widgets.php' );

define ('SOCIAL_MEGA_PLUGIN' , 'Creative socials Icons' );
define ('SOCIAL_MEGA_PLUGIN_VER' , '1.0.0' );



$socials_default_data = Array(
	"mega_socials_setting"	=> Array(
        'social_title_widget'               => '1',
            'social_box_widget'             => '1',
            'social_networking'             => '1',
            'facebook_url'                  => '#facebook',
            'pinterest_url'                 => '#pinterest',
            'vimeo_url'                     => '#vimeo',
            'twitter_url'                   => '#twitter',
            'google_url'                    => '#google',
            'linkedin_url'                  => '#linkedin',
            'soundcloud_url'                => '#soundcloud',
            'youtube_url'                   => '#youtube',
            'flickr_url'                    => '#flickr',
            'instagram_url'                 => '#instagram',
            'dribbble_url'                  => '#dribbble',
            'rss_url'                       => '#rss',
            'show_facebook'                 => '1',
            'show_pinterest'                => '1',
            'show_vimeo'                    => '1',
            'show_twitter'                  => '1',
            'show_google'                   => '1',
            'show_linkedin'                 => '1',
            'show_soundcloud'               => '1',
            'show_youtube'                  => '1',
            'show_flickr'                   => '1',
            'show_instagram'                => '1',
            'show_dribbble'                 => '1',
            'show_rss'                      => '1',
            'width_icon'                    => '49',
            'height_icon'                   => '48',
            'border_radius'                 => '100',
            'size_icon'                     => '27',
            'background_color'              => '#545454',
            'background_color_hover'        => '#1c1c1c',
            'icons_color'                   => '#ffffff',
            'icons_color_hover'             => '#b5b5b5',
            'show_position'                 => '1',
            'icons_position'                => 'megatplsocial_left_middle',
            'icons_attachment_position'     => 'megatplsocial_absolute',
            'icons_color_position'          => 'megatplsocial_bgdark_white megatplsocial_colorize',
            'icons_radius_position'         => '1',
            'icons_spacer_position'         => '1',
            'icons_half_hidden_position'    => '1',
            'icons_shadow_position'         => '1',
            'icons_opacity_position'        => '1',
	),
    'mega_sort_social_url'	=> Array(
            '1'   => 'facebook',
            '2'   => 'pinterest',
            '3'   => 'vimeo',
            '5'   => 'twitter',
            '6'   => 'google',
            '7'   => 'linkedin',
            '8'   => 'soundcloud',
            '9'   => 'youtube',
            '10'  => 'flickr',
            '11'  => 'instagram',
            '12'  => 'dribbble',
            '15'  => 'rss',
    ),
    
);
/*

*/

/*-----------------------------------------------------------------------------------*/
# Store Defaults settings
/*-----------------------------------------------------------------------------------*/
if ( is_admin() && isset($_GET['activate'] ) && $pagenow == 'plugins.php' ) {
	global $socials_default_data;
	if( !get_option('mega_socials_setting') ){
		update_option('mega_socials_setting', serialize($socials_default_data));
        update_option( 'mega_socials_setting_var' , SOCIAL_MEGA_PLUGIN_VER );
        update_option( 'mega_socials_setting_name' , SOCIAL_MEGA_PLUGIN );
        return(true);
	}
}
/*-----------------------------------------------------------------------------------*/
# Get plugin's Settings
/*-----------------------------------------------------------------------------------*/
function socials_get_option($option){
	$mega_social_option = unserialize(get_option('mega_socials_setting'));
    if(isset($mega_social_option['mega_socials_setting'][$option])){
       return($mega_social_option['mega_socials_setting'][$option]);
    }
    else
    {
		return(false);
	}
}
/*-----------------------------------------------------------------------------------*/
# Get css 
/*-----------------------------------------------------------------------------------*/


function socials_css_font()
{
    wp_enqueue_style( 'socials-stylesheet' , plugins_url('assets/css/stylesheet.css' , __FILE__) ) ; 
}
add_action( 'wp_head', 'socials_css_font' ); 


function socials_fix()
{
    
    if(socials_get_option('show_position'))
    {
        
    ?>
            
        
        
        <div id="socialsider" class="
        megatplsocial 
         <?php echo socials_get_option('icons_position'); ?> 
         <?php echo socials_get_option('icons_attachment_position'); ?> 
         <?php echo socials_get_option('icons_color_position'); ?> 
         <?php if(socials_get_option('icons_radius_position')){ echo 'megatplsocial_radius';} ; ?> 
         <?php echo 'megatplsocial_spacer'.socials_get_option('icons_spacer_position'); ?> 
         <?php if(socials_get_option('icons_half_hidden_position')){ echo 'megatplsocial_hidden';} ; ?> 
         <?php if(socials_get_option('icons_shadow_position')){ echo 'socialsider_shadow';} ; ?> 
         <?php if(socials_get_option('icons_opacity_position')){ echo 'socialsider_opacity';} ; ?> 
        ">				
        <ul>
        <?php
    				$mega_social_option = unserialize(get_option('mega_socials_setting'));
                    $social_sort_items = $mega_social_option['mega_sort_social_url'];
                    foreach ( $social_sort_items as $social_item )
                    { 
                         $show = $mega_social_option['show_'.$social_item.''];
                         $url = $mega_social_option[''.$social_item.'_url'];
                         $show_position = $mega_social_option['show_'.$social_item.'_position'];
                         //
                        if($show)
                        {
                            if($show_position)
                            {
                            ?>
        					<li>
                            <a data-megatplsocial="<?php echo $social_item; ?>" href="<?php echo $url; ?>" title="<?php echo $social_item; ?>"></a>
                            </li>
    			<?php        }
                        }
                }
        ?>
        </ul>
        </div>
        <?php
    }
}
add_action( 'wp_footer', 'socials_fix' ); 
/*-----------------------------------------------------------------------------------*/
# Set plugin's shortcode
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'creative_shortcode' ) ) {
	function creative_shortcode($atts, $content = null){
	   
        $icons = explode(',',$atts['icons']);
        $content = '<ul class="shortcodesocial">';
        $mega_social_option = unserialize(get_option('mega_socials_setting'));
        $social_sort_items = $mega_social_option['mega_sort_social_url'];
        
        foreach ( $icons as $item )
        { 
            $url = $mega_social_option[$item.'_url'];
            $content .= '<li><a data-shortcodesocial="'.$item.'" href="'.$url.'" title="'.$item.'"></a></li>';
        }
        $content .= '<ul>'; 
		return $content;
	}
}
add_shortcode('CS', 'creative_shortcode');


?>