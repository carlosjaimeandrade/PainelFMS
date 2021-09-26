<?php
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	ini_set('max_execution_time', 0);

	//header("Content-Type: text/html; charset=utf-8", true);

		//** Faz a conexão com o banco de dados **
	if ( empty($_SERVER['SERVER_NAME'])|| preg_match('/.edu.br/', $_SERVER['SERVER_NAME'])  ) {
		$hostname = DB_HOST;
		$username = "a";
		$password = "a";
		$database = "a";
		$port = 'a';
	}else{
            // LOCALHOST
            $hostname = DB_HOST;
            $username = DB_USER;
            $password = DB_PASSWORD;
            $database = DB_NAME;
            $port = DB_PORT;
	}

	try {
        $link_conexao = new mysqli($hostname, $username, $password, $database, $port);
        $link_conexao->set_charset("utf8");
	} catch (exception $e) {
		echo "Erro ao conectar ao Banco de Dados: " . $e->getCode();
		exit;
	}

	Header('Cache-Control: no-cache');
	Header('Pragma: no-cache');

	//variaveis
	$empresa = "FMS";

?>
