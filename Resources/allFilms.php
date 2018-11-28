<link href="../css/index.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../Scripts/hideList.js"></script>
<ul style="margin-top: 90px" class="list-rectangle" id="expList">
    <?php

    require 'DB/queries.php';

    $query = new Queries();

    $films = $query->getAllFilms();

    foreach ($films as $film) {
        echo "<li style='margin-left: 10px;'>Title: {$film['name']}      
                    <ul>
                        <li>Year: {$film['year']}</li>
                        <li>Format: {$film['format']}</li>
                        <li>Actors: {$film['actors']}</li>
                    </ul>
             </li>";
    }
    ?>
</ul>