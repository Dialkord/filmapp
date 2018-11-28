<html>
<head>
    <title>Delete was complete</title>
    <style>
        h2 {
            margin-top: 150px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<?php

require '../Resources/DB/queries.php';
require '../Templates/menu.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    $deleteAction = new Queries();
    try {
        if (!empty($deleteAction->findFilmByName($name))) {
            $deleteFilm = $deleteAction->deleteFilm($name);

            echo "<h2>Film \"{$name}\" was deleted!</h2>";
        } else {
            echo "<h2>Film \"{$name}\" was not found!</h2>";
        }
    } catch (PDOException $exception) {
        echo "<h2>Something went wrong, try again!</h2>";
    }
} ?>
</body>
</html>
