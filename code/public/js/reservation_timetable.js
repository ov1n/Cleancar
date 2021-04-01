window.onload = advanced_convert;

function advanced_convert(){

    //get all elements of class
    var x = document.getElementsByClassName("advanced_convert");
    var i;
    for (i = 0; i < x.length; i++) {
        console.log(x[i].innerHTML);

        if(x[i].innerHTML== 1){
            x[i].innerHTML="Yes";
            x[i].style.color="green";
        }else if(x[i].innerHTML== 2){
            x[i].innerHTML="Cancelled";
            x[i].style.color="yellow";
        }else {
            x[i].style.color="red";
            x[i].innerHTML="No"
        }
        x[i].style.fontWeight = "900";  
    }

}
