<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Listar Cadastros</title>
</head>
<body>
    <h2>Aqui está uma lista dos cadastros dos Veículos</h2>
    
</head>
<body>

 <br><br>
 <center>
<h2>Veículo</h2>
<br>
<table class="table"style="width: 800px; margin-top: -50%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Automovél</th>
      <th scope="col">Placa</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
    </tr>
  </thead>
 
    

        <tbody>

<?php 
include 'conexao.php';
$selecionar="select * from tb_veiculo";
$query = mysqli_query($conexao,$selecionar);
while($dados=mysqli_fetch_array($query)){
    $codigo=$dados['cd_veiculo'];
    $tipo=$dados['id_tipo'];
    $placa=$dados['nr_placa'];
    $modelo=$dados['nm_modelo'];
    $marca=$dados['nm_marca'];
   
?>
<tr>
    <td><?php echo $codigo ?></td>
    <td><?php echo $tipo ?></td>
    <td><?php echo $placa ?></td>
    <td><?php echo $modelo ?></td>
    <td><?php echo $marca ?></td>
</tr>
</tbody><br>
<?php }?>
</center>







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>