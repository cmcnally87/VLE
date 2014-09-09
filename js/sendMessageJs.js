$(function(username) {
	$('#newMessageContent').click(function() {
		document.newMessage.newMessageContent.value = "";
	});
	
	
	$('#newMessageSend').click(function(){
	
	username = $("#user").html();
	message = $("#newMessageContent").val();
		
		if (message == "" || message == "Enter your message here") {
			return false;
		}
	dataString = 'username=' + username + '&message=' + message;
		
	
	$.ajax({
			type: "POST",
			url: "sendMessage.php",
			data: dataString,
			success: function() {
				document.newMessage.newMessageContent.value = "";
			}
		});		
	});
});

function hello(){
	
window.alert("Hello")
	
}
