<?php
include __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>
    <div>
        <h1><a href="adminI.php">Редактирование img</a></h1>
        <h3><a href="adminP.php">Редактирование par</a></h3>
        <h3><a href="admin.php">Редактирование h1</a></h3>

        <form action="" method="post" class="admin" enctype="multipart/form-data">
            <input type="file" name="file"><br>
            <input type="submit" value="Сохранить" name="upload">
        </form>
        <?php
        if (isset($_POST['upload'])) {
            if (!empty($_FILES['file']['tmp_name'])) {
                $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            }
            $con->query("INSERT INTO i (image) VALUES ('$image')");
        }
        ?>
        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>