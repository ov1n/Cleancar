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
  }

  function send_update_data() {
    $.ajax({
      url: "update_timeslot_",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        new_start_time: document.timeslot_update_form.new_start_time.value,
        new_end_time: document.timeslot_update_form.new_end_time.value,
        timeslot_no: document.timeslot_update_form.timeslot_no.value,
      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
  }

  function deleteme(timeslot_no){   
    $.alertable.confirm('Do you want to delete the timeslot?').then(function() {
      
      window.location.href="delete_timeslot?timeslot_no="+timeslot_no;
    }, function() {
      console.log('Confirmation canceled');
    });  
  }

  function updateme(timeslot_no){  
    $.alertable.confirm('Do you want to update the timeslot?').then(function() {
      window.location.href="update_timeslot?timeslot_no="+timeslot_no;
    }, function() {
      console.log('Confirmation canceled');
    });  
  }

  