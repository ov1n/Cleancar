datee='09'
$('.calendar-1').calendar()
$('.calendar-2').calendar()
$('.calendar-3').calendar({
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
var selector = document.getElementsByTagName('td');
selector.onclick = function() {
    //console.log('CAT');
    //document.getElementById(date_display).innerHTML=date;
}
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
    console.log(selected_date);
    document.getElementById("date_display").innerHTML=(selected_date);
    //console.log(day);

}