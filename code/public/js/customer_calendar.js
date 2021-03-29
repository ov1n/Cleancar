//dummy variable
datee='09'

$('.cust_calendar').calendar({
    date: new Date(),
    autoSelect: true,
    select: function(date) {
        //console.log('SELECT', date)
        //console.log( date)
        datee=date
        //document.getElementById(date_display).innerHTML=date
        
    },
    toggle: function(y, m) {
        //console.log('TOGGLE', y, m)
    },
    
})

//function to display date in needed format
function date_display(){

    //console.log(datee);
    formatted_date = datee.toISOString();
    console.log(formatted_date);

    //split the time part
    formatted_month =formatted_date.substring(0,8);
    formatted_day= formatted_date.substring(8,10);

    selected_date=formatted_month+( parseInt(formatted_day)+1)

    //get data accurately
    //console.log(selected_date);
    //document.getElementById("date_display").innerHTML=(selected_date);
    document.getElementById("date").value=selected_date;
    //console.log(document.getElementById("date").value);

}

//function which validates if the date is not a past date
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