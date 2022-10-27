<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/login.css">
    <title>Register</title>
</head>
<body>
<div id="myModal" style="display: block; opacity: 1;">
    <p class="modal-form">Заполните форму Register!</p>


    <form  action="/register" method="POST" enctype="multipart/form-data" class="form-content">
        <div>
        <input type="name" placeholder="Имя" name="first_name" required="">
        <input type="name" placeholder="Фамилия" name="last_name" required="">
        <input type="email" placeholder="Почта" name="email" required="">
        <input type="tel" placeholder="Телефон" name="phone" required="">
        <input type="password" placeholder="Пароль" name="password" required="">
        <br>
        <button type="submit" class="button" id="button">Заказать</button>
        </div>

        <?php if(isset($message)):?>
        <p><?= $message ?></p>
        <?php endif; ?>
    </form>

</div>
</body>
</html>
