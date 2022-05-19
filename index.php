<?php

include "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <a style="text-align: center;" href="admin.php">Админка</a>
        <section class="hp">
            <h1 id="h1" class="h"><?= $rows['h1']; ?></h1>
            <h2 class="h">Заголовок второго уровня</h2>
            <h3 class="h">Заголовок третьего уровня</h3>
            <h4 class="h"><span>Заголовок</span> четвертого уровня</h4>

            <div class="paragraphs">
                <p id="par" class="par"><strong><?= $rows1['par']; ?></strong></p>
                <p class="par"><i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, expedita.</i></p>
                <p class="par text-flicker"><u>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, exercitationem.</u></p>
                <p class="par"><s>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, vel!</s></p>
                <p class="par">
                    <abb>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, iste?</abb>
                </p>
            </div>
        </section>
        <div class="math">
            <p>a<sup>m</sup>•a<sup>n</sup>=a<sup>m+n</sup></p>
        </div>
        <ol>
            <li>a</li>
            <li>b</li>
            <li>c</li>
        </ol>
        <div class="ul">
            <ul>
                <li class="li">1</li>
                <li class="li1">2</li>
                <li class="li2">3</li>
            </ul>
        </div>
        <div class="yanbtn">
            <button class="yandeks"><a href="https://yandex.ru/">Yandex</a></button>
        </div>
        <div class="img">
            <img class="img1" src="images/Google-Logo-PNG-Photo-Image.png" alt="">
            <div class="img2"></div>
            <img class="img3" src="images/vk.png" alt="">
            <?php
            $sql = "SELECT * FROM images ORDER BY id DESC";
            $res = mysqli_query($mysqli, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) { ?>

                    <div class="alb">
                        <img src="uploads/<?= $images['image_url'] ?>" alt="">
                    </div>

            <?php }
            } ?>
        </div>
        <form action="" class="form">
            <script type="text/javascript">
                window.onload = function() {
                    let button = document.getElementById('input_button_bg_change');
                    let body = document.getElementsByTagName('body')[0];
                    let colors = ['blue', 'grey', 'black', 'white', 'red', 'green', '#aaa', '#FFAACC', 'rgb(122,111,110)'];
                    button.onclick = function() {
                        form.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    };
                };
            </script>
            <input type="button" id="input_button_bg_change" value="Change background color" />
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Телефон">
            <textarea name="Сообщение" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
            <button class="btn">Отправить</button>
        </form>
        <div class="tables">
            <table class="resp-tab" border="1" align="center">
                <tbody>
                    <tr>
                        <th colspan="10">Числитель</th>
                    </tr>
                    <tr>
                        <th>Время</th>
                        <th>Понедельник</th>
                        <th>Вторник</th>
                        <th>Среда</th>
                        <th>Четверг</th>
                        <th>Пятница</th>
                    </tr>
                    <tr>
                        <td rowspan="1">8:30-10:00</td>
                        <td></td>
                        <td>Ин.яз(праткика)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">10:10-11:40</td>
                        <td></td>
                        <td>Выч.мат(лаба)</td>
                        <td></td>
                        <td>Выч.мат(лекция)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">12:10-13:40</td>
                        <td></td>
                        <td>Прог.(лаба)</td>
                        <td>Физ-ра</td>
                        <td>Мат.анализ(лекция)</td>
                        <td>Прог(лекция)</td>
                    </tr>
                    <tr>
                        <td rowspan="1">13:50-15:20</td>
                        <td>ООП(лаба)</td>
                        <td></td>
                        <td>Прог.(лаба)</td>
                        <td>Мат.анализ(праткика)</td>
                        <td>ООП(лекция)</td>
                    </tr>
                    <tr>
                        <td rowspan="1">15:30-17:00</td>
                        <td>Типы данных(лаба)</td>
                        <td></td>
                        <td></td>
                        <td>История(праткика)</td>
                        <td>Выч.Мат(праткика)</td>
                    </tr>
                    <tr>
                        <td rowspan="1">17:10-18:40</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">18:45-20:15</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <table class="resp-tab" border="1" align="center">
                <tbody>
                    <tr>
                        <th colspan="10">Знаменатель</th>
                    </tr>
                    <tr>
                        <th>Время</th>
                        <th>Понедельник</th>
                        <th>Вторник</th>
                        <th>Среда</th>
                        <th>Четверг</th>
                        <th>Пятница</th>
                        <th>Суббота</th>
                    </tr>
                    <tr>
                        <td rowspan="1">8:30-10:00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">10:10-11:40</td>
                        <td>Физ-ра</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Ин.яз(праткика)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">12:10-13:40</td>
                        <td>Прог(лекция)</td>
                        <td>Прог(лаба)</td>
                        <td></td>
                        <td>История(лекция)</td>
                        <td>Ин.яз(праткика)</td>
                        <td>Мат.анализ(лекция)</td>
                    </tr>
                    <tr>
                        <td rowspan="1">13:50-15:20</td>
                        <td>Типы данных(лекция)</td>
                        <td>Прог(лаба)</td>
                        <td>ООП(лекция)</td>
                        <td>История(праткика)</td>
                        <td></td>
                        <td>Мат.анализ(праткика)</td>
                    </tr>
                    <tr>
                        <td rowspan="1">15:30-17:00</td>
                        <td></td>
                        <td></td>
                        <td>ООП(лаба)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">17:10-18:40</td>
                        <td></td>
                        <td></td>
                        <td>Типы данных(лаба)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="1">18:45-20:15</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="#" class="header__link sign-up" id="open__pop_up">Video</a>
        <section class="popup" id="pop_up">
            <div class="popup__container">
                <div class="popup__body">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/YPRaA6KhyXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="btnvid">
                            <button class="btnvideo" id="close__pop_up">Кнопка</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4882.981548093942!2d104.26211414792905!3d52.27079157812597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da824a8ee4f155d%3A0x368423aaef9b2b13!2z0JjRgNC60YPRgtGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC_0YPRgtC10Lkg0YHQvtC-0LHRidC10L3QuNGP!5e0!3m2!1sru!2sru!4v1652779756938!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <script src="js/popup.js"></script>
</body>

</html>