<?php 

require 'function/db.php'; 
require 'function/debug.php'; //debug 
require_once 'function/url.php';
define("SITE_DIR", '/');

$url = url($_SERVER["REQUEST_URI"]);

if(isset($url)){
    $pagelink = $url == "" ? "index" : $url;
}

    if($pagelink == "login"){
        $title = "Вход в админку";
        require "login.php";
    }else{
        
    if(!file_exists("content/$pagelink.php")){
       $pagelink = "404";
    }

    switch($pagelink){

        case "index":
            require "logic/index.php";
            break;

        case "o_nas":
            require "logic/o_nas.php";
            break;

        case "services":
            require "logic/services.php";
            break;

        case "portfolio":
            require "logic/portfolio.php";
            break;

        case "contacts":
            require "logic/contacts.php";
            break;

        case "news":
            require "logic/news.php";
            break;

        case "articles":
            require "logic/articles.php";
            break;
            
        default:
            $title = "Ошибка";
            break;
    }

    require "template/header.php";
    require "content/$pagelink.php";
    require "template/footer.php";

}
?>


        