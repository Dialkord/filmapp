<!DOCTYPE html>
<html>
<head>
    <link href="../css/forms.css" rel="stylesheet">
    <title>Add film</title>
    <?php require 'menu.php'; ?>
</head>
<body>
<h2>Delete Film</h2>
<p>If you want to delete film, you need to fill in the form below</p>
<div class="container">
    <form action="../Scripts/deleteFilmAction.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="name">Title</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Enter title of film you want to delete...">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>