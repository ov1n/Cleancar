//launch error message function when window loads
//window.onload = advance_paid;
window.onload = function_order;

function function_order(){
  load_warning();
  advance_paid();
}

function test(val){

  document.getElementById("cancel_id").value=val;
  //document.getElementById("cancel_date").value=datee;
  //console.log(datee);
  //console.log(document.getElementById("cancel_id").value);
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

function set_time(){
  //countown timer to display how much rime you have left
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementsByClassName("countdown").value = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementsByClassName("countdown").value = "EXPIRED";
    }
  }, 1000);
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
