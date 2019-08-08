<?php

$connect = new PDO("mysql:host=localhost; dbname=mycomments; charset=utf8", 'root', '');

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $date = date('d.m.Y');
    $time = date('H:i');
    $query = $connect->query("INSERT INTO mycomments.comments (username, comment, date, time) VALUES ('$username', '$comment', '$date', '$time') ");
}

?>