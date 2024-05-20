<?php 

$alunos = array('Naruto', 'Sasuke', 'Shikamaru', 'Hinata', 'Itachi', 'Kakashi', 'Rock Lee', 'Madara', 'Hashirama', 'Minato');
$notas = array(4, 8, 7, 9, 6, 3, 5, 1, 2, 10);
$a = 0;
$mediaNotas = 0;

		$mediaNotas = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8] + $notas[9]) / 10;

		$a = max($notas);

		if($a == $notas[0]){

			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[0];
		}elseif($a == $notas[1]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[1];
		}elseif($a == $notas[2]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[2];
		}elseif($a == $notas[3]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[3];
		}elseif($a == $notas[4]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[4];
		}elseif($a == $notas[5]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[5];
		}elseif($a == $notas[6]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[6];
		}elseif($a == $notas[7]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[7];
		}elseif($a == $notas[8]){
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[8];
		}else{
			echo "a média da classe é " . $mediaNotas .  "<br>e o aluno com maior nota é " . $alunos[9];
		}	

 ?>