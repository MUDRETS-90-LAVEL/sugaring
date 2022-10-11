<?php session_start();

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $pass = $_POST['password'];

    $query = "SELECT id, login, name, patronymic FROM user WHERE login = '$login' AND pass = '$pass'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc($result);

    if(!empty($page['id'] > 0)){
        $_SESSION['login'] = $page['login'];
        $_SESSION['name'] = $page['name'];
        $_SESSION['patronymic'] = $page['patronymic'];
        header("Location: admin");
    }else{
        header('Location: login');
 }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section class="content">
        <div class="box">
            <img src="img/user.png" alt="user">
            <form action="" method="post">
                <div class="input-box">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="login" placeholder="Введите ваш логин:">
                </div>
                <div class="input-box">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="Введите ваш пароль:">
                </div>
                <input type="submit" value="Войти">
            </form>
        </div>
    </section>
</body>
</html>