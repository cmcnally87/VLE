
$.ajaxSetup ({
	cache: false
});

$(setInterval(function() {
	$("#mainChat").load('displayMessages.php');
	$('#mainChat').prop({ scrollTop: $('#mainChat').prop('scrollHeight') });
}, 500));


