
//variables to check

var mobile_tel_valid= false;
var home_tel_valid= false;
var vehicle_no_valid=false;

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
  && (home_tel_valid) && (mobile_tel_valid) &&(vehicle_no_valid) ) {
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

//JS REGEX function which checks if contact number is valid
function phone_validate() {

  var mobile_tel=document.getElementById("mobile_tel_no").value;
  var home_tel=document.getElementById("home_tel_no").value;

  //console.log(mobile_tel);

  var phoneno = /^\d{10}$/;
  if((mobile_tel.match(phoneno))&&(home_tel.match(phoneno))){
    mobile_tel_valid= true;
    home_tel_valid= true;
    document.getElementById('other-message').innerHTML = '';
    document.getElementById('other-message').style.color = 'green';
  }
  else{
    mobile_tel_valid= false;
    home_tel_valid= false;
    document.getElementById('other-message').style.color = 'red';
    document.getElementById('other-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Enter valid phone number';
    //return false;
  }
}

//JS REGEX function which checks if vehicle number is valid
function vehicle_no_validate() {
  var vehicle_number=document.getElementById("vehicle_number").value;
  //console.log(vehicle_number);

  var valid_vehicle_no = /([a-zA-Z\d]{2,3}[-][\d]{4})/;
  
  if(vehicle_number.match(valid_vehicle_no)){
    vehicle_no_valid=true;
    console.log("valid vehi no");
    document.getElementById('vehicle-message').style.color = 'green';
    document.getElementById('vehicle-message').innerHTML = '';
    
  }else{
    vehicle_no_valid=false;
    console.log("invalid vehi no");
    document.getElementById('vehicle-message').style.color = 'red';
    document.getElementById('vehicle-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Enter valid vehicle number';
  }
  
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