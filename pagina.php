<?php

class Pagina{

	public $titulo;
	public $paragrafo;
	
	function imprimeHTML(){
		echo "<html>
					<head>
					</head>
					<body>";
		echo '<h1>'.$this->titulo.'</h1>';
		echo '<p>'.$this->paragrafo.'</p>';
		echo "</body>
					</html>";
	}

}

?>