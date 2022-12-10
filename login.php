<?php
    session_start();
?>
<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Главная страница</title>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    include_once 'header.php'
    ?>

    <section class="auth-container">
        <div class="email">
          <h2 class="auth-header">Вход в систему</h2>
          <form method="post" class="auth-form" action ="login_checker.php">
            <p><input type="text" name="email" value="" size="15" maxlength="15" class="auth-input" required placeholder="Email"></p>
            <p><input type="password" name="password" value="" size="15" maxlength="15" class="auth-input" required placeholder="Пароль"></p>
            <div class="submit"><input type="submit" name="commit" value="Войти" class="auth-submit">
            </div>
            </form>
            <div class="submit">
            <form action="reg.php">
              <p><button class="auth-submit">Зарегистрироваться</button></p>
            </form> 
            </div>           
      </div>   
    </section>   
    </div>
    <?php
    include_once 'footer.php'
    ?>
    </body>
</html>