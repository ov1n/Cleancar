//function to convert data to readable format
function time_format(value){
    console.log(value);
}

function display_table(e){
    
    //var selectedType = e.value;
    console.log(e);

    x=document.getElementById("normal_service_table");
    y=document.getElementById("full_service_table");
    z=document.getElementById("body_wash_table");
    
    if(e=="Normal Service"){
        

        x.style.visibility = "visible";
        y.style.visibility = "hidden";
        z.style.visibility = "hidden";
    }
    else if(e=="Full Service"){

        x.style.visibility = "hidden";
        y.style.visibility = "visible";
        z.style.visibility = "hidden";

    }else if(e=="Body Wash"){

        x.style.visibility = "hidden";
        y.style.visibility = "hidden";
        z.style.visibility = "visible";

    }
    
}