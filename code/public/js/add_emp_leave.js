//ajax function to not refresh browser when  entering data
function send_leave_data() {
  $.ajax({
    url: "add_leave_",    //the page containing php script
    type: "post",    //request type,
    dataType: 'json',
    //the data array
    data: {
      leave_date: document.add_leave_form.leave_date.value,
      emp_id: document.add_leave_form.emp_id.value,
      leave_type: document.add_leave_form.leave_type.value,
      leave_time: document.add_leave_form.leave_time.value,
      reason: document.add_leave_form.reason.value
      
    }
    ,
    //debugging
    success: function () {
      console.log("succesfully sent data;");
    }
  });
  //console.log('Registration Successful');
}

//Date Validation
function check_date(){
  var req_date = document.getElementById('leave_date').value;
  var today = new Date();
  var y = today.getFullYear();
  var m = today.getMonth();
  var d = today.getDay();

  var date = new Date(m,d,y);

  if(date < req_date){
    console.log(req_date);
  }
  else{
    console.log('cannot request leave');
  }
/*
  if( (usernic.length == 10 && usernic.charAt(usernic.length - 1) == 'v' || usernic.charAt(usernic.length - 1) == 'V') || (usernic.length == 12 && usernic.charAt(usernic.length - 1) != 'V' &&  usernic.charAt(usernic.length - 1) != 'v' )){
    console.log(usernic);
    console.log('Valid NIC number');
    document.getElementById('nic_msg').style.color = 'green';
    document.getElementById('nic_msg').innerHTML = '&ensp;&ensp;&#9432;&emsp;Valid NIC';
  }
  else{
    console.log('Invalid NIC number');
    document.getElementById('nic_msg').style.color = 'red';
    document.getElementById('nic_msg').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Invalid NIC';
    console.log(usernic);
  }*/
}