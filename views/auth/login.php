<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/form.css">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div id="myModal" style="display: block; opacity: 1;">
    <p class="modal-form">Заполните форму LogIn!</p>
    <form  action="/login" method="POST"  class="form-content">
        <label for="email"></label><input type="Email" name="email" id="email" placeholder="email" required="">
        <label for="password"></label><input type="password" name="password" id="password" placeholder="password" required="">
        <br>
        <button type="submit" name="submit" id="button">Login</button>

        <?php if (isset($error)): ?>
            <span style="color: red"><?= $error ?></span>
        <?php endif;?>
    </form>

</div>
</body>
</html>
