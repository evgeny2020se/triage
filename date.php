<?php
$connect = mysqli_connect('localhost', 'root', '', 'bbilling');
$date_start =   $_POST['date_start'];
$date_end = $_POST['date_end'];
$link = mysqli_query($connect, "SELECT * FROM `users`");
$link_res = mysqli_fetch_all($link);
$link_date = mysqli_query($connect, "SELECT * FROM `users` WHERE date BETWEEN '$date_start' AND '$date_end'");
$result_date = mysqli_fetch_all($link_date);
?>