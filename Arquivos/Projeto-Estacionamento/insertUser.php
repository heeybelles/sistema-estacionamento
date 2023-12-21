<?php
include 'conexao.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$phone = $_POST['phone'];



$insert = "INSERT INTO `tb_proprietario` (`cd_usuario`,  `cpf_proprietario`,`nm_proprietario`,`nr_fone`) 
VALUES (null, '$cpf','$nome', '$phone')";
$sql = mysqli_query($conexao,$insert);


?>




