function archive(id){
    var confi = confirm("Сигурни ли сте, че искате да архивирате поръчката?");

    if(confi == true){
        var td = id.getElementsByTagName("td");
        var names = ["ID","Име","Телефон","Град","Категория","Модел","Описание","СериенНомер","ДатаНаЗакупуване","ДатаНаЗаявката","Гаранция","Аксесоари"];
        
        for(i=1;i < 12; i++){
            document.getElementById("archiveForm").innerHTML += "<input name="+names[i]+" value='"+td[i].innerHTML+"'>";
        }

        document.getElementById("archiveForm").innerHTML += "<input name="+names[0]+" value="+td[0].innerHTML+">";
    

        names[12] = "Цена";
        var price = prompt("Цена на ремонта");
        document.getElementById("archiveForm").innerHTML += "<input name="+names[12]+" value="+price+">";
    
        names[13] = "Техник";
        var tehnik = prompt("Име на техника, поправил уреда?");
        document.getElementById("archiveForm").innerHTML += "<input name="+names[13]+" value='"+tehnik+"'>";

        document.getElementById("archiveForm").submit();
        }
   
}
