<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon.png">
    <title><?= config('app.name')?></title>
</head>
<body>
<h1>I am User</h1>
<?php if (isset($people) && $people): ?>
    <ul>
        <?php foreach ($people as $user) : ?>
            <li><?= $user['last_name'] . ' ' . $user['first_name']  .   ' Email:  ' . $user['email'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>

