<?php

ob_start();

$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$howdidyouhearaboutus=$_POST['howdidyouhearaboutus'];

$whatkindofworkforcedoyouhave=$_POST['whatkindofworkforcedoyouhave'];

echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $howdidyouhearaboutus;
echo "<br>";
echo $whatkindofworkforcedoyouhave;
echo "<br>";

$sv = "localhost";

$username = "xxxxxxx";

$password = 'xxxxxxx';

$db = "xxxxxxx";

$conn = new mysqli($sv, $username, $password, $db); 

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
} else {

echo 'Connection successful!';
} 

$sql = "INSERT INTO xxxxxx (firstname, lastname, email, phone, howdidyouhearaboutus, whatkindofworkforcedoyouhave) VALUES ('$firstname','$lastname', '$email', '$phone', '$howdidyouhearaboutus', '$whatkindofworkforcedoyouhave')";

$conn->query($sql);

$conn->close(); 

echo "<br>";
echo 'Data saved in database!';

header("Location: xxxxxxx/confirmation_page.php");

exit();

?>
