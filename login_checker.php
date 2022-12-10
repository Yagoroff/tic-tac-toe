<?php
session_start();
      if ((isset($_POST['email'])) && (isset($_POST['password'])))
      {
          $email = $_POST['email']; 
          $password=$_POST['password']; 
          //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
          $email = stripslashes($email);
          $email = htmlspecialchars($email);
          $password = stripslashes($password);
          $password = htmlspecialchars($password);
          //удаляем лишние пробелы
          $email = trim($email);
          $password = trim($password);
          // подключаемся к базе
          include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

          $result = mysqli_query($db,"SELECT * FROM user WHERE email='$email'"); //извлекаем из базы все данные о пользователе с введенным логином
          $myrow = mysqli_fetch_array($result);
          if (empty($myrow['email']))
          {
          //если пользователя с введенным логином не существует
          echo "Извините, введённый вами email или пароль неверный.";
          }
          else {
              //если существует, то сверяем пароли
              if ($myrow['password']==$password) {
              //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
              $_SESSION['email']=$myrow['email']; 
              $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
              $_SESSION['FIO']=$myrow['FIO']; 
              header('Location: index.php');
              }
          else {
              //если пароли не сошлись
              echo "Извините, введённый вами email или пароль неверный.";
              }
          }
      }
      ?>