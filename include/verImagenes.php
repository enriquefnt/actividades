<?php
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../include/funciones.php';

try {

if (isset($_POST['idActividad'])) {
	
//$imagenesActividad = findById($pdo, 'act_imagenes', 'idImagenes', $_POST['idActividad']);


$sql='call `saltaped_actividades-promo`.fotosActividad(141);';

$imagenesActividad = $pdo->query($sql);



}

$title = 'Fotos';

		ob_start();

		include  __DIR__ . '/../templates/verImagenes.html.php';

		$output = ob_get_clean();


}

catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';