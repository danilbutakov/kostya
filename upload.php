<?php
if (isset($_POST['submit']) && isset($_POST['my_image'])) {
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $img_size = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Файл слишком велик!";
            header("Loaction: adminI.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            echo ($img_ex);
        }
    } else {
        $em = "неизвестная ошибка!";
        header("Loaction: adminI.php?error=$em");
    }
} else {
    header("Loaction: adminI.php");
}
