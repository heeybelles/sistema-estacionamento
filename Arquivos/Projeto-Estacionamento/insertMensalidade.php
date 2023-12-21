<?php
include 'conexao.php';

$valor = $_POST['vl_pagar'];
$dtPagar = $_POST['dtpagar'];

echo "$valor,  $dtPagar ";



$insert = "INSERT INTO `tb_mensalidade` (`cd_mensalidade`, `dt_pagamento`, `vl_pagamento`) VALUES (NULL, '$dtPagar', '$valor')";
$sql = mysqli_query($conexao,$insert);


?>
