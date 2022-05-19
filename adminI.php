<?php

$msg = "";

if (isset($_POST['upload'])) {
    $target = "img/" . basename($_FILES['image']['name']);
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
        <?php
        if (isset($_POST['upload'])) {
            if (!empty($_FILES['img_upload']['tmp_name'])) {
                $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
            }
            $connection->query("INSERT INTO images (img) VALUES ('$img')");
        }
        ?>
        <?php
        $query = $connection->query("SELECT * FROM images ORDER BY id DESC");
        while ($row3 = $query->fetch_assoc()) {
            $showImg = base64_encode($row3['img']); ?>
            <img src="data:image/jpeg;base64, <?php echo $showImg ?>" alt="">
        <?php } ?>
    </div>
</body>

</html>