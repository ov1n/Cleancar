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

  function calculate(){
    let service_charge = document.getElementById("service_charge").value;
    let aditional_charges = document.getElementById("aditional_charges").value;
    let advanced_fee = document.getElementById("advanced_fee").value;
    let net_amount = parseFloat(service_charge) + parseFloat(aditional_charges) - parseFloat(advanced_fee);
    document.getElementById("net_amount").value = net_amount;
  }

