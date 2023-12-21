<?php
include 'conexao.php';
$codigo= $_POST['id_mensalidade'];
$dtEntrada = $_POST['dtEntrada'];
$hrEntrada = $_POST['hrEntrada'];
$dtSaida = $_POST['dtSaida'];
$hrSaida = $_POST['hrSaida'];
$vlPagar =$_POST['vl_pagar'];



$insert = "INSERT INTO `tb_entrada_saida` (`cd_entrada_saida`, `dt_entrada`, `hr_entrada`, `dt_saida`, `hr_saida`, `vl_pago`,`id_mensalidade`) VALUES (null, '$dtEntrada','$hrEntrada', '$dtSaida','$hrSaida','$vlPagar','$codigo')";
$sql = mysqli_query($conexao,$insert);


?>


