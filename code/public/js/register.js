
//variables to check

var mobile_tel_valid= false;
var home_tel_valid= false;

//function which takes confirm password
var confirm_password = function () {  //function which matches password values
  if ((document.getElementById('password').value !=0) &&(document.getElementById('password').value == document.getElementById('psw-repeat').value)) {
    document.getElementById('psw-message').style.color = 'green';
    document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;matching';
  } else {
    document.getElementById('psw-message').style.color = 'red';
    document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;not matching';
  }

}

//JS function which enables button only if passwords are matched
var button_enable = function () {
  //password related
  console.log(document.getElementById("home_tel_no").value.length);
  if ((document.getElementById('psw-message').style.color == 'green') && (document.getElementById('psw-message2').innerHTML == '')
  && (home_tel_valid) && (mobile_tel_valid) ) {
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
      document.getElementById('psw-message2').style.color = 'red';
      document.getElementById('psw-message2').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;need at least 8 characters';
      $(this).focus(); // focuses the current field.
      return false; // stops the execution.
    } else {
      console.log('more than 8');
      document.getElementById('psw-message2').innerHTML = '';
      document.getElementById('psw-message2').style.color = 'green';
    }
  });
}

//JS function which checks if contact number is valid
function phone_validate() {

  var mobile_tel=document.getElementById("mobile_tel_no").value.length;
  var home_tel=document.getElementById("home_tel_no").value.length;

  console.log(mobile_tel);
  if (mobile_tel!=10 ||home_tel!=10){
    mobile_tel_valid= false;
    home_tel_valid= false;
    document.getElementById('other-message').style.color = 'red';
    document.getElementById('other-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Enter valid phone number';
    if (mobile_tel!=10){
      document.getElementById("mobile_tel_no").focus(); // focuses the current field.
    }else{
      document.getElementById("home_tel_no").focus(); // focuses the current field.
    }
  }else if (mobile_tel && home_tel==10){
    mobile_tel_valid= true;
    home_tel_valid= true;
    
    document.getElementById('other-message').innerHTML = '';
    document.getElementById('other-message').style.color = 'green';
  }
  console.log((document.getElementById('psw-message').style.color == 'green') && (document.getElementById('psw-message2').innerHTML == '')
  && (home_tel_valid) && (mobile_tel_valid));
}

//ajax function to not refresh browser when  entering data
function create() {
  $.ajax({
    url: "reg_auth",    //the page containing php script
    type: "post",    //request type,
    dataType: 'json',
    //the data array
    data: {
      first_name: document.reg_form.first_name.value,
      last_name: document.reg_form.last_name.value,
      vehicle_number: document.reg_form.vehicle_number.value,
      address: document.reg_form.address.value,
      email: document.reg_form.email.value,
      password: document.reg_form.password.value,
      mobile_tel_no: document.reg_form.mobile_tel_no.value,
      home_tel_no: document.reg_form.home_tel_no.value
    }
    ,
    //debugging
    success: function () {
      $("#result").html(data); 
      console.log("");
    }
  });
  //console.log('Registration Successful');
}