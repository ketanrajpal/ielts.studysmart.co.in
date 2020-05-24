<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://www.studysmart.co.in/ieltstesting/assets/js/jquery-3.4.1.min.js"></script>
<script src="https://www.studysmart.co.in/ieltstesting/assets/js/popper.min.js" ></script>
<script src="https://www.studysmart.co.in/ieltstesting/assets/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
function genericSocialShare(url){
	window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
	return true;
}
var form = $('.submit_lead_form');
form.submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'), 
        // dataType: 'json',
   	    data: JSON.stringify(objectifyForm(form.serializeArray())),
        success: function (data) {
      		if(data == 'Success'){
            $('#call_popup_send_leads').modal('hide');
      			$('#thanks_popup_call_msg').modal('show');
      		}
        },
        error: function (data) {
          	
        },
    });
});
function objectifyForm(formArray){
	var returnArray = {};
		for (var i = 0; i < formArray.length; i++){
		returnArray[formArray[i]['name']] = formArray[i]['value'];
		}
		return returnArray;
}
</script>