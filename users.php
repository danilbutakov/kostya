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
        <h1>Просмотр users</h1>
        <h3><a href="adminP.php">Редактирование par</a></h3>
        <h3><a href="adminI.php">Редактирование img</a></h3>
        <h3><a href="admin.php">Редактирование h1</a></h3>
        <?php
        $query = "SELECT * FROM users";
        $row = mysqli_query($mysqli, $query);
        foreach ($row as $rows) {
        }
        ?>
        <form action="" method="post" class="admin">
            <input type="text" name="name" placeholder="<?= $rows['name']; ?>">
            <input type="text" name="phone" placeholder="<?= $rows['phone']; ?>">
            <textarea name="message" id="" cols="30" rows="10" placeholder="<?= $rows['message']; ?>"></textarea>
            <input type="submit" value="Сохранить">
        </form>
        <?php

        if ($_POST['name'] != '') {
            $name = $_POST['name'];
        } else {
            $name = $rows['name'];
        }
        if ($_POST['phone'] != '') {
            $phone = $_POST['phone'];
        } else {
            $phone = $rows['phone'];
        }
        if ($_POST['message'] != '') {
            $message = $_POST['message'];
        } else {
            $message = $rows['message'];
        }
        if (isset($name, $phone, $message)) {
            $row = "UPDATE users SET name = '$name', phone = '$phone', message = '$message' WHERE id =1 ";
            $mysqli->query($row);
        }
        ?>

        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>