//ajax function to not refresh browser when  entering data
function send_data() {
    $.ajax({
      url: "add_service_type",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        service_type: document.add_service_type_form.service_type.value,
        vehicle_category: document.add_service_type_form.vehicle_category.value,
        no_of_employees: document.add_service_type_form.no_of_employees.value,
        no_of_time_slot: document.add_service_type_form.no_of_time_slot.value,
        lift_no: document.add_service_type_form.lift_no.value,
        price: document.add_service_type_form.price.value,
       
        
      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
    //console.log('Registration Successful');
  }