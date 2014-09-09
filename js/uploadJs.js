$(function() {  
  $('.error').hide();  
  $(".button").click(function() {  
    // validate and process form here  
  
    $('.error').hide();  
      var name = $("input#uploadedFile").val();  
        if (name == "") {  
      $("label#nameError").show();  
      $("input#uploadFile").focus();  
      return false;  
    }  
 });  
});