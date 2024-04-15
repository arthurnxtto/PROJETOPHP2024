<?php 
	
	$notas = array( 'Naruto' => ("9" +"10") / 2, 'Sasuke' => ("9" +"8") / 2 ,'Gaara' => ("10" +"10") / 2 , 'Neji' => ("7" +"1") / 2 ,'Shikamaru' => ("10" +"10") / 2 , 'Rock Lee' => ("10" +"10") / 2);
    
   

foreach ($notas as $nome => $media) {
	
    echo  " <br/> " . $nome . " teve como média  " . $media ;
}

	

 ?>	
