<?php 

	$alunos = array('Naruto', 'Sasuke', 'Shikamaru', 'Hinata', 'Itachi', 'Kakashi', 'Rock Lee', 'Madara', 'Hashirama', 'Minato');
	$notas = array(4, 8, 7, 9, 6, 3, 5, 1, 2, 10);

	

	$mediaNotas = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8] + $notas[9]) / 10;


	echo "$mediaNotas </br>";


	if ($notas[0] > $notas[1] && $notas[0] > $notas[2] && $notas[0] > $notas[3] && $notas[0] > $notas[4] && $notas[0] > $notas[5] && $notas[0] > $notas[6] && $notas[0] > $notas[7] && $notas[0] > $notas[8] && $notas[0] > $notas[9]){
		

		echo "$alunos[0] teve a maior nota";


	}elseif ($notas[1] > $notas[0] && $notas[1] > $notas[2] && $notas[1] > $notas[3] && $notas[1] > $notas[4] && $notas[1] > $notas[5] && $notas[1] > $notas[6] && $notas[1] > $notas[7] && $notas[1] > $notas[8] && $notas[1] > $notas[9]) {
		
		echo "$alunos[1] teve a maior nota";



	}elseif ($notas[2] > $notas[0] && $notas[2] > $notas[1] && $notas[2] > $notas[3] && $notas[2] > $notas[4] && $notas[2] > $notas[5] && $notas[2] > $notas[6] && $notas[2] > $notas[7] && $notas[2] > $notas[8] && $notas[2] > $notas[9]) {
		
		echo "$alunos[2] teve a maior nota";



	}elseif ($notas[3] > $notas[0] && $notas[3] > $notas[2] && $notas[3] > $notas[1] && $notas[3] > $notas[4] && $notas[3] > $notas[5] && $notas[3] > $notas[6] && $notas[3] > $notas[7] && $notas[3] > $notas[8] && $notas[3] > $notas[9]) {
		
		echo "$alunos[3] teve a maior nota";

	}elseif ($notas[4] > $notas[0] && $notas[4] > $notas[2] && $notas[4] > $notas[1] && $notas[4] > $notas[3] && $notas[4] > $notas[5] && $notas[4] > $notas[6] && $notas[4] > $notas[7] && $notas[4] > $notas[8] && $notas[4] > $notas[9]) {
		
		echo "$alunos[4] teve a maior nota";


	}elseif ($notas[5] > $notas[0] && $notas[5] > $notas[2] && $notas[5] > $notas[1] && $notas[5] > $notas[3] && $notas[5] > $notas[4] && $notas[5] > $notas[6] && $notas[5] > $notas[7] && $notas[5] > $notas[8] && $notas[5] > $notas[9]) {
		
		echo "$alunos[5] teve a maior nota";


	}elseif ($notas[6] > $notas[0] && $notas[6] > $notas[2] && $notas[6] > $notas[1] && $notas[6] > $notas[3] && $notas[6] > $notas[4] && $notas[6] > $notas[5] && $notas[6] > $notas[7] && $notas[6] > $notas[8] && $notas[6] > $notas[9]) {
		
		echo "$alunos[6] teve a maior nota";


	}elseif ($notas[7] > $notas[0] && $notas[7] > $notas[2] && $notas[7] > $notas[1] && $notas[7] > $notas[3] && $notas[7] > $notas[4] && $notas[7] > $notas[5] && $notas[7] > $notas[6] && $notas[7] > $notas[8] && $notas[7] > $notas[9]) {
		
		echo "$alunos[7] teve a maior nota";


	}elseif ($notas[8] > $notas[0] && $notas[8] > $notas[2] && $notas[8] > $notas[1] && $notas[8] > $notas[3] && $notas[8] > $notas[4] && $notas[8] > $notas[5] && $notas[8] > $notas[6] && $notas[8] > $notas[7] && $notas[8] > $notas[9]) {
		
		echo "$alunos[8] teve a maior nota";


	}elseif ($notas[9] > $notas[0] && $notas[9] > $notas[2] && $notas[9] > $notas[1] && $notas[9] > $notas[3] && $notas[9] > $notas[4] && $notas[9] > $notas[5] && $notas[9] > $notas[6] && $notas[9] > $notas[7] && $notas[9] > $notas[8]) {
		
		echo "$alunos[9] teve a maior nota";


	}
 ?>