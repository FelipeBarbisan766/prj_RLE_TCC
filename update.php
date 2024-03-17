<?php 
include('conexao.php');


// $update = "SELECT * FROM professores WHERE rm = $rm";
// $updatequery = mysqli_query($conexao, $update);
// $result = mysqli_fetch_assoc($updatequery);

$rm=$_POST['txtrm'];
$nome=$_POST['txtnome'];
$insertquery = mysqli_query($conexao,"UPDATE professores SET nome ='$nome' WHERE rm ='$rm'");
if($insertquery){
    header('Location:professores.php');
}else{
    echo 'Not Updated';
} ?>


