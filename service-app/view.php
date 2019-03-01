<?php $title = "Заявки";
include "php/header.php"; ?>
<a href="index.html"><img src="image/back.png" class="back"></a>

<h1 class="viewH1">Заявки</h1>
<form method="POST" action="php/arhivirane.php" id="archiveForm"></form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Nadya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `заявки` ORDER BY `заявки`.`Пуснат` ASC";
$result = $conn->query($sql);




echo "<table class='viewTable' id='MyTable'>
<tr>
<th>ID</th>
<th>Име</th>
<th>Телефон</th>
<th>Град</th>
<th>Категория</th>
<th>Модел</th>
<th>Описание</th>
<th>Сериен номер</th>
<th>Дата на закупуване</th>
<th>Дата на заявката</th>
<th>Гаранция?</th>
<th>Аксесоари</th>
<th>*</th>
</tr>";


if ($result->num_rows > 0) {
    // output data of each row
    $i=1;
while($row = mysqli_fetch_array($result)) {
    echo "<tr id=tr".$i.">";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Име'] . "</td>";
    echo "<td>" . $row['Телефон'] . "</td>";
    echo "<td>" . $row['Град'] . "</td>";
    echo "<td>" . $row['Категория'] . "</td>";
    echo "<td>" . $row['Модел'] . "</td>";
    echo "<td>" . $row['Описание'] . "</td>";
    echo "<td>" . $row['Сериен'] . "</td>";
    echo "<td>" . $row['Закупен'] . "</td>";
    echo "<td id=".$i.">" . $row['Пуснат'] . "</td>";
    echo "<td>" . $row['Гаранционен'] . "</td>";
    echo "<td>" . $row['Аксесоари'] . "</td>";
    echo "<td><button onclick='archive(tr".$i++.")' class='archive'>Архив <i class='fas fa-marker'></i></button></td>";
    echo "</tr>";
};
}
else {
    echo "0 results";
}

echo "</table>";
$conn->close(); 
?>

<script src="javascript/colordate.js"></script>
<script src="javascript/forarchive.js"></script>
</body>
</html>