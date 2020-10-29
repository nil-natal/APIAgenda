<?php

	$url = 'http://localhost:8080/agendaTelefonica/agenda_api/api/v1/';

	$classe = 'agenda';
	$metodo = 'mostrar';

	$montar = $url.'/'.$classe.'/'.$metodo;

	$retorno = file_get_contents($montar);

	var_dump(json_decode($retorno, 1));

	?>