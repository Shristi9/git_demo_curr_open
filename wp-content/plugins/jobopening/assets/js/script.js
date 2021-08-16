	jQuery(document).ready(function(){


	jQuery(".cstm_drop").chosen();
	
	
   jQuery(".cstm_technology").chosen();

  jQuery(".cstm_experience").chosen();
   jQuery("._cstm_notice").chosen();
   jQuery("._cstm_branch").chosen();
  jQuery(".chosen-search-input").addClass("cstm_search");
jQuery(".chosen-search-input").attr("placeholder", "Type to search...");



jQuery("a.chosen-single span").addClass("cstm_shri");	


  
var max_fields      = 100; //maximum input boxes allowed
var wrapper         = jQuery(".input_fields_wrap"); //Fields wrapper
var add_button      = jQuery(".add_field_button"); //Add button ID
    
var x = 1; //initlal text box count
jQuery(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
        x++; //text box increment
        jQuery(wrapper).append('<div><input type="text" name="txtskill[]" /><a href="#" class="remove_field">Remove</a></div>'); //add input box
    }
});
    
jQuery(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); 
    jQuery(this).parent('div').remove(); x--;
});

var maxfields      = 100; //maximum input boxes allowed
var wraper         = jQuery(".input_wrap"); //Fields wrapper
var addbutton      = jQuery(".add_button"); //Add button ID
    
var x = 1; //initlal text box count
jQuery(addbutton).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < maxfields){ //max input box allowed
        x++; //text box increment
        jQuery(wraper).append('<div><input type="text" name="txtqualification[]" /><a href="#" class="remove_field_quali">Remove</a></div>'); //add input box
    }
});
    
jQuery(wraper).on("click",".remove_field_quali", function(e){ //user click on remove text
    e.preventDefault(); 
    jQuery(this).parent('div').remove(); x--;
});
});



