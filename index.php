<!DOCTYPE html>
<html>
<head>
    <title>Films</title>\
    <link href="css/button.css" rel="stylesheet">
    <?php require 'Templates/menu.php'; ?>
</head>
<body>
<button type="button" style="margin-top: 100px"><a href="Resources/allFilmsASC.php">Sort by ASC</a></button>
<?php require 'Resources/allFilms.php'; ?>
</body>
</html>
