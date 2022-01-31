<?php

$nome1 = "Pedro";
echo $nome1;
echo "<br>";

/*	passo1- comando unset - destroi/anula a variavel.
Observacao: para anular o unset - a linha de codigo abaixo 
devera ser colocada como comentario	*/
unset($nome1);	
	
/*	passo2 (isset)- validacao basica - para verificar se a variavel existe? 
se a variavel tiver sido declarada ela sera apresentada.
Como a variavel foi anulada pelo o unset o reultado sera que ela nao existe!	*/

if(isset($nome1)){
	echo $nome1; }
else {
	echo "variável não existe";
	}

?>
