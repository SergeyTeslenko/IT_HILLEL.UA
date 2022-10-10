<!DOCTYPE html>
<html>
<head>
    <title>User</title>
</head>
<body>
<h1>I am User</h1>
<?php
foreach ($people as $currentPeople) : ?>
    <ul>
        <?php foreach ($currentPeople as $user) : ?>
            <li><?= print_r($currentPeople); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</body>
</html>