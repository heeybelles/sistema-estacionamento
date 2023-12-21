<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastrar Mensalidade</title>
</head>

<br><br>

 
      <center><h2>Cadastrar Mensalidade</h2></center>



    <br>

<body>
<center>
  <fieldset>
<!--Mudar os valores dos campos-->
<br>
<form method="post" action="insertMensalidade.php" >
  <label for="phone" class="ntxt">Valor do pagamento:</label><br>
    <input type="number" class="cppf"step="0.01" id="vl_pagar" name="vl_pagar"><br><br>
  <label for="pagamento" class="ntxt">Data de pagamento:</label><br>
    <input type="date" class="cppf" id="dtpagar"name="dtpagar"><br><br>
  <br>
    <input type="submit" class="voltar" value="Voltar"> 
  <input type="submit" class="enviar" value="Enviar">
</form>
  </fieldset>
  </center>
</body>
<script>
    
   
</script>


<style>

  body{
  background-color:#f3f3f3;
}

.nome{
  border: none;
  border-radius:10px;
  box-shadow: 5px 3px 5px rgba(190,190,190);
}

fieldset{
  background: rgb(1,5,54);
  background: linear-gradient(0deg, rgba(1,5,54,1) 0%, rgba(171,45,253,1) 100%);
  width: 300px;
  height: 300px;
  border-radius:20px;
  box-shadow: 5px 3px 5px rgba(190,190,190);

}

.cppf{
  border-radius:10px;
  border: none;
  box-shadow: 5px 3px 5px rgba(190,190,190);
  text-align: center;
}

.ntxt{
  color: white;
}


.enviar{
  border: none;
  border-radius:10px;
  background-color: white;
  box-shadow: 5px 3px 5px rgba(190,190,190);
}

.voltar{
  border: none;
  border-radius:10px;
  background-color: white;
  margin-right: 20px;
  box-shadow: 5px 3px 5px rgba(190,190,190);
}


</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>