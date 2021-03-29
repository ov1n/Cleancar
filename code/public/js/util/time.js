function convert_to_12hour(time) {
  
    var final;
    if(time.substr(0,2)>=13) {
      final=time.substr(0,2)-12;
      final ='0'+final+time.substr(2,3)+" PM";

  }else if(time.substr(0,2)>=12){
      final=time.substr(0,5);
      final =final + " PM";
      
  }else{
      final=time.substr(0,5);
      final =final + " AM";
  }

  console.log(final);
  return final;

}

function date_validate(){

  var today = new Date();

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

  formatted_date = datee.toISOString();
  console.log(formatted_date);

  //split the time part
  formatted_month =formatted_date.substring(0,8)
  formatted_day= formatted_date.substring(8,10)
  selected_date=formatted_month+( parseInt(formatted_day)+1)

  document.getElementById("date").value=selected_date;


}

function addDays(date, days) {

  var result = new Date(date);
  result.setDate(result.getDate() + days);
  return result;
}

function generate_week(days=7){

  var date = new Date(today);
  var days=[];
  //since week
  for(let i=1;i<7;i++){
    var curr=addDays(date,i);
    var month = '' + (curr.getMonth() + 1),
    day = '' +curr.getDate(),
    year = curr.getFullYear();

    if (month.length < 2){
      month = '0' + month;
    } 
      
    if (day.length < 2){
      day = '0' + day;
    }

    temp=[year,month,day].join('-');
    days.push(temp);
  }
  
  return days;

}