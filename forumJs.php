<script type="text/javascript" language="javascript">


$(document).ready(function(){
$('.topic').click(function() {
    var topicID = $(this).data('id');
		
		$("#subConList").html(loadAni).load('viewTopic.php?id=' + topicID);		
	});
});
	

	
</script>