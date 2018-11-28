<html>
<head>
    <title>Add was complete</title>
    <style>
        h2 {
            margin-top: 90px;
            margin-left: 20px;
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
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
    }
    if (isset($_POST['format'])) {
        $format = $_POST['format'];
    }
    if (isset($_POST['actors'])) {
        $actors = $_POST['actors'];
    }

    $addAction = new Queries();
    try {
        $addFilm = $addAction->addFilm($name, $year, $format, $actors);

        echo "<h2>Film \"{$name}\" was added!</h2>";
    } catch (PDOException $exception) {
        echo "<h2>Something went wrong! Try again!</h2>";
    }
} ?>
</body>
</html>
