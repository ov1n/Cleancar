
//function which takes confirm password
var confirm_password = function() {  //function which matches password values
    if (document.getElementById('password').value == document.getElementById('psw-repeat').value) {
      document.getElementById('psw-message').style.color = 'green';
      document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;matching';
    } else {
      document.getElementById('psw-message').style.color = 'red';
      document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;not matching';
    }
    
  }

  var password_length = function() {  //function which checks range of characters
    if(document.getElementById('password').length <= 8) {
      document.getElementById('psw-message').style.color = 'red';
      document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;need at least 8 characters';
    }
    
  }
  //function to not refresh browser when  entering data
  function create () {
    $.ajax({
        url:"reg_auth",    //the page containing php script
        type: "post",    //request type,
        dataType: 'json',
        //the data array
        data: {first_name : document.reg_form.first_name.value,
          last_name : document.reg_form.last_name.value,
          vehicle_number : document.reg_form.vehicle_number.value,
          address : document.reg_form.address.value,
          email : document.reg_form.email.value,
          password : document.reg_form.password.value,
          mobile_tel_no : document.reg_form.mobile_tel_no.value,
          home_tel_no : document.reg_form.home_tel_no.value}
          ,
        success:function(result){
            console.log(result.abc);
        }
    });
}