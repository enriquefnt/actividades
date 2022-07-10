<?php  
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../include/funciones.php';
?>

	<?php
	$title = 'Variables';
	$temas = findAll($pdo, 'act_temas' ,'temas');
	$modalidades = findAll($pdo, 'act_modalidad' ,'modalidades');
	$participantes = findAll($pdo, 'act_participantes' ,'participantes');
	

	


try {
if (isset($_POST['idTemas'])){
	$paraborrar=$_GET['idTemas'];
	$table='act_temas';
	$primaryKey='idTemas';
	$id=$_GET['idTemas'];;

delete($pdo, 'act_temas', 'idTemas', 3 );
	
}	


	

ob_start();

	include __DIR__ . '/../templates/variables.html.php';

$output = ob_get_clean() ;

}	

catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>