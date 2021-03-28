function send_data () {
    $.ajax({
        url:"change_password_auth",    //the page containing php script
        type: "post",    //request type,
        dataType: 'json',
        //the data array
        data: {
            current_password : document.change_login_password.crrpassword.value,
            confirm_password : document.change_login_password.confirm_password.value}
          ,
        //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
  }

  //display if incorrect  credentials
  function error_message(){

    console.log("in error message");
    console.log(notification);
    
    //incorrect  notice
    if(notification=="Incorrect_Password"){
      document.getElementById("incorrect_msg").style.color='red';
      document.getElementById("incorrect_msg").innerHTML="&ensp;&ensp;&#9432;&emsp;Incorrect current password, try again!";
    };

  }
  //launch error message function when window loads
  window.onload = error_message;


//function which takes confirm password
function check_match_psw() {  //function which matches password values
  // console.log("It's working");
  if (document.getElementById('password').value == document.getElementById('confirm_password').value && document.getElementById('confirm_password')) {
    document.getElementById('psw_validation').style.color = 'green';
    document.getElementById('psw_validation').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;matching';
  } else {
    document.getElementById('psw_validation').style.color = 'red';
    document.getElementById('psw_validation').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;not matching';
  }

}

//JS function which enables button only if passwords are matched
var button_enable = function () {
  if ((document.getElementById('psw_validation').style.color == 'green') && (document.getElementById('psw_length').innerHTML == '')) {
    console.log("green");
    document.getElementById("register").disabled = false;
  } else {
    console.log("red");
    document.getElementById("register").disabled = true;
  }
}

//JS function which range checks password
function password_length() {
  $('#password').on('blur', function () {
    if (this.value.length < 8) { // checks the password value length
      console.log('less than 8');
      document.getElementById('psw_length').style.color = 'red';
      document.getElementById('psw_length').innerHTML = '&ensp;&ensp;&#9432;&emsp;need at least 8 characters';
      $(this).focus(); // focuses the current field.
      return false; // stops the execution.
    } else {
      console.log('more than 8');
      document.getElementById('psw_length').innerHTML = '';
    }
  });
}

  function updateme(){

  //var form = document.getElementById("cancel_form");
  //document.getElementById("cancel_id").value=val;
  //console.log(document.getElementById("cancel_id").value);
 $.alertable.confirm('Do you want to Change the Password?').then(function() {
    document.change_login_password.submit();
      //window.location.href="change_password";
    }, function() {
      console.log('Confirmation canceled');
    });  

  
}