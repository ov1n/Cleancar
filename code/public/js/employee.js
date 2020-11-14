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

    function button(){
      window.location.href = "employee_leave_list";
      console.log("Thenukata pissu");
    }