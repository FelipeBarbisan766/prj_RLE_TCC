<?php 
include('conexao.php');

$rm = $_GET['rm'];

$delete = "DELETE FROM professores WHERE rm = '$rm'";
$deletequery = mysqli_query($conexao,$delete);
if($deletequery){
    header('Location:professores.php');
}else{
    echo 'erro';
}


?>