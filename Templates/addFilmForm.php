<!DOCTYPE html>
<html>
<head>
    <link href="../css/forms.css" rel="stylesheet">
    <title>Add film</title>
    <?php require 'menu.php'; ?>
</head>
<body>
<h2>Add Film</h2>
<p>If you want to add new film to our collection, you need to fill in the form below</p>
<div class="container">
    <form action="../Scripts/addFilmAction.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="name">Title</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" minlength="1" name="name" placeholder="Title..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="year">Year</label>
            </div>
            <div class="col-75">
                <input type="number" id="year" name="year" placeholder="Year..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="format">Format</label>
            </div>
            <div class="col-75">
                <select id="format" name="format">
                    <option value="DVD">DVD</option>
                    <option value="VHS">VHS</option>
                    <option value="Blu-ray">Blu-ray</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Actors</label>
            </div>
            <div class="col-75">
                <textarea id="actors" name="actors" minlength="3" placeholder="Actors.."
                          style="height:100px"></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>