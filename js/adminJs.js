

var loadAni = "<img src='images/load.gif' alt='loading...' />"; 


$(document).ready(function(){
	
	
	
	$("#back").click(function(){
		
		$("#main").html(loadAni).load('files.php');		
	});
	
	$("#addAdmin").click(function(){
		
		$("#adminPageContent").html(loadAni).load('addAdmin.php');		
	});
	
	$("#list").click(function(){
		
		$("#adminPageContent").html(loadAni).load('list.php');		
	});
	
	$("#enable").click(function(){
		
		$("#adminPageContent").html(loadAni).load('enable.php');		
	});
	
	$("#addFiles").click(function(){
		
		$("#adminPageContent").html(loadAni).load('addFiles.php');		
	});
	
	//files
	
	$("#content").click(function(){
		
		$("#subConList").html(loadAni).load('content.php');		
	});
	
	$("#forum").click(function(){
		
		$("#subConList").html(loadAni).load('mainForum.php');		
	});
	
	$("#create").click(function(){
		
		$("#subConList").html(loadAni).load('createTopic.php');		
	});
	
	$("#create").click(function(){
		
		$("#subConList").html(loadAni).load('createTopic.php');		
	});
	
$("#account").click(function(){
		
		$("#subConList").html(loadAni).load('account.php');		
	});
	

});


$(document).ready(function(){
	
	$("#addAdminForm").submit(function(){
		
		$.POST(addAdmin.php, function(data){
			
			$("#regAdmin").html(data)
			
			});
			
			return false;
		});
	
});