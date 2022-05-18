<?php
$mysqli = new mysqli('localhost', 'root', 'password', 'site');

if (mysqli_connect_errno()) {
    printf('Соединение не установлено');
    exit();
}
$result = mysqli_query($mysqli, "SELECT FROM `i`");
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
            <input type="submit" value="Сохранить">
        </form>
        <?php

        if (!empty($_FILES['file'])) {
            $file = $_FILES['file'];
            $name = $file['name'];
            $pathFile = __DIR__ . '/img/' . $name;

            if (!move_uploaded_file($file['tmp_name'], $pathFile)) {
                echo "Файл не смог загрузиться";
            }
        }
        ?>
        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>