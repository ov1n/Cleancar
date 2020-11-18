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

//NIC Validation
function nic_valid(){

}

//function which takes confirm password
function chech_match_psw() {  //function which matches password values
  // console.log("It's working");
  if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
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
      document.getElementById('psw_length').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;need at least 8 characters';
      $(this).focus(); // focuses the current field.
      return false; // stops the execution.
    } else {
      console.log('more than 8');
      document.getElementById('psw_length').innerHTML = '';
    }
  });
}