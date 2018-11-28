<!DOCTYPE html>
<html>
<head>
    <link href="../css/forms.css" rel="stylesheet">
    <title>Add film</title>
    <?php require 'menu.php'; ?>
</head>
<body>
<h2>Add films from .txt file</h2>
<p>If you want to add new films to our collection, you need to fill in the form below</p>
<div class="container">
    <form action="../Scripts/importAction.php" method="post" enctype="multipart/form-data">
        <input name="file" type="file" style="margin-bottom: 10px" accept=".txt">
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>