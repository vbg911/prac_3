<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цены</title>
</head>
<body>
<h1>Цены</h1>
<table>
    <tr><th>Название</th><th>Цена</th></tr>
<?php
$mysqli = new mysqli("pract3-my-sql-1", "user", "password", "appDB");
$parts = $mysqli->query("SELECT name, price FROM parts");
foreach ($parts as $row){
    echo "<tr><td>{$row['name']}</td><td>{$row['price']}</td></tr>";
}
?>
</table>
</body>
</html>