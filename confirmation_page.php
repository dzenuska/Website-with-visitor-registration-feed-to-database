<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  text-align: center;
}
</style>
</head>
<body>
<body style="background-color:#ffffe6;">
   <h1 style="font-family: Garamond Premier Roman">Thank you for submitting your details. You will hear from us very soon!</h1>
   <?php

$sv = "localhost";

$username = "xxxxxxxxxx";

$password = 'xxxxxxxxxxxx';

$db = "xxxxxxxxx";

$conn1 = new mysqli($sv, $username, $password, $db);

if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}
$sql = "SELECT ID FROM visitors ORDER BY ID DESC LIMIT 1";
$result = $conn1->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
{
//    echo "Visitor #: " . $row["ID"]. "<br>";

$visitor_count = $row["ID"];
    
echo "<h2 align='center'> <font color=grey  size='4pt'>Visitor # $visitor_count</font> </h2>";
    
}
    
} 
else 
{
    echo "0 results";
    
}
$conn1->close();

?>
   
</body>
</html>
