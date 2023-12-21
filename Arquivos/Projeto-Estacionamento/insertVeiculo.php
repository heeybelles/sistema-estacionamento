<?php
include 'conexao.php';


$tipo = $_POST['tipo'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$marca=$_POST['marca'];

$insert = "INSERT INTO `tb_veiculo` (`cd_veiculo`, `id_tipo`, `nr_placa`, `nm_modelo`, `nm_marca`) VALUES (NULL, '$tipo', '$placa', '$modelo', '$marca')
";

$sql = mysqli_query($conexao, $insert); 