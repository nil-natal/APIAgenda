<?php
	session_start();
	echo 'Ola ' . $_SESSION['usuarioNome'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agenda - Lista</title>
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>

<form action="cadastrandoContado.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Fone</label>
      <input type="text" name="fone" class="form-control" id="inputPassword4">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<br>
<button class="btn btn-danger" onclick="window.location.href='index.php'">Sair</button>
<button class="btn btn-success" onclick="window.location.href='administrativo.php'">Lista</button>

</body>
</html>




