//launch error message function when window loads
//window.onload = advance_paid;
window.onload = advance_paid;

function send_canceled_reservation(val) {
      
  $.ajax({
    url: "cancel_res_",    //the page containing php script
    type: "post",    //request type,
    dataType: 'json',
    //the data array
    data: {
      res_id: val
    }
    ,
    //debugging
    success: function () {
      console.log("succesfully sent data;");
    }
  });
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
    console.log(res_id);
    send_canceled_reservation(res_id)
  }, function() {
    console.log('Did nott cancel reservation');
  });  
}
