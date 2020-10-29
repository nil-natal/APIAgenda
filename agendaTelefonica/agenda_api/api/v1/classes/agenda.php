<?php

	class agenda
	{
		public function mostrar()
		{
			$con = new PDO('mysql: host=locahost; dbname=agendaTelefonica;','root','');

			$sql = "SELECT * FROM listaContato ORDER BY id ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum contato cadastrado!");
			}
			
			return $resultados;
		}
	}