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