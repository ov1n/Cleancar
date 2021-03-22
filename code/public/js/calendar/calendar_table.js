let today = new Date();
console.log(today);

var nextDay = new Date(today);


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

        create_table(normal_service_slots,days,full_service_list);
    }
    else if(e=="Full Service"){

        create_table(full_service_slots,days,full_service_list);

    }else if(e=="Body Wash"){

        create_table(body_wash_slots,days,full_service_list);
    }
    
}

//days is an array containing dates 
function create_table(service_type,days,service_list){

    document.getElementById("table_create").innerHTML = "";

    var table = document.createElement('table');

    //Add heading rows
    var trh = document.createElement('tr');

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

    for (var i = 0; i <  service_type.length; i++){
        console.log(service_type[i]);
        var tr = document.createElement('tr');   

        var td1 = document.createElement('td');
        var text1 = document.createTextNode(service_type[i]);
        //console.log(service_type[i]);
        td1.appendChild(text1);
        tr.appendChild(td1);

        //console.log(days);

        for (var j = 0; j <  days.length; j++){
            //console.log(service_list[days[j]]);

            var td2 = document.createElement('td');       
            var text2 = document.createTextNode(service_list[days[j]][service_type[i]]);
            //console.log(j);    
            td2.appendChild(text2);  
            tr.appendChild(td2);
        }

        table.appendChild(tr);
    }
    table_create.appendChild(table);
}