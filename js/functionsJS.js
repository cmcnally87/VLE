var addAdminP = "addAdmin.php"
var adminCon = "admincontrols.php"

var loadAni = "<img src='img/load.gif' alt='loading...' />"; 


$(document).ready(function(){
	
	$('#main').html(loadAni).load('files.php');
	
	
	$(".adminButton").click(function(){  
        $("#main").html(loadAni).load('admincontrols.php');  
    });
	
	$("#back").click(function(){
		
		alert('working');
		
	});
	
	$("#enable").click(function(){
		
		alert('working');
		
	});
	
	

});

	