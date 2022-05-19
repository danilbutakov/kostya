<?php

$msg = "";

if (isset($_POST['upload'])) {
    $target = "/images/" . basename($_FILES['image']['name']);
}

$db = mysqli_connect("localhost", "root", "password", "site");

$image = $_FILES['image']['name'];
$sql = "INSERT INTO images (image) VALUES ('$image')";
mysqli_query($db, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Картинка загрузилась успешно!";
} else {
    $msg = "Проблемы с загрузкой файла!";
}
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
            <input type="hidden" name="size" value="1000000">
            <input type="file" name="imgage"><br>
            <input type="submit" value="Сохранить" name="upload">
        </form>
        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>