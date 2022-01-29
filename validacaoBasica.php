<?php
$nome1 = "Pedro";

echo $nome1;
echo "<br>";

// destroi/ anula a variavel - comando unset -passo1

	unset($nome1);	
	
/*
validacao basica se ela existe? -passo2 (isset)
se a variavel tiver sido declarada ela sera apresentada - 
- para anular o unset - coloque o unset como comentario
*/

	if(isset($nome1)){
		echo $nome1; }
	else {
		echo "variável não existe";
	}

?>
