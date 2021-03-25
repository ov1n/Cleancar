function convert_to_12hour(time) {
 
    if(intval(substr($value, 0,2)>=13)){
      $final=intval(substr($value, 0,2)-12);
      $final ='0'.$final .substr($value,2,3) ." PM";

  }else if(intval(substr($value, 0,2)>=12)){
      $final=substr($value, 0,5);
      $final =$final . " PM";
      
  }else{
      $final=substr($value, 0,5);
      $final =$final . " AM";
  }

  //echo($final);
  return $final;

}

function date_validate(){

  var today = new Date();
  //console.log(datee);
  //console.log(today);
  if(datee>today){
      console.log("date greater");
      document.getElementById('calendar_message').style.color = 'green';
      document.getElementById('calendar_message').innerHTML = "";
      document.getElementById("reserve").disabled = false;
  }else{
      console.log("date lower");
      document.getElementById("calendar_message").innerHTML = '&#9432;&emsp;Please enter a future date';
      document.getElementById("calendar_message").style.color = 'red';
      
      document.getElementById("reserve").disabled = true;
  }
}

//function to display date in needed format
function date_display(){

  //console.log(datee);
  formatted_date = datee.toISOString();
  console.log(formatted_date);

  //split the time part
  formatted_month =formatted_date.substring(0,8)
  formatted_day= formatted_date.substring(8,10)
  //month=formatted_date.substring(8,9)
  //day=formatted_date.toISOString()
  //console.log(formatted_month);
  //console.log(parseInt(formatted_day)+1);

  selected_date=formatted_month+( parseInt(formatted_day)+1)

  //get data accurately
  //console.log(selected_date);
  //document.getElementById("date_display").innerHTML=(selected_date);
  document.getElementById("date").value=selected_date;
  //console.log(document.getElementById("date").value);

}