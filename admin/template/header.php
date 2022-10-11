<?php 

    if($time >= "08:00" && $time <= "12:00"){
        $hello = "Добрый утро";
    }elseif($time >= "11:59" && $time <= "16:00"){
        $hello = "Добрый день";
    }elseif($time >= "15:59" && $time <= "21:00"){
        $hello = "Добрый вечер";
    }elseif(($time >= "20:59" && $time <= "23:59") || ($time >= "00:00" && $time <= "07:59")){
        $hello = "Доброй ночи";
    }

    if(!empty($_SESSION['login'])){
        $fio = $_SESSION["name"].' '.$_SESSION['patronymic'];
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="/css/admin/style.css">
</head>
<body>
<header class="header">
    <div class="header-top">
        <div class="content">
            <div class="top_head">
                <div class="header_title">Административная панель</div>
                <div class="date_time">
                    <div class="today_date"><span class="date"><b>Дата:</b> <?=$date?></span> <b>Время:</b> <span id="todaysDate"></span> </div>
                </div>
                <div class="header_fio">
                    <div class="time_day"><?=$hello;?>: <b><?=$fio;?></b></div>
                    <a class="logout" href="logaut.php">Выход</a>
                </div>
            </div>
        </div>
    </div>
</header>
    <main>