<?php
    if ((isset($_POST['regEmail'])) && (isset($_POST['regPassword'])) && (isset($_POST['fio'])) )
    {
        $email = $_POST['regEmail']; 
        $password=$_POST['regPassword']; 
        $fio=$_POST['fio']; 
        
        $email = stripslashes($email);
        $email = htmlspecialchars($email);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        $fio = stripslashes($fio);
        $fio = htmlspecialchars($fio);

        $email = trim($email);
        $password = trim($password);
        $fio = trim($fio);

        include ("bd.php");

        $result = mysqli_query($db,"SELECT id FROM `user` WHERE email='$email'");
        $myrow = $result->fetch_array();
        if (!empty($myrow['id'])) {
            exit ("Извините, введённая вами почта уже зарегистрирована.");
        }
        $result2 = mysqli_query ($db,"INSERT INTO user (email, password, FIO) VALUES('$email', '$password','$fio')");
        if ($result2=='TRUE')
        {
            echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
        }
        else {
            echo "Ошибка! Вы не зарегистрированы.";
        }
    }
?>