<html>
<head>
    <title>Search was complete</title>
    <link href="../css/index.css" rel="stylesheet">
    <script src="../Scripts/hideList.js"></script>
    <style>
        h2 {
            margin-top: 90px;
            margin-left: 20px;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>
<body>
<ul id="expList" class="list-rectangle">
    <?php

    require '../Resources/DB/queries.php';
    require '../Templates/menu.php';

    const SWW = "<h2>Something went wrong!</h2>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])) {
            if ($_POST['name'] !== "") {
                $name = $_POST['name'];
            } else {
                exit(SWW);
            }
        }
        if (isset($_POST['category'])) {
            $category = $_POST['category'];
        } else {
            exit(SWW);
        }

        $searchAction = new Queries();
        try {
            if ($category == 'name') {
                $searchResult = $searchAction->findFilmByName($name);
            } elseif ($category == 'actors') {
                $searchResult = $searchAction->findFilmByActors($name);
            }

            if (empty($searchResult)) {
                echo "<h2>Nothing to show</h2>";
            } else {
                echo "<h2>Results:</h2>";
                foreach ($searchResult as $item) {
                    echo "<li style='margin-left: 10px;'>Title: {$item['name']}
                            <ul>
                                <li>Year: {$item['year']}</li>
                                <li>Format: {$item['format']}</li>
                                <li>Actors: {$item['actors']}</li>
                            </ul>
                          </li>";
                }
            }
        } catch (PDOException $exception) {
            echo SWW;
        }
    } else {
        exit(SWW);
    } ?>
</ul>
</body>
</html>
