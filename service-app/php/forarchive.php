function archive(id){
    var str = ($(id).html());
    var res = str.split("</td><td>");
    var price = prompt("Цена на ремонта");
    var form = document.getElementById("archiveForm").innerHTML;
    form = "<input name="name" value="res[0]">";
    form = "<input name="phone" value="res[1]">";
    form = "<input name="city" value="res[2]">";
    form = "<input name="category" value="res[3]">";
    form = "<input name="model" value="res[4]">";
    form = "<input name="opisanie" value="res[5]">";
    form = "<input name="serial" value="res[6]">";
    form = "<input name="buydate" value="res[7]">";
    form = "<input name="pushdate" value="res[8]">";
    form = "<input name="garancia" value="res[9]">";
    form = "<input name="acesoari" value="res[10]">";
    form = "<input name="price" value="">";
    document.getElementById("arhiveForm").submit();
}
