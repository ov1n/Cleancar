//launch error message function when window loads
//window.onload = advance_paid;
window.onload = function_order;

function function_order(){
  load_warning();
  advance_paid();
}

function test(val){

  document.getElementById("cancel_id").value=val;
  document.cancel_form.submit();
}

function advance_paid(){

    //get all elements of class
    var x = document.getElementsByClassName("is_paid");
    var i;
    for (i = 0; i < x.length; i++) {
        console.log(x[i].value);

        if(x[i].value=="1"){
            x[i].value="Yes";
            x[i].style.color="green";
        }else{
            x[i].style.color="red";
            x[i].value="No"
        }
        x[i].style.fontWeight = "900";  
    }

}

function cancelConfirm(res_id){   
  //alert("Make reservation on the below entered details?");  
  $.alertable.confirm('Are you sure you want to cancel this reservation?').then(function() {
    //console.log(res_id);
    test(res_id);
  }, function() {
    console.log('Did not cancel reservation');
  });  
}

function load_warning(){

  //console.log(notif);
  if(typeof notif !== 'undefined'){
    $.alertable.alert("Reservation cancelled Successfully");
  }else{
    $.alertable.alert("Please note that some reservations may become unavailable due to terms and conditions</br></br><a href='terms_conditions'>View Terms and Conditions</a>", {
      html:true
    });
  }
  
}
