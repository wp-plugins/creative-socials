/*
Plugin Name: Creative Products Envato API
Plugin URI: http://megatpl.com
Description: Allows you to show Interstitial Ads on any WordPress site
Version: 1.0
Author: Megatpl
Author URI: http://megatpl.com/
*/
jQuery(document).ready(function() {	
	jQuery(".box_tabs_container").hide();
	jQuery(".mg_panel_tabs ul li:first").addClass("active").show();
	jQuery(".box_tabs_container:first").show(); 
	
	jQuery(".mg_panel_tabs ul li").click(function() {
		jQuery(".mg_panel_tabs ul li").removeClass("active");
		jQuery(this).addClass("active");
		jQuery(".box_tabs_container").hide();
		var activeTab = jQuery(this).find("a").attr("href");
		jQuery(activeTab).fadeIn();
		return false;
	});
	// End tabs
	jQuery('.mg_option_item a , .titlebuilder a, .navbuilder a').tipsy({
		fade: true, 
		gravity: 's'
	});
	//tooltip
	jQuery('.mg_panel input:checkbox:not([safari]), .mg_items_panel input:checkbox:not([safari]), .check_radio_content input:radio:not([safari])  , .rwmb-input input:checkbox:not([safari])').checkbox();
	jQuery('.mg_panel input[safari]:checkbox, .mg_items_panel input[safari]:checkbox, .check_radio_content input[safari]:radio  , .rwmb-input input[safari]:checkbox').checkbox({cls:'jquery-safari-checkbox'});
	jQuery('.mg_panel :checkbox, .mg_items_panel :checkbox, .check_radio_content :radio, #review .rwmb-input :radio , #review .rwmb-input :checkbox').checkbox();
	//checkbox
    
    
    jQuery(".box_layout_list li").live("click", function()
	{
		 jQuery(this).parent('ol').find('li').removeClass('selectd');
		 jQuery(this).addClass('selectd');

		 //jQuery(".box_layout_list li input").removeAttr('checked');
		 jQuery(this).parent('ol').find('input').removeAttr('checked');
		 jQuery(this).find('input').attr('checked','checked');
		 return false;
	});

	jQuery(".box_layout_list li a").live("click", function(event)
	{
		event.preventDefault(event);
	});
    
    
});



/*
<script type="text/javascript">
        jQuery(document).ready(function () {
            
           jQuery("img.products-img").mouseenter(function(e){
            id = jQuery(this).attr("data-src-iditem");
			x = e.pageX - jQuery(this).offset().left;
			y = e.pageY - jQuery(this).offset().top;
            jQuery("div#products-tooltip-"+id).css({"top": y + 30,"left": x + 80,"display":"block","z-index":"9999"});
			jQuery("div#products-tooltip-"+id).show();
			
    		
    		});
            
            jQuery("img.products-img").mouseout(function(e){
            id = jQuery(this).attr("data-src-iditem");
			jQuery("div#products-tooltip-"+id).hide();
			
    		
    		});
            
        	});
	    </script>
        <div class="products-tooltip" id="products-tooltip-'.$item['id'].'">
    			<img src="'.$item['live_preview_url'].'" alt="" width="590" height="300" />
    			<span class="overlay"></span>
    		</div> 
        */