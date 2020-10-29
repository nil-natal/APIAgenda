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

	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

  <?php 

include "conexao.php";

$sql = "SELECT * FROM listaContato";
$result = mysqli_query($conn, $sql);

			while ($ver = mysqli_fetch_assoc($result)) {
				# code...
			 ?>

  <tbody>
    <tr>
      <td><?php echo $ver['nome']; ?></td>
      <td><?php echo $ver['fone']; ?></td>
      <td>
      	<button class="btn btn-success" onclick="window.location.href='tel:<?php echo $ver['fone']; ?>'"><img width="30px" src="imagens/fone.png"></button>
      	<button class="btn btn-success" onclick="window.location.href='https://api.whatsapp.com/send?phone=<?php echo $ver['fone']; ?>&text=Ola, <?php echo $ver['nome']; ?>'"><img width="30px" src="imagens/whatsapp.png" ></button>
      </td>
    </tr>
  </tbody>

<?php } ?>

</table>

<br>
<button class="btn btn-danger" onclick="window.location.href='sair.php'">Sair</button>
<button class="btn btn-success" onclick="window.location.href='adicionarContato.php'">Adicionar Contato</button>

</body>
</html>




