<?php
include "db.php";

if (isset($_POST['submit']) && isset($_POST['my_image'])) {
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Файл слишком велик!";
            header("Loaction: adminI.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else {
                $em = "Вы не можете загрузить файл этого типа!";
                header("Loaction: adminI.php?error=$em");
            }
        }
    } else {
        $em = "неизвестная ошибка!";
        header("Loaction: adminI.php?error=$em");
    }
} else {
    header("Loaction: adminI.php");
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
            <input type="file" name="my_image"><br>
            <input type="submit" value="Сохранить" name="submit">
        </form>
        <h2><a href="index.php">Выход</a></h2>
    </div>
</body>

</html>