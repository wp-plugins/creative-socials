<?php
add_action( 'widgets_init', 'init_socials_widget' );
function init_socials_widget() {
    register_widget( 'socials_icons_Widget' );
}

class socials_icons_Widget extends WP_Widget
{
    function socials_icons_Widget() {
		$widget_ops = array( 'classname' => 'socials_icons_Widget', 'description' => __('A widget that socials icons.', 'megatpl') );		
		$control_ops = array( 'width' => '', 'height' => '', 'id_base' => 'socials-icons' );		
		$this->WP_Widget( 'socials-icons', __('socials icons', 'megatpl'), $widget_ops, $control_ops );
	}
	function widget( $args, $instance ) {        
		extract( $args ); 
        //extract( $instance );
        $param = array();
		$title = apply_filters('widget_title', $instance['title'] );
        if(socials_get_option('social_box_widget'))
        {
            echo $before_widget;
        }
		if($title){
            //social_title_widget
            if(socials_get_option('social_title_widget'))
            {
                echo $before_title . $title . $after_title;
            }
        }
        $mega_social_option = unserialize(get_option('mega_socials_setting'));
        $social_sort_items = $mega_social_option['mega_sort_social_url'];
        if(socials_get_option('custom_style'))
        {
            $custom_style = '
            width:'.socials_get_option('width_icon').'px;
            height:'.socials_get_option('height_icon').'px;
            line-height:'.socials_get_option('height_icon').'px;
            border-radius:'.socials_get_option('border_radius').'%;
            -moz-border-radius:'.socials_get_option('border_radius').'%;
            -o-border-radius:'.socials_get_option('border_radius').'%;
            -webkit-border-radius:'.socials_get_option('border_radius').'%;
            ';
            
            $font_icon_size = 'font-size:'.socials_get_option('size_icon').'px;';
        }
        else
        {
            $custom_style = '
            border-radius:100%;
            -moz-border-radius:100%;
            -o-border-radius:100%;
            -webkit-border-radius:100%;
            width:32px;
            height:32px;
            line-height:32px;
            ';
            $font_icon_size = 'font-size: 20px;';
        }
        // custom_color
        if(socials_get_option('custom_color'))
        {
            $custom_color = '
            .widgetsocial.custom a::after { color:'.socials_get_option('icons_color').';background:'.socials_get_option('background_color').'; }
            .widgetsocial.custom a:hover::after { color:'.socials_get_option('icons_color_hover').';background:'.socials_get_option('background_color_hover').'; }
            ';
            $class = 'custom';
        }
        else
        {
            $custom_color = '';
            $class = 'def';
        }

        
        
        
        
  ?>
  <style type="text/css">
    .widgetsocial { width:100%; display:block; }
    .widgetsocial ul { list-style-type:none; margin:0; padding:0; }
    .widgetsocial ul li { <?php echo $custom_style; ?>display: inline-block;}
    .widgetsocial ul li  a {<?php echo $custom_style; ?>overflow:hidden; display:block; text-decoration:none; }
    .widgetsocial ul li  a::after {display:block;font-family:'socicon'; text-decoration:none;<?php echo $font_icon_size ?> vertical-align: middle;text-align: center;}
    

    <?php
    echo $custom_color;
    ?>
    

  </style>
  <div class="widgetsocial <?php echo $class;  ?>">
  <ul>
  <?php
    				foreach ( $social_sort_items as $social_item )
                    { 
                         $show = $mega_social_option['show_'.$social_item.''];
                         $url = $mega_social_option[''.$social_item.'_url'];
                        if($show)
                        {
                        ?>
    					<li>
                        <a data-widgetsocial="<?php echo $social_item; ?>" href="<?php echo $url; ?>" title="<?php echo $social_item; ?>"></a>
                        </li>
    			<?php 
                        }
                }
        ?>
        </ul>
        </div>
        <?php
        if(socials_get_option('social_box_widget'))
        {
            echo $after_widget;
        }
	} 
	function update( $new_instance, $old_instance ) {
	   $instance = $old_instance;
       $instance['title'] = strip_tags( $new_instance['title'] );
       return $instance;
	}
	function form( $instance ) {
        $defaults = array('title' => __('socials icons', 'megatpl'));
        $instance = wp_parse_args( (array) $instance, $defaults );
        ?>
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title : </label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" type="text" />
		</p>
        <?php
	}
}












?>