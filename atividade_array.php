<?php 

	$alunos = array('Naruto' => 10, 'Sasuke' => 9, 'Shikamaru' => 8, 'Hinata' => 7, 'Itachi' => 6, 'Kakashi' => 7, 'Rock Lee' => 9, 'Madara' => 8, 'Hashirama' => 8, 'Minato' => 5);

	

	foreach ($alunos as $nome => $notas) {
		$media = $notas / 10;
		echo "a média é $media";
	} 

 ?>