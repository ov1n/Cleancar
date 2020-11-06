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
    $.alertable.confirm('You sure?').then(function() {
      console.log('Confirmation submitted');
    }, function() {
      console.log('Confirmation canceled');
    });  
}
