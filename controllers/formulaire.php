<?php 
session_start();

$_SESSION['lorem'] = $_POST['lorem'];
$_SESSION['img1'] = $_POST['img1'];
$_SESSION['img2'] = $_POST['img2'];



header('Location: /');
