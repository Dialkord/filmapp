<!DOCTYPE html>
<html>
<head>
    <link href="../css/forms.css" rel="stylesheet">
    <title>Add film</title>
    <?php require 'menu.php'; ?>
</head>
<body>
<h2>Find film</h2>
<p>If you want to find film, you need to enter the name\actors below</p>
<form action="../Scripts/searchAction.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-25">
                <label for="name">Name</label>
            </div>
            <div class="col-75">
                <input type="text" minlength="1" id="name" name="name"
                       placeholder="Enter name\actors of film you want to find...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="category">Find by</label>
            </div>
            <div class="col-75">
                <select id="category" name="category">
                    <option value="name">Name</option>
                    <option value="actors">Actors</option>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Find">
        </div>
</form>
</div>
</body>
</html>