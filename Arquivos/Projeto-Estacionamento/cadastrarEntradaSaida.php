<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastrar Entrada e Saída de Veículos</title>
</head>
<body>

<center><h2>Cadastrar Entrada e Saída de Veículos</h2></center>
<center>
  <fieldset>
<!--Mudar os valores dos campos-->
<form method="post" action="insertEntrarSair.php" >
<label for="lname" class="ntxt">Código de Mensalidade:</label><br>
  <input type="date" id="mensalidade" name="id_mensalidade" class="cppf">
  <br>
  <label for="lname" class="ntxt">Data de entrada:</label
  ><br>
  <input type="date" id="dtEntrada" name="dtEntrada"  class="cppf">
  <br>
  <label for="lname" class="ntxt">Hora de entrada:</label>
  <br>
  <input type="time" id="hrentrada" name="hrEntrada"  class="cppf">
  <br>
  <label for="lname" class="ntxt">Data de saída:</label>
  <br>
  <input type="date" id="dtSaida" name="dtSaida"  class="cppf">
  <br>
  <label for="lname" class="ntxt">Hora de saída:</label>
  <br>
  <input type="time" id="hrsaida" name="hrSaida"  class="cppf">
  <br>
  <label for="vlPagar" class="ntxt">Valor do pagamento:</label
  ><br>
    <input type="number"step="0.01" id="vl_pagar" name="vl_pagar"  class="cppf">
    <br><br>
  <input type="submit" value="Voltar" class="voltar"> 
  <input type="submit" value="Enviar" class="enviar">
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

h2{
  margin-top: 40px;
}

.nome{
  border: none;
  border-radius:10px;
  box-shadow: 5px 3px 5px rgba(190,190,190);
}

fieldset{
  background: rgb(1,5,54);
  background: linear-gradient(0deg, rgba(1,5,54,1) 0%, rgba(171,45,253,1) 100%);
  width: 320px;
  height: 540px;
  border-radius:20px;
  margin-top: 30px;
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
  margin-top: 18px;
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