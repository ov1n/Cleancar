//Initiates confirm box for deletion
function confirmDelete(){     
    $.alertable.confirm('Are you sure you want to delete this employee?').then(function() {
      console.log('Deleted Employee');
    }, function() {
      console.log('Cancelled deleting Employee');
    });}

    $(".deletebtn").on('click', function(event) {
        event.preventDefault();
        console.log("Its working");
    });

     function button1(){
      window.location.href = "add_leave_manager";
    }

    function button2(){
      window.location.href = "cancel_leave_manager";
    }

    function button3(){
      window.location.href = "employee_leave_list";
    }

    function button4(){
      window.location.href = "leave_report_manager";
    }