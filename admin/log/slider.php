<?php
$title = "Слайдер";

$query = "SELECT * FROM sliders";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
// $page = mysqli_fetch_assoc($result);


for ($arr = []; $page = mysqli_fetch_assoc($result); $arr[] = $page);
?>