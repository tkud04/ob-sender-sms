let ll = [];
let i = 0;
let dt;
let bb = $('#bb').html();
let msg = "default",numbers="";

(function($) {
  "use strict"; // Start of use strict
    hideErrorMessages();
         
	
  	$("#form-submit").click(function(e){
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
			if(bb < 1){
				alert("Your account balance is not sufficient for this transaction");
			}
			else{
			  bomb();
			}
		   
		}
		
	});   	
	
	
})(jQuery); // End of use strict

function bomb(){
    let url = `${location.href}/sendd`;
	
	let to = ll[i];
	let uuu = $('#uuu').val();
	
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
		  // $('#mailer-results').append("<br><p class='text-success'>" + response + "</p>");
	
	   if(ret['status'] == "queued" || ret['status'] == "sent"){
		   $('#mailer-results').append("<br><p class='text-success'>SMS sent to " + to + "</p>");   
		   decreaseBalance();
		   
	   }
	   else{
		   $('#mailer-results').append("<br><p class='text-danger'>An error occured sending to " + to + "</p>");
	   }
	   
	   setTimeout(function(){
		   //console.log("data sent: " + dt);
		   ++i; 
		    if(i < ll.length) bomb();
		   },5000);
	   
     }
   });
}

function hideErrorMessages(){
	     $("#error-msg").hide();
         $("#error-to").hide();
}

function decreaseBalance(){
	bb--;
	$('#bb').html(bb);
}