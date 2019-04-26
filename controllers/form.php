<?php 
session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['mdp'] = $_POST['mdp'];
$_SESSION['lorem'] = $_POST['lorem'];


header('Location: /');
