<?php
/*-----------------------------------------------------------------------------------*/
# Register main Scripts and Styles
/*-----------------------------------------------------------------------------------*/
function socials_admin_register() {
	if ( isset( $_GET['page'] ) && $_GET['page'] == 'socials' ){
        wp_enqueue_script( 'socials-checkbox', plugins_url('assets/js/checkbox.min.js' , __FILE__), array() , false , true );  
        wp_enqueue_script( 'socials-colorpicker', plugins_url('assets/js/colorpicker.js' , __FILE__), array() , false , true );  
        wp_enqueue_script( 'socials-custom', plugins_url('assets/js/custom.js' , __FILE__), array() , false , true );  
        wp_enqueue_script( 'socials-scripts', plugins_url('assets/js/scripts.js' , __FILE__), array() , false , true );  
        wp_enqueue_style( 'socials-main' , plugins_url('assets/css/main.css' , __FILE__) ) ; 
        wp_enqueue_style( 'socials-css' , plugins_url('assets/css/custome.css' , __FILE__) ) ; 
        wp_enqueue_style( 'socials-colorpicker' , plugins_url('assets/css/colorpicker.css' , __FILE__) ) ; 
        wp_enqueue_style( 'socials-jqueryui' , plugins_url('assets/css/jquery-ui.css' , __FILE__) ) ; 
   	 ?>
	<?php
	}
}
add_action( 'admin_print_styles', 'socials_admin_register' ); 
/*--------------------------------------------------------------*/
function socials_add_admin(){
	global $socials, $socials_options;
	if ( isset($_GET['page']) and $_GET['page'] == basename(__FILE__) ){
        if (isset($_GET['do']) and $_GET['do'] == 'submit' and $_POST){
            if($_POST['mega_socials_setting']['advanced_import']){
                $import = base64_decode($_POST['mega_socials_setting']['advanced_import']);
                update_option('mega_socials_setting', $import);
                echo '#message_success';
                die;
            }
            $var_post = $_POST;            
            $social_options['mega_sort_social_url'] = $var_post['mega_sort_social_url'];
            update_option( 'mega_socials_setting' , $social_options);
           // $var_post['mega_socials_setting']['advanced_import'] = '';
            //$var_post['mega_socials_setting']['advanced_export'] = '';
            foreach($var_post['mega_socials_setting'] as $k => $v){
                if(is_array($v)){
                    foreach($v as $lk => $lv){
                        $var_post[$k][$lk] = esc_sql($lv);
                    }
                }
                else
                {
                $var_post[$k] = esc_sql($v);
                }
            }
            $option_arr = serialize($var_post);
            update_option('mega_socials_setting', $option_arr);
            echo '#message_success';
            die;
			}
    }
    $icon = plugins_url('assets/images/settings.png' , __FILE__);
    add_menu_page( 'Socials Setting', 'Socials Setting', 'activate_plugins', 'socials', 'mega_socials_setting',$icon );
}
/*--------------------------------------------------------------*/
function mega_socials_setting(){
	global $socials_options;
	$i=0;
	echo '<div id="message_success" style="display:none;" class="notification fade"><span class="notification_icon"></span> Options Saved Successfully ! </div>';
	echo '<div id="message_error" style="display:none;" class="notification mg_alert fade"><span class="notification_icon"></span> Resetting work ! </div>';
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    require_once ("functions.php");
?>
<!--[if lt IE 9]>
<script type='text/javascript' src='<?php echo plugins_url('assets/js/html5.js' , __FILE__) ?>'></script>
<![endif]-->
<link rel='stylesheet' id='redux-elusive-icon-css'  href='<?php echo plugins_url('assets/elusive-icons/elusive-webfont.css?ver=1395491592' , __FILE__); ?>' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='redux-elusive-icon-ie7-css'  href='<?php echo plugins_url('assets/elusive-icons/elusive-webfont-ie7.css?ver=1395491592' , __FILE__); ?>' type='text/css' media='all' />
<![endif]-->
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#setting_form').submit(function(){
        var str = jQuery("form").serialize();
        jQuery.ajax({
            url: 'admin.php?page=socials-panel.php&do=submit',
            data: str,
            type: 'POST',
            success: function(data){
                if(data == '#message_success'){
                    jQuery('#message_success').show().delay(250).fadeIn(600).fadeOut(600,'easeInOutBack');
                }
                else
                {
                    jQuery('#message_error').show().delay(250).fadeIn(600).fadeOut(600,'easeInOutBack');
                }
            }
        });
    return false;
    });
});
</script>
<script type="text/javascript">	    
    jQuery(function() {
		jQuery( "#social-sortables-url" ).sortable({placeholder: "ui-state-shake"});
        jQuery( "#social-sortables" ).sortable({placeholder: "ui-state-shake"});
	});
</script>
<script type='text/javascript' src="<?php echo plugins_url('assets/js/jquery-ui.js' , __FILE__) ?>"></script>
<form name="" id="setting_form" action="admin.php?page=socials-panel.php&do=submit" method="post">

    <div id="upgrade">
    <a href="http://codecanyon.net/item/creative-socials/8366127" target="_blank">Upgrade To Creative socials Pro $14.</a> 
    </div>

    <div class="mg_panel">
        <div class="mg_header">
            <div class="name_plugin">Creative socials Icons <small>1.0</small></div>
            <div class="mg_logo">
                <div class=" logo">Mega Panel <span>1.0</span></div>
            </div>
            <input name="save" class="mg_save" type="submit" value="Save Changes" />
        </div>
	    <div class="mg_panel_tabs">
		    <ul>
                <?php
                    if(is_array($socials_options)){
                        $x = 0;
                        foreach($socials_options as $k => $v)
                    {
                        $x++;
                        if($x == 1){$active = ' active';}else{$active = '';}
                        if($k == 'seller_settings'){$icon = '<i class="el-icon-wrench-alt icon-large"></i>';}
                        elseif($k == 'socials_settings'){$icon = '<i class="el-icon-cog icon-large"></i>';}
                        elseif($k == 'style_settings'){$icon = '<i class="el-icon-tint icon-large"></i>';}
                        elseif($k == 'general_settings'){$icon = '<i class="el-icon-adjust-alt icon-large"></i>';}
                        elseif($k == 'social_networking'){$icon = '<i class="el-icon-star icon-large"></i>';}
                        elseif($k == 'profile_settings'){$icon = '<i class="el-icon-user icon-large"></i>';}
                        elseif($k == 'upgrade_to_pro'){$icon = '<i class="el-icon-shopping-cart"></i>';}
                        else{$icon = '<i class="el-icon-cog icon-large"></i>';}
                        //el-icon-adjust-alt
                        //el-icon-magic
                    ?>
                    <li class="<?php echo $active; ?> ">
                    <a href="#<?php echo $k; ?>" >
                    <?php echo $icon; ?>
                    <?php echo ucfirst(str_replace("_"," ",$k)); ?></a></li>
                    <?php
                    }
                    }
                ?>
		    </ul>
	    </div>
	    <div class="mg_panel_tabs_bg"></div>
        <div class="mg_panel_content">
<?php
    if(is_array($socials_options)){
        $list_sum = array();
        foreach($socials_options as $k => $v){
            $sub_item = 0;
            ?>
            <div  class="box_tabs_container" id="<?php echo $k; ?>">
                <h1><?php echo ucfirst(str_replace("_"," ",$k)); ?></h1>
                <div class="tab_content">
                    <?php
                        if(is_array($v)){
                            foreach($v as $key => $input){
                                if(isset($input['name']) and $input['name'] != ''){
                                get_admin_tab_social($input);
                                }
                                else
                                {
                                ?>
                                <div class="mg_item" id="home_page">
                                    <h3 class="hndle"><?php echo ucfirst(str_replace("_"," ",$key)); ?></h3>
                                    <?php
                                        foreach($input as $sub){
                                            get_admin_tab_social($sub,false);
                                        }
                                    ?>
                                </div>
                                <?php
                                }
                            }
                        }
                    ?>
                </div>
                <?php
                    unset($sub_item);
                ?>
            </div>
            <?php
        }
    }
?>
<div class="mg_footer">
    <input name="save" class="mg_save" type="submit" value="Save Changes" />
</div><!-- footer/-->
        </div>
</div>
</form>
<?php
}

add_action('admin_menu', 'socials_add_admin');
?>