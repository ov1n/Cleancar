//ajax function to not refresh browser when  entering data
function send_bill_data() {
    $.ajax({
      url: "add_bill",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data: {
        bill_no: document.add_bill.bill_no.value,
        reservation_id: document.add_bill.reservation_id.value,
        veh_Number: document.add_bill.veh_Number.value,
        veh_Model: document.add_bill.veh_Model.value,
        name: document.add_bill.name.value,
        contact_number: document.add_bill.contact_number.value,
        net_amount: document.add_bill.net_amount.value,
        
        
        
      }
      ,
      //debugging
      success: function () {
        console.log("succesfully sent data;");
      }
    });
    //console.log('Registration Successful');
  }