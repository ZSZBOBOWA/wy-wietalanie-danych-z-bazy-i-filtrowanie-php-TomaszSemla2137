<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="p_edu";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("błąd połączenia:".mysqli_connect_error());
}
$sql = "select * from uczniowie";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >0){
    echo "<table border='1'><tr><th>Imię</th><th>Nazwisko</th><th>Wiek</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["Imie"]."</td><td>".$row["Nazwisko"]."</td><td>".$row["Wiek"]."</td></tr>";}
echo "</table>";
}
else {
    echo "Brak wyników";
}
mysqli_close($conn);
    ?>
</body>
</html>