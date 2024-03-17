<?php
include('conexao.php');
$nomeProf=$_POST["txtprofnome"];

$rm = $_POST["txtrm"];

$mysqliquery = mysqli_query($conexao,"INSERT INTO professores(nome,rm) values ('$nomeProf','$rm')");

if($mysqliquery == TRUE){
    header('Location:professores.php');
}else{
    echo "erro";
}

?>