
//function which takes confirm password
var confirm_password = function() {  //function which matches password values
    if (document.getElementById('password').value == document.getElementById('psw-repeat').value) {
      document.getElementById('psw-message').style.color = 'green';
      document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;matching';
    } else {
      document.getElementById('psw-message').style.color = 'red';
      document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;not matching';
    }
    
  }

  var password_length = function() {  //function which checks range of characters
    if(document.getElementById('password').length <= 8) {
      document.getElementById('psw-message').style.color = 'red';
      document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;need at least 8 characters';
    }
    
  }