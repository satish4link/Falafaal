$(document).ready(function(){
	$(".menu-trigger").click(function(){
		$(".side-menu").slideToggle('slow', function(){
			$(this).toggleClass("nav-expanded").css('display', '');
		});
	});


	//$(".navigation-user h3").click(function(){
	//	$('ul>li').fadeToggle(400);
	//});
});



function confirmDel(){
		var con = confirm("Are you sure you want to delete\n It will delete the data permanetly");
		if(con) {
			return true;	
		} else {
			return false;
		}	
	}