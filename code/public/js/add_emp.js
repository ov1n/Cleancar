//ajax function to not refresh browser when  entering data
function send_data() {
    $.ajax({
      url: "emp_reg_auth",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        first_name: document.emp_reg_form.first_name.value,
        last_name: document.emp_reg_form.last_name.value,
        nic: document.emp_reg_form.nic.value,
        address: document.emp_reg_form.address.value,
        email: document.emp_reg_form.email.value,
        password: document.emp_reg_form.password.value,
        mobile_tel_no: document.emp_reg_form.mobile_tel_no.value,
        home_tel_no: document.emp_reg_form.home_tel_no.value
        
        

      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
    //console.log('Registration Successful');
  }


  function send_update_data() {
      
    $.ajax({
      url: "emp_update_auth",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        emp_id: document.emp_update_form.emp_id.value,
        first_name: document.emp_update_form.first_name.value,
        last_name: document.emp_update_form.last_name.value,
        nic: document.emp_update_form.nic.value,
        address: document.emp_update_form.address.value,
        email: document.emp_update_form.email.value,
        mobile_tel_no: document.emp_update_form.mobile_tel_no.value,
        home_tel_no: document.emp_update_form.home_tel_no.value
        
        

      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
    
  }

  function updateme_recep(){   
     
    $.alertable.confirm('Do you want to Update the Employee Details?').then(function() {
      send_update_data();
      window.location.href="employee_list_recep";
    }, function() {
      console.log('Confirmation canceled');
    });  
  }

  function updateme(){   
    
    $.alertable.confirm('Do you want to Update the Employee Details?').then(function() {
      send_update_data();
      window.location.href="employee_list";
    }, function() {
      console.log('Confirmation canceled');
    });  
  }


//function which takes confirm password
function check_match_psw() {  //function which matches password values
  
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
  if ((document.getElementById('psw_validation').style.color == 'green') && (document.getElementById('psw_length').innerHTML == '') && (document.getElementById('nic_msg').style.color == 'green') && (document.getElementById('phone_validation').style.color == 'blue') ) {
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

//NIC Validation
function check_nic(){
  var usernic = document.getElementById('nic').value;
  

  if( (usernic.length != 10 || usernic.charAt(usernic.length - 1) != 'v' && usernic.charAt(usernic.length - 1) != 'V') && (usernic.length != 12 || usernic.charAt(usernic.length - 1) == 'V' ||  usernic.charAt(usernic.length - 1) == 'v' || usernic.substr(0, 1)>2 )){
    console.log('Invalid NIC number');
    document.getElementById('nic_msg').style.color = 'red';
    document.getElementById('nic_msg').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Invalid NIC';
    console.log(usernic);
    
  }
  else{
    console.log(usernic);
    console.log('Valid NIC number');
    document.getElementById('nic_msg').style.color = 'green';
    document.getElementById('nic_msg').innerHTML = '&ensp;&ensp;&#9432;&emsp;Valid NIC';
  }
}

//JS REGEX function which checks if contact number is valid
function check_phone_no() {

  var mobile_tel=document.getElementById("mobile_tel_no").value;
  var home_tel=document.getElementById("home_tel_no").value;

  console.log(mobile_tel);

  var phoneno = /^\d{10}$/;
  if(!((mobile_tel.match(phoneno))&&(home_tel.match(phoneno)))){
    mobile_tel_valid= false;
    home_tel_valid= false;
    document.getElementById('phone_validation').style.color = 'red';
    document.getElementById('phone_validation').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Enter valid phone number';
  }
  else{
    mobile_tel_valid= true;
    home_tel_valid= true;
    document.getElementById('phone_validation').innerHTML = '';
    document.getElementById('phone_validation').style.color = 'blue';
  }
}