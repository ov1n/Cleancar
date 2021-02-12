function send_update_data(){
     $.ajax({
      url: "update_user_auth",    //the page containing php script
      type: "post",    //request type,
      dataType: 'json',
      //the data array
      data:{
         userid: document.update_user.user_id.value,
          first_name: document.update_user.first_name.value,
           last_name: document.update_user.last_name.value,
            nic: document.update_user.nic.value,
             address: document.update_user.address.value,
              email: document.update_user.email.value,
               mobile_tel_no: document.update_user.mobile_tel_no.value,
               home_tel_no: document.update_user.home_tel_no.value,

      }
      ,
       success: function () {
        console.log("succesfully sent data;");
      }
    });
}