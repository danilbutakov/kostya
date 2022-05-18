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
        <h1><a href="">Редактирование par</a></h1>
        <h3><a href="admin.php">Редактирование h1</a></h3>
        <h3><a href="adminI.php">Редактирование img</a></h3>
        <?php
        $query = "SELECT * FROM p";
        $row = mysqli_query($mysqli1, $query1);
        foreach ($row1 as $rows1) {
        }
        ?>
        <form action="" method="post" class="admin">
            <input type="text" name="par" placeholder="<?= $rows1['par']; ?>">
            <input type="submit" value="Сохранить">
        </form>
        <?php

        if ($_POST['par'] != '') {
            $par = $_POST['par'];
        } else {
            $par = $rows1['par'];
        }
        if (isset($par)) {
            $row1 = "UPDATE p SET par='$par' WHERE id=1";
            $mysqli->query($row)1;
        }
        ?>

        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>