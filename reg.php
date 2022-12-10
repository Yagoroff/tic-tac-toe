<?php
    session_start();
    ?>
<html>
    <head>
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    include_once "header.php"
    ?>


<section class="auth-container">
        <div class="email">
          <h2 class="auth-header">Регистрация</h2>
          <form method="POST" class="auth-form" action = "reg_checker.php">
            <p><input required name="regEmail" type="email" size="15" maxlength="15" class="auth-input" required placeholder="Ваша почта"></p>
            <p><input required name="regPassword" type="password" size="15" maxlength="15" class="auth-input" required placeholder="Ваш пароль"></p>
            <p><input required name="fio" type="text" size="15" maxlength="32" class="auth-input" required placeholder="Ваше ФИО"></p>
            <p class="submit"><input type="submit" name="submit" value="Зарегистрироваться" class="auth-submit">
        </p></form>
</div>
</section>
    <?php
    include_once 'footer.php'
    ?>
    </body>
    </html>