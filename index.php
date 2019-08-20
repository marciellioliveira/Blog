<?php 

require_once 'twiginit.php';

echo $twig->render('index.html', [
	'nome'=>'Marcielli'	
]);

?>