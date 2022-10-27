<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon.png">
    <link rel="stylesheet" href="/assets/form.css">
    <title><?= config('app.name') ?></title>
</head>
<body>
<section class="contacts" id="contacts">
    <div class="container">
        <h2>Контакты</h2>
        <div class="info">
            <div class="form-left">
                <form action="#" method="POST" enctype="multipart/form-data" class="form">
                    <h3>Заполните форму, чтобы оказаться в нашей команде</h3>
                    <input type="text" name="first_name" placeholder="Name"  id="first_name"><br><br>
                    <input type="text" name="last_name" placeholder="Surname"  id="last_name"><br><br>
                    <input type="email" name="email" placeholder="Email" id="email" required=""><br><br>
                    <input type="login" name="login" placeholder="Login" id="login" ><br><br>
                    <input type="submit" class="btn">
                </form>
            </div>

        </div>
    </div>
</section>
</body>
</html>