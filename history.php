<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tic-Tac-Toe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
    <table>
    <tr><th>Выигрыш</th><th>Проигрыш</th><th>Ничья</th></tr>
    <?php
        require("historyController.php");
        $result = getHistory();
        foreach ($result as $row){
        echo "<tr><td>{$row['count_of_wins']}</td><td>{$row['count_of_loses']}</td><td>{$row['count_of_draws']}</td></tr>";
    }
    ?>
    </table>
</body>
</html>