<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ассортимент</title>
</head>
<body>
<h1>Ассортимент</h1>
<ol>
    <?php
    $mysqli = new mysqli("my-sql", "user", "password", "appDB");
    $parts = $mysqli->query("SELECT name FROM parts");
    foreach ($parts as $row){
        echo "<li>{$row['name']}</li>";
    }

    ?>
</ol>
</body>
</html>