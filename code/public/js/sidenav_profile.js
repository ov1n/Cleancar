
function openSideNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeSideNav() {
  document.getElementById("mySidenav").style.width = "0";
}




var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
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

