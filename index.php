<?php
require_once __DIR__ . 'admin.php';

$mysqli = new mysqli('localhost', 'root', 'password', 'site');

if (mysqli_connect_errno()) {
    printf('Соединение не установлено');
    exit();
}

$result = $query->query("SELECT * FROM h");
$res = mysqli_fetch_assoc($row);
foreach ($result as $rows) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <a style="text-align: center;" href="admin.php">Админка</a>
        <section class="hp">
            <h1 class="h"><?php $rows['h1']; ?></h1>
            <h2 class="h">Заголовок второго уровня</h2>
            <h3 class="h">Заголовок третьего уровня</h3>
            <h4 class="h"><span>Заголовок</span> четвертого уровня</h4>

            <div class="paragraphs">
                <p class="par"><strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, expedita.</strong></p>
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
            <img class="img1" src="img/Google-Logo-PNG-Photo-Image.png" alt="">
            <div class="img2"></div>
            <img class="img3" src="img/vk.png" alt="">
        </div>
        <form action="" class="form">
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
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YPRaA6KhyXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="btnvideo">Кнопка</button>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4882.981548093942!2d104.26211414792905!3d52.27079157812597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da824a8ee4f155d%3A0x368423aaef9b2b13!2z0JjRgNC60YPRgtGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC_0YPRgtC10Lkg0YHQvtC-0LHRidC10L3QuNGP!5e0!3m2!1sru!2sru!4v1652779756938!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>

</html>