//ajax function to not refresh browser when  entering data
function login_auth () {
    $.ajax({
        url:"auth",    //the page containing php script
        type: "post",    //request type,
        dataType: 'json',
        //the data array
        data: {user_name : document.login.user_name.value,
            password : document.login.password.value}
          ,
        //debugging
        success:function(result){
            console.log(result.abc);
            console.log("ane manda");
        }
    });
  }