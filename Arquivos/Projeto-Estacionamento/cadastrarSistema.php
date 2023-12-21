<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastrar Proprietario</title>
</head>

<body>

<br><br>
<center><h2>Cadastrar Proprietário</h2></center>
<br>

<center>
  <fieldset>
<br>
<form method="post" action="insertUser.php" aenctype="multipart/form-data">
<input type="file" class="escolher" id="imagem_livro" name="imagem_livro" accept="image/*">
<br><br>
<label for="fname" class="ntxt">Nome do Proprietário:</label><br>
  <input type="text" class="nome" id="fname" name="nome" placeholder=" José Carlos"><br>
  <br>
  <label for="lname" class="ntxt">CPF:</label><br>
  <input type="text" class="cppf" id="cpf" name="cpf" data-format="cpf" maxlength="14" placeholder=" ___.___.___-__" oninput="maskCPF(this)"><br>
  <br>
  <label for="phone" class="ttxt">Telefone:</label><br>
    <input type="tel" class="tel"  id="phone" name="phone" data-format="phone" maxlength="15" placeholder="(XX) XXXXX-XXXX" oninput="maskPhone(this)"><br><br>
  <br>
    <input type="submit" class="voltar" value="Voltar"> 
  <input type="submit" class="entrar" value="Enviar">
</form>
  </fieldset>
  </center>

</body>

<script>
    function maskCPF(input) {
      let value = input.value.replace(/\D/g, '');
      value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
      input.value = value;
    }
    function maskPhone(input) {
      let value = input.value.replace(/\D/g, '');
      value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
      input.value = value;
    }
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
  width: 360px;
  height: 410px;
  border-radius:20px;
  box-shadow: 5px 3px 5px rgba(190,190,190);

}

.tel{
  border-radius:10px;
  border: none;
  box-shadow: 5px 3px 5px rgba(190,190,190);
}


.cppf{
  border-radius:10px;
  border: none;
  box-shadow: 5px 3px 5px rgba(190,190,190);
}

.ntxt{
  color: white;
}

.ttxt{
  color: white;
}

.ctxt{
  color: white;
}

.entrar{
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

.escolher{
 color: white;
}

  
</style>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>