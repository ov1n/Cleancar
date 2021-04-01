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

}

//enable button only if request date is grater than today's date
var button_enable = function () {
  if (document.getElementById('date_validate_msg').style.color == 'red')  {
    console.log("enable");
    document.getElementById("submit").disabled = true;
  } 
  else {
    console.log("red");
    document.getElementById("submit").disabled = false;
    }
}

//Date Validation
function check_date(){

  var req_date = document.getElementById('leave_date').value;

  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;

  console.log(req_date);
  console.log(today);


  if(today > req_date){
    
    document.getElementById('date_validate_msg').style.color = 'red';
    document.getElementById('date_validate_msg').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;Date is not valid';
  }
  else{
    document.getElementById('date_validate_msg').style.color = 'green';
    document.getElementById('date_validate_msg').innerHTML = '';
    
  }
}

function deleteme(leaveDate,leaveType,leaveStatus){  
 
    
  $.alertable.confirm('Do you want to cancel the Leave?').then(function() {
    window.location.href="leave_delete?leave_date="+leaveDate+"&leave_type="+leaveType+"&leave_status="+leaveStatus;
  }, function() {
    console.log('Confirmation canceled');
  });  
}
