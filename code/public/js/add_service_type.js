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
  }


  function send_update_data() {
    $.ajax({
      url: "update_service_auth",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        type_id: document.service_update_form.type_id.value,
        service_type: document.service_update_form.service_type.value,
        vehicle_category: document.service_update_form.vehicle_category.value,
        no_of_employees: document.service_update_form.no_of_employees.value,
        no_of_time_slot: document.service_update_form.no_of_time_slot.value,
        lift_no: document.service_update_form.lift_no.value,
        prize: document.service_update_form.prize.value,

      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
  }

  function updateme(){
    $.alertable.confirm('Do you want to update the service?').then(function() {
      send_update_data();
    }, function() {
      console.log('Confirmation canceled');
    });  
  }

    function deleteme(type_id){    
      $.alertable.confirm('Do you want to remove the service type?').then(function() {
        window.location.href="delete_service?type_id="+type_id;
      }, function() {
        console.log('Confirmation canceled');
      });  
    }