<?php session_start();

require_once "../function/debug.php";
require_once "../function/db.php";
require_once "../function/url.php";
require_once "../function/location.php";

$date = date("d.m.y"); // Получаем текущий день
$time = date("H:i:s"); // Получаем текущее время



if(empty($_SESSION['login'])){
    header('Location: /');
}else{

$url = url($_SERVER["REQUEST_URI"]);

if(isset($url)){
    $pagelink = $url == "" ? "index" : $url;
}

if(!file_exists("content/$pagelink.php")){
    $pagelink = 404;
}

switch($pagelink){
    case "index":
        require "log/index.php";
        break;

    case "top":
        require "log/top.php";
        break;
    
    case "slider":
        require "log/slider.php";
        break;
}

require "template/header.php";
require "content/$pagelink.php";
require "template/sidebar.php";
require "template/footer.php";
}