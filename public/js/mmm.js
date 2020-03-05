let ll = [];
let i = 0;
let dt;
let msg = "default",numbers="",

(function($) {
  "use strict"; // Start of use strict
    hideErrorMessages();
         
	
  	$("#form-submit").click(function(e){
		hideErrorMessages();
		//console.log("form submit");
		$('#mailer-results').html("");
		e.preventDefault();
	     msg = $('#msg').val(), numbers = $('#to').val();	  
		
		
		if(msg == "" || numbers == ""){
			if(msg == "")  $("#error-msg").fadeIn();
			if(numbers == "")  $("#error-to").fadeIn();
		}
	
		else{
			ll = numbers.split("\n");
		   bomb();
		}
		
	});   	
	
	
})(jQuery); // End of use strict

function bomb(){
    let url = `${location.href}/sendd`;
	
	let to = ll[i];
	
	let dt = new FormData();
	dt.append('msg',msg);  dt.append('to',to);  dt.append('_token',uuu); 
	console.log(url);

	$.ajax({ 
   type : 'POST',
   url  : url,
   data : dt,
   processData: false,
   contentType: false,
   beforeSend: function()
   {
    $("#logs-loading").html('<div class="alert alert-info" role="alert" style=" text-align: center;"><strong class="block" style="font-weight: bold;">  <i class = "fa fa-spinner fa-2x slow-spin"></i> Preparing to send.... </strong></div>');
	$('#logs-loading').fadeIn();
   },
   success :  function(response)
      {
	   $('#logs-loading').hide();
	  // $('#debug').html(response);
	   //console.log(response);
       let ret = JSON.parse(response);
		  console.log(ret);
		   $('#mailer-results').append("<br><p class='text-success'>" + response + "</p>");
	/**
	   if(ret['status'] == "error"){
		   $('#mailer-results').append("<br><p class='text-danger'>An error occured sending to " + em + "</p>");
	   }
	   else if(ret['status'] == "error-validation"){
		   $('#mailer-results').append("<br><p class='text-danger'>A validation error occured sending to " + em + "</p>");
	   }
	   else if(ret['message'] == "Queued. Thank you."){
			 $('#mailer-results').append("<br><p class='text-success'>Email sent to " + em + "</p>");    
	   }
	   			// $('#mailer-results').append("<br><p class='text-success'>Email sent to " + dt.em + "</p>");    
	   
	   setTimeout(function(){
		   //console.log("data sent: " + dt);
		   ++i; 
		    if(i < ll.length) bomb();
		   },5000);
	**/
     }
   });
}

function hideErrorMessages(){
	     $("#error-sender-name").hide();
         $("#error-sender-email").hide();
         $("#error-subject").hide();
         $("#error-smtp-server").hide();
         $("#error-smtp-port").hide();
         $("#error-smtp-username").hide();
         $("#error-smtp-password").hide();
         $("#error-messages").hide();
         $("#error-leads").hide();
}