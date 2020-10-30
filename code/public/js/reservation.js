//JS function which enables button only if passwords are matched
var button_enable = function(){
  if(document.getElementById('psw-message').style.color=='green'){
    console.log("green");
    document.getElementById("register").disabled = false;
  }else{
    console.log("red");
    document.getElementById("register").disabled = true;
  }   
}
  
  function confirmSubmit(){   
    //alert("Make reservation on the below entered details?");  
      $.alertable.confirm('Are you sure you want to confirm the reservation?').always(function() {
        $.ajax({
          url:"confirm_reservation",    //the page containing php script
          type: "post",    //request type,
          dataType: 'json',
          //the data array
          data: { first_name : document.reservation.first_name.value,
                  last_name : document.reservation.last_name.value,
                  date : document.reservation.date.value,
                  service_type : document.reservation.service_type.value}
            ,
          //debugging
          success:function(result){
              console.log(result.abc);
              console.log("system data sent");
          }
      });})
}
