<?php
$mysqli = new mysqli('localhost', 'root', 'password', 'site');

if (mysqli_connect_errno()) {
    printf('Соединение не установлено');
    exit();
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
        <?php
        $query = "SELECT * FROM i";
        $row2 = mysqli_query($mysqli, $query);
        foreach ($row2 as $rows2) {
        }
        ?>
        <form action="" method="post" class="admin" enctype="multipart/form-data">
            <input type="file" name="img"><?= $rows2['img']; ?>
            <img src="data:image/png;base64,'.base64_encode($row['image']).'">
            <input type="submit" value="Сохранить">
        </form>
        <?php

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        if ($_POST['img'] != '') {
            $img = $_POST['img'];
        } else {
            $img = $rows2['img'];
        }
        if (isset($img)) {
            $row2 = "INSERT INTO `i` (`id`, `image`) VALUES ('1', '{$image}')";
            $mysqli->query($row2);
        }
        ?>

        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>