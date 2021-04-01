let today = new Date();
//create arrays for each slots
var full_array=[];
var normal_array=[];
var body_array=[];

//variables to keep data to pass on to next view
var final_date;
var final_time;

var selected=[];
var nextDay = new Date(today);

function table_beautify(service_name,z){
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
            x[i].innerHTML="";
            x[i].style.backgroundColor = "#ff8c8c";
            x[i].classList.add("blocked");
            x[i].removeAttribute('onclick');
            //x[i].className = 'blocked';
        }else {
            x[i].innerHTML="";
            x[i].style.backgroundColor = '#fff';
            x[i].classList.add("vacant");
        }
        
        //selected highlight effect
        document.querySelectorAll('.vacant').forEach(item => {
            if(item.classList.contains("blocked")){
                console.log("blocked eka");
            }else{
                item.addEventListener('click', event => {
                    //console.log(x);
                    for(let i=0;i<z.length;i++){
                        z[i].style.backgroundColor='white';
                    }
                    item.style.backgroundColor='#40cece';
                    z.push(item);
                })
            }
            
        })
    }
    
}

//function to convert data to readable format
function time_format(value){
    console.log(value);
}

function display_table(e){

    document.getElementById("date_showw").innerHTML ="";
    var days=generate_week();

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

    legend=document.createElement('div');
    legend.innerHTML += "<div style='padding-left: 60px;'><span class='label bookedlabel'>Reserved</span>&nbsp;&nbsp;<span class='label vacantlabel' style=color:black;>Available</span>&nbsp;&nbsp;<span class='label selectedlabel'>Selected</span></br></br></br></div>";
    
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

    for (var i = 0; i <  service_type.length; i++){
        var tr = document.createElement('tr');   

        var td1 = document.createElement('td');
        td1.className = 'times';
        var text1 = document.createTextNode(service_type[i]);
        td1.appendChild(text1);
        tr.appendChild(td1);

        for (var j = 0; j <  days.length; j++){

            var td2 = document.createElement('td');
            var tempArray=[days[j],service_type[i]];
            out_list.push(tempArray);
            td2.className = 'slots';      
            var text2 = document.createTextNode(service_list[days[j]][service_type[i]]);  
            td2.appendChild(text2);  
            tr.appendChild(td2);
        }
        
        table.appendChild(tr);
    }
    table_create.appendChild(legend);
    table_create.appendChild(table);
    table_beautify(service_name,selected);
}

function pass_date_and_time(x,service_name){
    if(service_name=='Full Service'){
        document.getElementById("date").value = full_array[x][0];
        document.getElementById("time").value = full_array[x][1];
        document.getElementById("date_showw").innerHTML = "<div class='date_time_display'><h3>You have selected: </h3>"+"Date: <b>"+full_array[x][0]+"</b></br></br>Time: <b>"+full_array[x][1]+"<b></div>";

    }else if(service_name=='Normal Service'){
        document.getElementById("date").value = normal_array[x][0];
        document.getElementById("time").value = normal_array[x][1];
        document.getElementById("date_showw").innerHTML = "<div class='date_time_display'><h3>You have selected: </h3>"+"Date: <b>"+normal_array[x][0]+"</b></br></br>Time: <b>"+normal_array[x][1]+"<b></div>";

    }else if(service_name=='Body Wash'){
        document.getElementById("date").value = body_array[x][0];
        document.getElementById("time").value = body_array[x][1];
        document.getElementById("date_showw").innerHTML = "<div class='date_time_display'><h3>You have selected: </h3>"+"Date: <b>"+body_array[x][0]+"</b></br></br>Time: <b>"+body_array[x][1]+"<b></div>";
    }
    document.getElementById('reserve').disabled=false;

} 