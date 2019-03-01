<html>
    <meta charset="UTF-8">
<?php
$name = $_POST['clientname'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$category = $_POST['category'];
$model = $_POST['model'];
$serial = $_POST['serial'];
$opisanie = $_POST['opisanie'];
$buy = $_POST['buy'];
$broke = $_POST['broke'];
$service = $_POST['service'];
$gadget = $_POST['gadget'];
$gadgett = implode(',',$gadget);


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

$sql = "INSERT INTO заявки(Име, Телефон, Град, Категория, Модел, Описание, Сериен, Закупен, Пуснат, Гаранционен, Аксесоари)
VALUES ('$name', '$phone', '$city','$category', '$model','$opisanie', '$serial', '$buy', '$broke', '$service', '$gadgett')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<a href="../index2.php"><button>Върни ме!</button></a>
</html>