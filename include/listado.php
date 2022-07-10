<?php  
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../include/funciones.php';
?>

	<?php
	$title = 'Listado';
	$areas = findAll($pdo, 'act_aop' ,'areaoperativa');
try {

		


		$sql='call `saltaped_actividades-promo`.listado(); ';			

		//$sql='call MSP_NUTRICION.nominal(8); ';	
		$actividades = $pdo->query($sql);
		$cuenta = $actividades->rowCount();
		

ob_start();

	include __DIR__ . '/../templates/listado.html.php';

$output = ob_get_clean() ;

}	

catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>