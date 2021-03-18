function send_timeslot_data() {
    $.ajax({
      url: "add_timeslot_",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        start_time: document.add_timeslot_form.start_time.value,
        end_time: document.add_timeslot_form.end_time.value,
        lift_no: document.add_timeslot_form.lift_no.value,
        
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
      url: "update_timeslot_",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        start_time: document.timeslot_update_form.start_time.value,
        end_time: document.timeslot_update_form.end_time.value,
        lift_no: document.timeslot_update_form.lift_no.value,
      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
    //console.log('Registration Successful');
  }
