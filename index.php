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
    include_once ("bd.php");
    include_once 'header.php';
    if(isset($_SESSION['FIO']))
    {
        echo "<h1>Привет, ".$_SESSION['FIO']. "!</h1>";
    }else
    {
        echo "Вы еще не авторизовались";
    }
    ?>
    <form method="POST">
        <input name="outer" type="submit" value="Выйти" class="auth-submit"/>
    </form>
    <?php 
      if( isset( $_POST['outer'] ) )
      session_unset();
?>
</body>
</html>