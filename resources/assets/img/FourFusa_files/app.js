var sliders;
var year_array = ['0', '1','2','3-4','5-7','8-10','12-15','15+'];
var lang_array = ['None', 'Some', 'Fluent', 'Native'];

$(document).ready(function(){

	//jQuery time
	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches

	$(".next").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).closest('fieldset');
		next_fs = $(this).closest('fieldset').next();
		
		//activate next step on progressbar using the index of next_fs
		var next_ind = $("fieldset").index(next_fs);
		if(next_ind == $("fieldset").length-1){
			next_ind = 2;
		}else{
			next_ind = 1;
		}
		$("#progressbar li").eq(next_ind).addClass("active");
		
		//show the next fieldset
		
		//reset_sliders();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 400, 
			complete: function(){
				current_fs.hide();
				next_fs.fadeIn(400); 
				reset_sliders();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
/*		next_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				opacity = now;
				left = (now * 50)+"%";
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 400, 
			complete: function(){
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
*/

	});

	$(".previous").click(function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).closest('fieldset');
		previous_fs = $(this).closest('fieldset').prev();
		
		//de-activate current step on progressbar
		var curr_ind = $("fieldset").index(current_fs);
		if(curr_ind == $("fieldset").length-1){
			curr_ind = 2;
		}else{
			curr_ind = 1;
		}
		$("#progressbar li").eq(curr_ind).removeClass("active");
		
		//show the previous fieldset
		//previous_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 400, 
			complete: function(){
				current_fs.hide();

				previous_fs.fadeIn(400); 
				reset_sliders();
				animating = false;			
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});
 




	

	slider_years = $('.slider-year');
	slider_lang = $('.slider-lang');
	for (i = 0; i < slider_years.length; i++) { 
		slider_years[i] = $(slider_years[i]).slider({
			ticks: [0, 1, 2, 3,4,5,6,7],
			ticks_labels: year_array,
			ticks_snap_bounds: 30,
			tooltip: "hide"
		});
	}
	for (i = 0; i < slider_lang.length; i++) { 
		slider_lang[i] = $(slider_lang[i]).slider({
			ticks: [0, 1, 2, 3],
			ticks_labels: lang_array,
			ticks_snap_bounds: 30,
			tooltip: "hide"
		});
	}


	reset_sliders = function(){
		for (i = 0; i < slider_years.length; i++) {
			var val = slider_years[i].slider('getValue');
			slider_years[i].slider('setValue',val);
		}
		for (i = 0; i < slider_lang.length; i++) {
			var val = slider_lang[i].slider('getValue');
			slider_lang[i].slider('setValue',val);
		}		
	};
 

	$(".submit").click(function(){
		return false;
	});

	$('.slider-year').on('change', function(slideEvt) {	
		var id = $(this).attr('data-slider-id');
		var val = year_array[slideEvt.value.newValue];
		if(val == 1){
			val = val+' year';
		}else{
			val = val+' years';
		}
		$('[for="'+id+'"]').text(val);
	});


	$('.slider-lang').on('change', function(slideEvt) {
		var id = $(this).attr('data-slider-id');
		var val = lang_array[slideEvt.value.newValue];
		$('[for="'+id+'"]').text(val);
	});


	$('.check-responses label').on('click', function(){	
		var id = $(this).attr('for');
		if($('#'+id).is(":checked")){
			$(this).removeClass('active');
		}else{
			$(this).addClass('active');
		}
	});

	$('.check-responses-single label').on('click', function(){	
		var id = $(this).attr('for');
		var clicked = $(this);
		var wrapper = $(this).closest('check-responses-single');
		$('label', wrapper).removeClass('active');
		$(this).addClass('active');
	});

});
