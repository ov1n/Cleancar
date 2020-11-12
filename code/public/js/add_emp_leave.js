//ajax function to not refresh browser when  entering data
function send_leave_data() {
    $.ajax({
      url: "add_leave_",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        leave_date: document.add_leave.date.value,
        emp_id: document.add_leave.emp_id.value,
        type: document.add_leave.leave_type.value,
        leave_time: document.add_leave.leave_time.value,
        reason: document.add_leave.reason.value,
        
      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
    //console.log('Registration Successful');
  }