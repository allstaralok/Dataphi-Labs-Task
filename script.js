$("#sub").click( function() {
 $.post( $("#newpatient").attr("action"), 
         $("#newpatient :input").serializeArray(), 
         function(info){ alert(html(info)); 
   });
 clearInput();
});
 
$("#newpatient").submit( function() {
  return false;	
});
 
 //Experimental
function clearInput() {
	$("#newpatient :input").each( function() {
	   $(this).val('');
	});
}