var oRows = document.getElementById('MyTable').getElementsByTagName('tr');
var iRowCount = (oRows.length - 1);
var i;

for(i = 1; i <= iRowCount; i++){
    var op = document.getElementById(i).innerHTML;
    var a = moment(op, "YYYYMMDD").fromNow();
    var res = a.split(" ", 3);
    
    if(res[1] == "month" || res[1] == "year" || res[1] == "months" || res[1] == "years"){
        document.getElementById(i).style.backgroundColor = "yellow";
    }    
    else if(res[1] == "date"){
        document.getElementById(i).style.backgroundColor = "lightgrey";
        document.getElementById(i).innerHTML = "Няма въведена дата";
        
    }
    else{
        document.getElementById(i).style.backgroundColor = "lightgreen";
    }
}


