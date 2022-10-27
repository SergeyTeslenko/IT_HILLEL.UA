<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/form.css">
    <title>Login</title>
</head>
<body>
<div id="myModal" style="display: block; opacity: 1;">
    <p class="modal-form">Заполните форму LogIn!</p>
    <form  action="/login" method="POST" enctype="multipart/form-data"class="form-content">
        <input type="Email" name="email" id="email" required="">
        <input type="password" name="password"  id="password" required="">
        <br>
        <button type="submit" name="submit" id="button">Заказать</button>
    </form>

</div>
</body>
</html>
