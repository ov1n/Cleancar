let today = new Date();
//create arrays for each slots
var full_array=[];
var normal_array=[];
var body_array=[];

//variables to keep data to pass on to next view
var final_date;
var final_time;

//console.log(today);

var nextDay = new Date(today);

function table_beautify(service_name){
    var x=document.getElementsByClassName('slots');

    //console.log(x.length);
    for(var i=0;i<x.length;i++){
        if(service_name=='Normal Service'){
            console.log(`pass_date_and_time(${i},Normal Service)`);
            x[i].setAttribute('onclick',`pass_date_and_time(${i},'Normal Service')`); //WHOAH
        }else if(service_name=='Full Service'){
            x[i].setAttribute('onclick',`pass_date_and_time(${i},'Full Service')`); //WHOAH
        }else if(service_name=='Body Wash'){
            x[i].setAttribute('onclick',`pass_date_and_time(${i},'Body Wash')`); //WHOAH
        }
        
        console.log(i);
        if(x[i].innerHTML<="0"){
            //x[i].innerHTML="";
            x[i].style.backgroundColor = "red";
        }

        else{
            //x[i].innerHTML="";
            x[i].style.backgroundColor = '#1cd10f';
        }
    }
    
}


function dasd(){
    console.log(full_service_slots);
    console.log(normal_service_slots);
    console.log(body_wash_slots);
}

//function to convert data to readable format
function time_format(value){
    console.log(value);
}

function display_table(e){

    var days=[];

    var tomorrow = new Date(today);
    for(var i = 1; i < 7; i++){
        tomorrow.setDate(today.getDate() +i);
        days.push(tomorrow.toISOString().substring(0,10));
    }

    //var selectedType = e.value;
    console.log(e);
    console.log(today);

    if(e=="Normal Service"){

        create_table(normal_service_slots,days,normal_service_list,normal_array,'Normal Service');
    }
    else if(e=="Full Service"){

        create_table(full_service_slots,days,full_service_list,full_array,'Full Service');

    }else if(e=="Body Wash"){

        create_table(body_wash_slots,days,body_wash_list,body_array,'Body Wash');
    }
    
}

//days is an array containing dates 
function create_table(service_type,days,service_list,out_list,service_name){

    document.getElementById("table_create").innerHTML = "";

    var table = document.createElement('table');

    //Add heading rows
    var trh = document.createElement('tr');
    trh.className = 'headings';

    var time_slots = document.createElement('th');
    time_slots.appendChild(document.createTextNode('Time'));
    trh.appendChild(time_slots);

    //add the days HOW TO PROGRESS?
    for (var i = 0; i <  days.length; i++){
        var day = document.createElement('th');
        day.appendChild(document.createTextNode(days[i]));
        trh.appendChild(day);
    }
    table.appendChild(trh);

    //get list of days and times into an array
    console.log([days]);
    $.each(days, function(key, value) {
        //alert( "The key is '" + key);
    });

    for (var i = 0; i <  service_type.length; i++){
        //console.log(full_array);
        var tr = document.createElement('tr');   

        var td1 = document.createElement('td');
        td1.className = 'times';
        var text1 = document.createTextNode(service_type[i]);
        //console.log(service_type[i]);
        td1.appendChild(text1);
        tr.appendChild(td1);

        //console.log(days);

        for (var j = 0; j <  days.length; j++){
            //console.log(service_list[days[j]]);

            var td2 = document.createElement('td');
            var tempArray=[days[j],service_type[i]];
            //full_array.push(service_list);
            out_list.push(tempArray);
            //console.log(tempArray);
            td2.className = 'slots';      
            var text2 = document.createTextNode(service_list[days[j]][service_type[i]]);
            
            //console.log(j);    
            td2.appendChild(text2);  
            tr.appendChild(td2);
        }

        table.appendChild(tr);
    }
    table_create.appendChild(table);
    table_beautify(service_name);
    //console.log(out_list);
}

function pass_date_and_time(x,service_name){
    console.log(service_name);
    if(service_name=='Full Service'){
        document.getElementById("date").value = full_array[x][0];
        document.getElementById("time").value = full_array[x][1];
        //console.log(full_array[x][0]);
        //console.log(full_array[x][1]);
    }else if(service_name=='Normal Service'){
        document.getElementById("date").value = normal_array[x][0];
        document.getElementById("time").value = normal_array[x][1];
        //console.log(normal_array[x][1]);
    }else if(service_name=='Body Wash'){
        document.getElementById("date").value = body_array[x][0];
        document.getElementById("time").value = body_array[x][1];
        //console.log(body_array[x][0]);
        //console.log(body_array[x][1]);
    }
} 