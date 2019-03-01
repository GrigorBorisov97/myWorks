<?php $title = "Нова заявка";
include "php/header.php"; ?>
<header><h1>Сервиза на Надя</h1></header>
    <div>
    <a href="index.html"><img src="image/back.png" class="back"></a>

        <form action="php/calc.php" method="POST">
        <table class="indexTable">
            <tr>
                <td>
                    <h2>Име на клиента:</h2>
                </td>   
                <td>            
                    <input type="text" placeholder="Въведи име" name="clientname">
                </td>
            </tr>  
            <tr>
                <td>
                    <h2>Телефон:</h2>
                </td>
                <td>
                    <input type="tel" placeholder="Телефон" name="phone" required>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Град</h2>
                </td>
            
                <td>
                    <select name="city">
                
                    <?php include "php/foreach-model.php" ?>
                
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Категория</h2>
                </td>
                    
                <td>
                <label> Категория: </label>
                <select id="opt" onchange="myFunction()" name="category"> 
                <?php include "php/model-foreach.php"
                    
                ?>
               
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Модел на уреда</h2>
                </td>
                <td>
            <label> Модел: </label>
                    <select name="model" id="model">
                    </select>
                    
                </div>
            </tr>
            <tr>
                <td>
                    <h2>Сериен номер:</h2>
                </td>
                <td>
                    <input name="serial" type="number" placeholder="Сериен номер">
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Описание на проблема</h2>
                </td>
                <td>
                    <input name="opisanie" rows="7" style="margin: 0px; width: 302px; height: 115px;">
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Дата на закупуване</h2>
                </td>
                <td>
            <input name="buy" type="date">
                </td>
            </tr>
            <tr>
                <td>
            <h2>Дата на приемане</h2>
                </td>
                <td>
            <input name="broke" type="date" >
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Гаранция?</h2>
                </td>
                <td>
            <label class="on">Има:
            <input class="on" name="service" value="Да" type="radio"></label>
            <label class="off">Няма:
            <input class="off" name="service" value="Не" type="radio"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Аксесоари</h2>
                </td>
                <td id="accesoari">
                    

                </td>
            </tr>   
            <tr>
                <td colspan="2">
            <input type="submit" value="submit">
                </td>
            </tr>
        </form>
    </table>
    <script src="javascript/model.js"></script>
    <script src="javascript/jquerry.js"></script>
</body>
</html>