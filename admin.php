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
    <link rel="stylesheet" href="/css/admin.css">

</head>

<body>
    <div>
        <h1>Редактирование h1</h1>
        <?php
        $query = "SELECT * FROM h";
        $row = mysqli_query($mysqli, $query);
        foreach ($row as $rows) {
        }
        ?>
        <form action="" method="post" class="admin">
            <input type="text" name="h1" placeholder="<?= $rows['h1']; ?>">
            <input type="submit" value="Сохранить">
        </form>
        <?php

        if ($_POST['h1'] != '') {
            $h1 = $_POST['h1'];
        } else {
            $h1 = $rows['h1'];
        }
        if (isset($h1)) {
            $row = "UPDATE h SET h1='$h1' WHERE id=1";
            $mysqli->query($row);
        }
        ?>
    </div>
</body>

</html>