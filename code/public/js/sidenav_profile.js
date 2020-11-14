
function openSideNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeSideNav() {
  document.getElementById("mySidenav").style.width = "0";
}





//testfunction js
logout=function(event){

  var confirmBox=confirm("Are you sure you want to log out?");
  //if ok logout, otherwise don't
  if(confirmBox==true){
    //debugging
    console.log('confirm box');

    //execute jquery which logs out of system
    window.location= "logout";
  }else{
    console.log('login cancelled');
  }
  
}

//FIX ALERTABLE
$('.ALERTABLE').on('click', function() {
  $.alertable.confirm('You sure?').then(function() {
    console.log('Confirmation submitted');
  }, function() {
    console.log('Confirmation canceled');
  });
});

