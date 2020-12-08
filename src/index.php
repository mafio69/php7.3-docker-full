<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample</title>
</head>
<body>
<h3>Hello word</h3>
<br>
<hr>
<p>
<ul>
    <li>Php info <?= phpversion() ?></li>
    <li>SQL info: <?= system('mysql --version') ?></li>
    <li>Server info: : <?= system('service apache2 status') ?></li>
</ul>
</p>
<br>
<hr>
<?php phpinfo(); ?>
</body>
</html>