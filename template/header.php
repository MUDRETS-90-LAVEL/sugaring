<?php
        $query = "SELECT * FROM info_top";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $page = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?php SITE_DIR;?>css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class="wiget_bootom_top bounce-7" name="top"></div>
<section class="bloc_top">
    <div class="content">
        <div class="social_blok">
            <div class="block__networks social_blok">
                <a href="<?=$page["vk"];?>" title="vk" class="networs_item icon-vk"></a>
                <a href="tel:<?=$page["whatsapp"];?>" title="whatsapp" class="networs_item icon-whatsapp"></a>
                <a href="<?=$page["telegram"];?>" title="telegram" class="networs_item icon-telegram"></a>
                <a href="<?=$page["instogram"];?>" title="instagram" class="networs_item icon-instagram"></a>
            </div>

            <div class="bloc__phone social_blok">
                <a href="tel:+79601478653" class="phone_item"><i class="icon-phone"></i><?=$page["phone"];?></a>
            </div>
            <div class="bloc__email social_blok">
                <a href="mailto:info@corolewa.ru" class="email_item"><i class="icon-email"></i><?=$page["email"];?></a>
            </div>
            <div class="block__adress social_blok">
                <p class="adress_item"><i class="icon-location"></i><span class="elem">Наш адресс:</span><?=$page["adress"];?></p>
            </div>
            <div class="bloc_time social_blok">
                <p class="time__item"><i class="icon-time"></i><span class="elem">Режим работы:</span><?=$page["time"];?></p>
            </div>
        </div>
    </div>
</section>
<header>
    <div class="content">
        <div class="header_content">
            <div class="logo header_content">
                <a href="/" class="logo_item logo" title="Шугаринг Сахарная Депиляция">
                    <div class="logo_item_img"></div>
                </a>
            </div>
            <div class="serch_box">
                <form action="">
                    <input type="text" class="serch_text" name="serch" placeholder="Поиск по сайту">
                    <!-- <a href="#" class="serch_btn"><i class="icon-search"></i></a> -->
                    <button class="serch_text"><i class="icon-search"></i></button>
                </form>
            </div>

            <nav class="menu">
            <ul class="topmenu">
                <li><a href="/" class="menu__link">Главная</a></li>
                <li><a href="o_nas" class="menu__link submenu-link">О нас</a>
                  <ul class="submenu">
                    <li><a href="news" class="menu__link">Новости</a></li>
                    <li><a href="articles" class="menu__link">Статьи</a></li>
                    <li><a href="#" class="menu__link">Документация</a></li>
                    <li><a href="#" class="menu__link">Отзывы</a></li>
                  </ul>
                </li>
                <li><a href="services" class="menu__link">Услуги</a></li>
                <li><a href="portfolio" class="menu__link">Портфолио</a></li>
                <li><a href="contacts" class="menu__link">Контакты</a></li>
            </ul>
          </nav>
            <!-- Бургер меню -->
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                <span></span>
                </label>

                <ul class="menu__box">
                    <li><a class="menu__item" href="/">Главная</a></li>
                    <li><a class="menu__item submenu-link" href="o_nas">О нас</a></li>
                    <li><a class="menu__item" href="services">Наши услуги</a></li>
                    <li><a class="menu__item" href="portfolio">Портфолио</a></li>
                    <li><a href="articles" class="menu__item">Статьи</a></li>
                    <li><a class="menu__item" href="news">Новости</a></li>
                    <li><a class="menu__item" href="contacts">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>



