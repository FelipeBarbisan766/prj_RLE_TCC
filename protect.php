<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("Voce não esta logado.<a href=\"login.php\">logar</a>");
}
?>