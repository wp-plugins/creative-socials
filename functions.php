<?php
/*----------------------------------------------------------------------*/
$socials_options["general_settings"]['social_widget'][] = array
(
		"name" 		=> __('Show Title Widget' , 'megatpl'),
		"label" 	=> __('Show Title Widget' , 'megatpl'),
		"id"    	=> "social_title_widget",
		"type"  	=> "checkbox"
);
$socials_options["general_settings"]['social_widget'][] = array
(
		"name" 		=> __('Show Box Widget' , 'megatpl'),
		"label" 	=> __('Show Box Widget' , 'megatpl'),
		"id"    	=> "social_box_widget",
		"type"  	=> "checkbox"
);
$socials_options["general_settings"]['drag_and_drop_to_sort_the_items'][] = array
(
		"name" 		=> __('' , 'megatpl'),
		"label" 	=> __('' , 'megatpl'),
		"id"    	=> "sorturl",
		"type"  	=> "drag_box_social",
);

/*----------------------------------------------------------------------*/

/*----------------------------------------------------------------------*/

$socials_options["social_networking"]['social_networking'][] = array
(
		"name" 		=> __('social networking' , 'megatpl'),
		"label" 	=> __('Show Social Networking' , 'megatpl'),
		"id"    	=> "social_networking",
		"type"  	=> "checkbox"
);




$networking = array(
    'facebook','pinterest','vimeo','twitter','google','linkedin','soundcloud','youtube',
    'flickr','instagram','dribbble','rss',
);

foreach($networking as $n)
{
    $socials_options["social_networking"]['social_'.$n][] = array
    (
		"name" 		=> __('social '.ucfirst($n) , 'megatpl'),
		"label" 	=> __('Show '.ucfirst($n) , 'megatpl'),
		"id"    	=> "show_".$n,
		"type"  	=> "checkbox"
    );

    $socials_options["social_networking"]['social_'.$n][] = array
    (
		"name" 		=> __(ucfirst($n) , 'megatpl'),
        "label" 	=> __(ucfirst($n) , 'megatpl'),
		"id"    	=> $n."_url",
		"type"  	=> "text",
        "icon"      => $n
    );
}



/*--------------------------------------------------------------*/

$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		=> __('Custom Style' , 'megatpl'),
		"label" 	=> __('Custom Style' , 'megatpl'),
		"id"    	=> "custom_style",
		"type"  	=> "checkbox"
);
$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		 => __('Width Icon' , 'megatpl'),
		"label" 	 => __('Width Icon' , 'megatpl'),
		"id"    	 => "width_icon",
		"type"  	 => "num_input",
        "min"        => '32',
        "max"        => '52',
        "type_input" => 'px',
);
$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		 => __('Height Icon' , 'megatpl'),
		"label" 	 => __('Height Icon' , 'megatpl'),
		"id"    	 => "height_icon",
		"type"  	 => "num_input",
        "min"        => '32',
        "max"        => '52',
        "type_input" => 'px',
);
$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		 => __('border radius' , 'megatpl'),
		"label" 	 => __('border radius' , 'megatpl'),
		"id"    	 => "border_radius",
		"type"  	 => "num_input",
        "min"        => '0',
        "max"        => '100',
        "type_input" => '%',
);

$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		 => __('Size Icon' , 'megatpl'),
		"label" 	 => __('Size Icon' , 'megatpl'),
		"id"    	 => "size_icon",
        "type"  	 => "num_input",
        "min"        => '16',
        "max"        => '32',
        "type_input" => 'px',
);


$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		=> __('Custom Color' , 'megatpl'),
		"label" 	=> __('Custom Color' , 'megatpl'),
		"id"    	=> "custom_color",
		"type"  	=> "checkbox"
);

$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		=> __('Background Color' , 'megatpl'),
		"label" 	=> __('Background Color' , 'megatpl'),
		"id"    	=> "background_color",
		"type"  	=> "color"
);
$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		=> __('Background Color Hover' , 'megatpl'),
		"label" 	=> __('Background Color Hover' , 'megatpl'),
		"id"    	=> "background_color_hover",
		"type"  	=> "color"
);

$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		=> __('Icons Color' , 'megatpl'),
		"label" 	=> __('Icons Color' , 'megatpl'),
		"id"    	=> "icons_color",
		"type"  	=> "color"
);
$socials_options["style_settings"]['social_icons'][] = array
(
		"name" 		=> __('Icons Color Hover' , 'megatpl'),
		"label" 	=> __('Icons Color Hover' , 'megatpl'),
		"id"    	=> "icons_color_hover",
		"type"  	=> "color"
);




$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Show Position' , 'megatpl'),
		"label" 	=> __('Show Position' , 'megatpl'),
		"id"    	=> "show_position",
		"type"  	=> "checkbox"
);

$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Position' , 'megatpl'),
		"label" 	=> __('Position' , 'megatpl'),
		"id"    	=> "icons_position",
		"type"  	=> "select",
        "list"      => array(
                        'megatplsocial_left_top' => 'Left Top',
    					'megatplsocial_left_middle' => 'Left Middle',
    					'megatplsocial_left_bottom' => 'Left Bottom',
    					'megatplsocial_right_top' => 'Right top',
    					'megatplsocial_right_middle' => 'Right Middle',
    					'megatplsocial_right_bottom' => 'Right Bottom',
                    )
);

$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Attachment' , 'megatpl'),
		"label" 	=> __('Attachment' , 'megatpl'),
		"id"    	=> "icons_attachment_position",
		"type"  	=> "select",
        "list"      => array(
                        'megatplsocial_fixed' => 'Fixed (beware too many elements)',
                        'megatplsocial_absolute' => 'Absolute',
                    )
        
);
$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Colors' , 'megatpl'),
		"label" 	=> __('Colors' , 'megatpl'),
		"id"    	=> "icons_color_position",
		"type"  	=> "select",
        "list"      => array(
                        'megatplsocial_bgdark_white' => 'Dark background, white font',
                        'megatplsocial_bgdark_white megatplsocial_colorize' => 'Dark background, white font + Color hover',
                        'megatplsocial_bgwhite_dark' => 'White background, dark font',
                        'megatplsocial_bgwhite_dark megatplsocial_colorize' => 'White background, dark font + Color hover',
                        'megatplsocial_bgwhite_color' => 'White background, color font',
                        'megatplsocial_bgcolor_white' => 'Color background, white font',
                    ),
);

/*



*/
$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Edge radius' , 'megatpl'),
		"label" 	=> __('Edge radius' , 'megatpl'),
		"id"    	=> "icons_radius_position",
		"type"  	=> "checkbox"
);
$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('spacer' , 'megatpl'),
		"label" 	=> __('spacer' , 'megatpl'),
		"id"    	=> "icons_spacer_position",
		"type"  	 => "num_input",
        "min"        => '0',
        "max"        => '10',
        "type_input" => 'px',
);
$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Shadow' , 'megatpl'),
		"label" 	=> __('Shadow' , 'megatpl'),
		"id"    	=> "icons_shadow_position",
		"type"  	=> "checkbox"
);
$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Opacity on non-hover' , 'megatpl'),
		"label" 	=> __('Opacity on non-hover' , 'megatpl'),
		"id"    	=> "icons_opacity_position",
		"type"  	=> "checkbox"
);
$socials_options["position_settings"]['social_position'][] = array
(
		"name" 		=> __('Half - hidden' , 'megatpl'),
		"label" 	=> __('Half - hidden' , 'megatpl'),
		"id"    	=> "icons_half_hidden_position",
		"type"  	=> "checkbox"
);
foreach($networking as $n)
{
    $socials_options["position_settings"]['social_Icon'][] = array
    (
		"name" 		=> __('social '.ucfirst($n) , 'megatpl'),
		"label" 	=> __('Show '.ucfirst($n) , 'megatpl'),
		"id"    	=> "show_".$n."_position",
		"type"  	=> "checkbox",
        "icon"      => $n,
    );
}


//
$socials_options["upgrade_to_pro"]['upgrade_to_creative_socials_pro'][] = array
(
		"type"  => "upgrade"
);

/// Upgrade To Pro

/*--------------------------------------------------------------*/

class option_layout_social{
    



function drag_box_social($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    
    
    $social_sort_items = $mega_social_option['mega_sort_social_url'];
    
    if(empty( $social_sort_items ))
    {
        $social_sort_items = array('facebook','pinterest','vimeo','twitter','google','linkedin','soundcloud','youtube','flickr','instagram','dribbble','rss');
    }

    ?>
    <?php
    if($head == true)
    {
        ?>

        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } 
    ?>

    <div class="postbox">
    	<div class="inside">
    		<ul id="social-sortables-url">
    			<?php
                
                
    				foreach ( $social_sort_items as $social_item )
                    { 
                        $show = $mega_social_option['show_'.$social_item.''];
                        if($show)
                        {
                           ?>
    					<li class="social-sort-item ">
                        <i class="megatplsocial" data-megatplsocial="<?php echo $social_item; ?>"></i>
                        <strong><?php echo $social_item; ?></strong>
                        <input type="hidden" name="mega_sort_social_url[]" class="code" id="mega_sort_social_url[]" value="<?php echo $social_item; ?>" />
                        </li>
    			<?php 
                        }
                        else
                        {
                            ?>
    					
                       
                        <input type="hidden" name="mega_sort_social_url[]" class="code" id="mega_sort_social_url[]" value="<?php echo $social_item; ?>" />
                        
                       
    			<?php 
                       }

                    } 
                
                ?>
    		</ul>
    		<div class="clear"></div>
    	</div>
    </div>

    <?php if($head == true)
{
    ?>
    </div>
<?php
}
}


function text_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>

        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" >
        <?php 
        if($input['icon'])
        {?>
            <i class="megatplsocial" data-megatplsocial="<?php echo $input['icon']; ?>"></i>
        <?php 
        }
         ?>
         
         <?php 
        if($input['icon2'])
        {?>
            <i class="social-icons2 <?php echo $input['icon2']; ?>"></i>
        <?php 
        }
         ?>
        <span class="label"><?php echo $input['label']; ?></span>
        <input id="<?php echo $input['id']; ?>" class="<?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" type="text" value="<?php echo stripslashes($mega_social_option['mega_socials_setting'][$input['id']]) ;?>" name="mega_socials_setting[<?php echo $input['id']; ?>]" />
        <span class="pp-mglink"><?php echo $input['mglink']; ?></span>
    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}
}


function num_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        <div class="mg_item postbox" >
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>">
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

    <div class="mg-uislider">
        <div class="slider_num slide_num_f" id="<?php echo $input['id']; ?>" ></div>
        <input id="<?php echo $input['id']; ?>_input" class="input_num_f" type="text" name="mega_socials_setting[<?php echo $input['id']; ?>]" value="<?php echo (int)$mega_social_option['mega_socials_setting'][$input['id']];?>" readonly="readonly" style="margin-left: 10px;" /> <?php echo $input['type_input']; ?>
        <span class="unitf"><?php echo $input['unit']; ?><span>
	</div>
		  	    <script>
                jQuery(document).ready(function() {
                    jQuery("#<?php echo $input['id']; ?>").slider({
                        range: "min",
                        min: <?php echo $input['min']; ?>,
                        max: <?php echo $input['max']; ?>,
                        value: <?php if($mega_social_option['mega_socials_setting'][$input['id']] != '') { echo $mega_social_option['mega_socials_setting'][$input['id']]; }else{ echo 0;} ?>,
                        slide: function(event, ui) {
                            jQuery('#'+jQuery(this).attr('id')+'_input').val(ui.value);
                        }
                    });
                });
            </script>

    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}
}








function color_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" >
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

        <div id="<?php echo $input['id']; ?>" class="colorSelector">
            <div style="background-color:<?php echo $mega_social_option['mega_socials_setting'][$input['id']];?>;"></div>
        </div>
        <input id="<?php echo $input['id']; ?>_input" class="input_numb color_input" type="text" name="mega_socials_setting[<?php echo $input['id']; ?>]" value="<?php echo $mega_social_option['mega_socials_setting'][$input['id']];?>">
    </div><!--//End item-->

    <script type="text/javascript">
        jQuery(document).ready(function()
        {
            jQuery('#<?php echo $input['id']; ?>').ColorPicker
            ({
                color: '#FFFFFF',
                onShow: function (colpkr) {
                    jQuery(colpkr).fadeIn(500);
                    return false;
                },
                onHide: function (colpkr) {
                    jQuery(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function (hsb, hex, rgb)
                {
                    jQuery('#<?php echo $input['id']; ?> div').css('backgroundColor', '#' + hex);
                    jQuery('#<?php echo $input['id']; ?>'+'_input').val('#' + hex);
                }
            });


        });
    </script>

    <?php if($head == true)
{
    ?>
    </div>
<?php
}
}



function textarea_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    }
    ?>

    <div class="mg_option_item" >
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

        <?php if($input['id'] != 'advanced_export')
        {
            ?>
            <textarea id="<?php echo $input['id']; ?>" class="<?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" name="mega_socials_setting[<?php echo $input['id']; ?>]" rows="7"><?php if($input['id'] != 'advanced_export'){ echo stripslashes($mega_social_option['mega_socials_setting'][$input['id']]); } else { echo base64_encode(get_option('mega_socials_setting')); }?></textarea>
        <?php
        }
        else
        {
            echo '<div class="textarea textarea_full " id="'.$input['id'].'">'.base64_encode(get_option('mega_socials_setting')).'</div>';
        }
        ?>

        <?php
        if($input['id'] == 'advanced_export')
        {
            ?>
            <button type="button" class="go" onclick="window.location='admin.php?page=options.php&do=download';">Download</button>
        <?php
        }
        ?>

    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}
}


function number_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item" id="<?php echo $input['id']; ?>_item">
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

        <input  type="text" id="<?php echo $input['id']; ?>" class="input_numb <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" name="mega_socials_setting[<?php echo $input['id']; ?>]"  value="<?php echo $mega_social_option['mega_socials_setting'][$input['id']];?>"  class="input_numb" />
    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}
}


function checkbox_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item" >
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

        <input type="checkbox" id="<?php echo $input['id']; ?>" <?php if(isset($mega_social_option['mega_socials_setting'][$input['id']]) and $mega_social_option['mega_socials_setting'][$input['id']] == 1){echo ' checked="checked"';}?> class="<?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" name="mega_socials_setting[<?php echo $input['id']; ?>]"  value="1" />
        <?php 
        if($input['icon'])
        {?>
            <i class="megatplsocial" data-megatplsocial="<?php echo $input['icon']; ?>"></i>
        <?php 
        }
         ?>
    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}

}


function radio_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>">
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

        <div class="check_radio_content">
            <?php foreach($input['list'] as $r)
            {
                ?>
                <label class="check_radio"><input id="<?php echo $input['id']; ?>_<?php echo $r; ?>" class="r_<?php echo $input['id'];?> <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" <?php if($mega_social_option['mega_socials_setting'][$input['id']] == $r){echo 'checked="checked"';}?> name="mega_socials_setting[<?php echo $input['id']; ?>]" type="radio" value="<?php echo $r; ?>"><?php echo $r; ?></label>
            <?php
            }

            if(isset($input['js']))
            {
                echo $input['js'];
            }
            ?>
        </div>
    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}

}



function radio_bgtype_input($input,$head = true)
{
    $mega_social_option = unserialize(get_option('mega_socials_setting'));
    if($head == true)
    {
        ?>
        
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>">
        <span class="label"><?php echo $input['label']; ?></span>

        <div class="check_radio_content">

            <?php foreach ($input['options'] as $key => $option) { ?>
                <label class="check_radio">
                <input name="mega_socials_setting[<?php echo $input['id']; ?>]" id="<?php echo $input['id']; ?>" type="radio" value="<?php echo $key ?>" <?php if ( socials_get_option( $input['id'] ) == $key) { echo ' checked="checked"' ; } ?> /> 
                
                <?php echo $option; ?>
                
                </label>
            <?php } ?>

        </div>
    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}

}



function select_input($input,$head = true)
{
    global $wp_cats;
    $mega_social_option = unserialize(get_option('mega_socials_setting'));

    if($head == true)
    {
        ?>
        <div class="mg_item postbox">
        <h3 class="hndle"><?php echo $input['name']; ?></h3>
    <?php
    } ?>

    <div class="mg_option_item <?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" id="<?php echo $input['id']; ?>">
        <?php if ( !empty($input['tip']) && $input['tip'] != ' ' ) { ?><a class="mg_help" title="<?php echo $input['tip']; ?>"></a><?php } ?>
        <span class="label"><?php echo $input['label']; ?></span>

        <select  class="<?php $class_name = (isset($input['class'])) ? $input['class'] : ""; echo $class_name; ?>" name="mega_socials_setting[<?php echo $input['id']; ?>]" >
            <?php if(is_array($input['list']))
            {
                foreach($input['list'] as $key => $r)
                {
                    ?>
                    <option value="<?php echo $key;?>" <?php if($mega_social_option['mega_socials_setting'][$input['id']] == $key){echo 'selected="selected"';}?> ><?php echo $r;?></option>
                <?php
                }
            }
            elseif($input['list'] == 'cats' and is_array($wp_cats))
            {
                ?>
                <option value="" <?php if($mega_social_option['mega_socials_setting'][$input['id']] == ''){echo 'selected="selected"';}?> >Select Category ..</option>
                <?php foreach($wp_cats as $c_id => $c_name )
            {
                ?>
                <option value="<?php echo $c_id;?>" <?php if($mega_social_option['mega_socials_setting'][$input['id']] == $c_id){echo 'selected="selected"';}?> ><?php echo $c_name;?></option>
            <?php
            }
            } ?>
        </select>
    </div><!--//End item-->

    <?php if($head == true)
{
    ?>
    </div>
<?php
}

}

//
function upgrade()
{
    ?>
<div class="mg_item postbox box-features">
    <div style="text-align: right;">
        <a href="http://codecanyon.net/item/creative-socials/8366127" target="_blank" class="button-primary" >LEARN MORE</a>
        <a href="http://codecanyon.net/item/creative-socials/8366127" target="_blank" class="button-primary">Buy Now</a>
    </div>

    <div class="clear"><br /></div>
    <h2 id="item-features">Features:</h2>
    <ul class="ul-features">
        <li>- It Includes 62 Social Icons.</li>
        <li>- Social Icons Profile Users.</li>
        <li>- web Social Icons In ShortCode.</li>
        <li>- Profile Social Icons In ShortCode.</li>
        <li>- Drag And Drop.</li>
        <li>- Widgets Social Icons.</li>
        <li>- Custom Position.</li>
        <li>- Very Easy To Use.</li>
        <li>- Easy Control Panel.</li>
        <li>- Control the dimensions of icons and colors and arranged </li>
        <li>- Socials Icons.
            <div class="clear"><br /></div>
            <i class="megatplsocial" data-megatplsocial="twitter"></i>
            <i class="megatplsocial" data-megatplsocial="facebook"></i>
            <i class="megatplsocial" data-megatplsocial="google"></i>
            <i class="megatplsocial" data-megatplsocial="pinterest"></i>
            <i class="megatplsocial" data-megatplsocial="foursquare"></i>
            <i class="megatplsocial" data-megatplsocial="yahoo"></i>
            <i class="megatplsocial" data-megatplsocial="skype"></i>
            <i class="megatplsocial" data-megatplsocial="yelp"></i>
            <i class="megatplsocial" data-megatplsocial="feedburner"></i>
            <i class="megatplsocial" data-megatplsocial="linkedin"></i>
            <i class="megatplsocial" data-megatplsocial="viadeo"></i>
            <i class="megatplsocial" data-megatplsocial="xing"></i>
            <i class="megatplsocial" data-megatplsocial="myspace"></i>
            <i class="megatplsocial" data-megatplsocial="soundcloud"></i>
            <i class="megatplsocial" data-megatplsocial="spotify"></i>
            <i class="megatplsocial" data-megatplsocial="grooveshark"></i>
            <i class="megatplsocial" data-megatplsocial="lastfm"></i>
            <i class="megatplsocial" data-megatplsocial="youtube"></i>
            <i class="megatplsocial" data-megatplsocial="vimeo"></i>
            <i class="megatplsocial" data-megatplsocial="dailymotion"></i>
            <i class="megatplsocial" data-megatplsocial="vine"></i>
            <i class="megatplsocial" data-megatplsocial="flickr"></i>
            <i class="megatplsocial" data-megatplsocial="500px"></i>
            <i class="megatplsocial" data-megatplsocial="instagram"></i>
            <i class="megatplsocial" data-megatplsocial="wordpress"></i>
            <i class="megatplsocial" data-megatplsocial="tumblr"></i>
            <i class="megatplsocial" data-megatplsocial="blogger"></i>
            <i class="megatplsocial" data-megatplsocial="technorati"></i>
            <i class="megatplsocial" data-megatplsocial="reddit"></i>
            <i class="megatplsocial" data-megatplsocial="dribbble"></i>
            <i class="megatplsocial" data-megatplsocial="stumbleupon"></i>
            <i class="megatplsocial" data-megatplsocial="digg"></i>
            <i class="megatplsocial" data-megatplsocial="envato"></i>
            <i class="megatplsocial" data-megatplsocial="behance"></i>
            <i class="megatplsocial" data-megatplsocial="delicious"></i>
            <i class="megatplsocial" data-megatplsocial="deviantart"></i>
            <i class="megatplsocial" data-megatplsocial="forrst"></i>
            <i class="megatplsocial" data-megatplsocial="play"></i>
            <i class="megatplsocial" data-megatplsocial="zerply"></i>
            <i class="megatplsocial" data-megatplsocial="wikipedia"></i>
            <i class="megatplsocial" data-megatplsocial="apple"></i>
            <i class="megatplsocial" data-megatplsocial="flattr"></i>
            <i class="megatplsocial" data-megatplsocial="github"></i>
            <i class="megatplsocial" data-megatplsocial="chimein"></i>
            <i class="megatplsocial" data-megatplsocial="friendfeed"></i>
            <i class="megatplsocial" data-megatplsocial="newsvine"></i>
            <i class="megatplsocial" data-megatplsocial="identica"></i>
            <i class="megatplsocial" data-megatplsocial="bebo"></i>
            <i class="megatplsocial" data-megatplsocial="zynga"></i>
            <i class="megatplsocial" data-megatplsocial="steam"></i>
            <i class="megatplsocial" data-megatplsocial="xbox"></i>
            <i class="megatplsocial" data-megatplsocial="windows"></i>
            <i class="megatplsocial" data-megatplsocial="outlook"></i>
            <i class="megatplsocial" data-megatplsocial="coderwall"></i>
            <i class="megatplsocial" data-megatplsocial="tripadvisor"></i>
            <i class="megatplsocial" data-megatplsocial="netcodes"></i>
            <i class="megatplsocial" data-megatplsocial="easid"></i>
            <i class="megatplsocial" data-megatplsocial="lanyrd"></i>
            <i class="megatplsocial" data-megatplsocial="slideshare"></i>
            <i class="megatplsocial" data-megatplsocial="buffer"></i>
            <i class="megatplsocial" data-megatplsocial="rss"></i>
            <i class="megatplsocial" data-megatplsocial="vkontakte"></i>
            <i class="megatplsocial" data-megatplsocial="disqus"></i>
            <div class="clear"></div>
        </li>
        </ul>

</div>
<?php 
}

}

function get_admin_tab_social($input,$head = true)
{
    $socials = new option_layout_social();
    
    switch($input['type'])
    {
        case"text":
            $socials->text_input($input,$head);
            break;
        case"ptext":
            $socials->ptext_input($input,$head);
            break;
        case"color":
            $socials->color_input($input,$head);
            break;
        case"number":
            $socials->number_input($input,$head);
            break;
        case"checkbox":
            $socials->checkbox_input($input,$head);
            break;
        case"radio":
            $socials->radio_input($input,$head);
            break;
        case"radio_bgtype":
            $socials->radio_bgtype_input($input,$head);
            break;
        case"select":
            $socials->select_input($input,$head);
            break;
        case"drag_box_social":
            $socials->drag_box_social($input,$head);
            break;
        case"drag_box_counter":
            $socials->drag_box_counter($input,$head);
            break;
        case"num_input":
            $socials->num_input($input,$head);
            break;
        case"upgrade":
            $socials->upgrade();
        break;   
            
            
        //
    }
}
?>