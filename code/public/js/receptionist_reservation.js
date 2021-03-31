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
    $.alertable.confirm('Confirm making reservation?').then(function() {
      $.alertable.confirm('Do you want to make an Advance Payment?').then(function() {
          console.log('make advance Payment');
          window.location = 'advance_payment';
        }, function() {
          console.log('Dont make advance Payment what');
          //insert code here
          window.location = 'set_emergency_reservation';
        });
      console.log('Confirmation submitted');
    }, function() {
      console.log('Confirmation canceled');
    });  
  }