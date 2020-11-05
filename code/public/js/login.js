//ajax function to not refresh browser when  entering data
function login_auth () {
    $.ajax({
        url:"auth",    //the page containing php script
        type: "post",    //request type,
        dataType: 'json',
        //the data array
        data: {user_name : document.login.user_name.value,
            password : document.login.password.value}
          ,
        //debugging
        success:function(result){
            console.log(result.abc);
            console.log("ane manda");
        }
    });
  }
  //display if incorrect login credentials
  function error_message(){

    console.log(notification);
    
    if(notification=="incorrect_login"){
      document.getElementById("incorrect_msg").style.color='red';
      //document.getElementById("username").style.color=red;
      //document.getElementById("password").style.color=red;
      document.getElementById("incorrect_msg").innerHTML="&ensp;&ensp;&#9432;&emsp;Incorrect username or password, try again!";
    };
  }
  //launch error message function when window loads
  window.onload = error_message;