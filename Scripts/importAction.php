<!DOCTYPE html>
<html>
<head>
    <style>
        h2 {
            margin-top: 90px;
            margin-left: 10px;
        }
    </style>
    <title>Import</title>
    <?php require '../Templates/menu.php'; ?>
</head>
<body>
<?php
require '../Resources/DB/queries.php';

if (!empty($_FILES['file']['tmp_name'])) {

    $content = file($_FILES['file']['tmp_name']);

    foreach ($content as $item) {
        $ex = explode(":", $item);
        if (isset($ex[1])) {
            $array[] = $ex[1];
        }
    }
    $query = new Queries();

    $allData = array_chunk($array, 4);

    foreach ($allData as $data) {
        try {
            $query->addFilm($data[0], $data[1], $data[2], $data[3]);
        } catch (PDOException $exception) {
            exit("<h2>{$exception->getMessage()}</h2>");
        }
    }

    echo "<h2> Films was added successfully!</h2>";
} else {
    echo "<h2> Something went wrong!</h2>";
}
?>
</body>
</html>

/*$regex = '/Title:\s(.*)\r\nRelease Year:\s(.*)\r\nFormat:\s(.*)\r\nStars:\s(.*)\r\n/';
$matches = [];
preg_match_all($regex, $text, $matches, PREG_SET_ORDER);
foreach ($matches as $match) {
    $this->addFilm($match[1], $match[2], $match[3], $match[4]);
}*/