<?php

$nome1 = "Pedro";
echo $nome1;
echo "<br>";

/* passo1 - comando unset - destroi/anula a variavel.
 - Para anular o unset - a linha de codigo abaixo 
   devera ser colocada como comentario */

unset($nome1);	
	
/* passo2 - comando isset -(validacao basica abaixo)- para verificar se a variavel existe? 
 - A variavel foi declarada ela seria apresentada, mas como foi anulada pelo o unset o 
 resultado sera que ela nao existe! */

echo "<h3> Validação Básica: </h3>";

if(isset($nome1)){
	echo "Resultado: ".$nome1; }
else {
	echo "Resultado: "."variável não existe mais!";
	}

?>
