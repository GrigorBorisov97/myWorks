<html>
    <meta charset="UTF-8">
<?php
    $id = $_POST['ID'];
    $name = $_POST['Име'];
    $phone = $_POST['Телефон'];
    $city = $_POST['Град'];
    $type = $_POST['Категория'];
    $model = $_POST['Модел'];
    $problem = $_POST['Описание'];
    $serial = $_POST['СериенНомер'];
    $buy = $_POST['ДатаНаЗакупуване'];
    $push = $_POST['ДатаНаЗаявката'];
    $garancia = $_POST['Гаранция'];
    $accesoari = $_POST['Аксесоари'];
    $price = $_POST['Цена'];
    $tehnik = $_POST['Техник'];

    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Nadya";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO архив(Име, Телефон, Град, Категория, Модел, Описание, СериенНомер, ДатаНаЗакупуване, ДатаНаЗаявката, Гаранция, Аксесоари, Цена, Техник)
VALUES ('$name', '$phone', '$city','$type', '$model','$problem', '$serial', '$buy', '$push', '$garancia', '$accesoari', '$price', '$tehnik')";



if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM `заявки` WHERE `заявки`.`ID` = '$id'";


if (mysqli_query($conn, $sql)) {
    echo "Поръчката е архивирана успешно";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<a href="../view.php"><button>Върни ме!</button></a>

</html>