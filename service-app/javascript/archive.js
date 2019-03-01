function archive(id){
    var str = ($(id).html());
    var res = str.split("</td><td>");
    var form = document.getElementById("archiveForm");
    for(i=0; i<res.length; i++){
        form.innerHTML = res[i];
    }


    
}
