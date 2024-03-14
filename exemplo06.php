<?php 
	
	$ano = 2024;

	//implementação de uma função

	function exibir(){
		GLOBAL $ano;
		$ano++;
		return $ano;
	}

 	echo '<br/> Ano: '.$ano;
 	echo '<br/> Ano: '.exibir();
 	echo '<br/> Ano: '.exibir();
 	echo '<br/> Ano: '.$ano;
 	 ?>