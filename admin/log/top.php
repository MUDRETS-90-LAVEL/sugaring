<?php

    $title = "Социальная Информация";

    $query = "SELECT * FROM info_top";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc($result);

    // $result = $mysql->query("SELECT * FROM info_top");
    // $page = $result->fetch_all(MYSQLI_ASSOC)
    
    if(isset($_POST['update'])){
        $vk = $_POST["vk"];
        $whatsapp = $_POST["whatsapp"];
        $telegram = $_POST["telegram"];
        $instagram = $_POST["instagram"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $adress = $_POST["adress"];
        $mode = $_POST["mode"];
    
    $row = "UPDATE info_top SET vk = '$vk', whatsapp = '$whatsapp', telegram = '$telegram', instogram = '$instagram', phone = '$phone', email = '$email', adress = '$adress', time = '$mode'";
    $result = mysqli_query($link, $row);
    page_redirect($url);
    }