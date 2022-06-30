<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
try {

if (isset($_POST['inicio'])) {

$record = [ 							
							 	'inicio' => $_POST['inicio'],
							 	'final' =>$_POST['final'],
							 	'aop' => $_POST['aop'],
	 							'locale' =>$_POST['locale'],
							  'titulo' =>$_POST['titulo'],
							  'descri' =>$_POST['descri'],
							  'tema' =>$_POST['tema'],
							  'areas' =>$_POST['areas'],
							  'tipo' =>$_POST['tipo'],
							  'tipoParti' =>$_POST['tipoParti'],
							  'total' =>  22 //$_POST['total']
					];
					print_r($record);
					echo $_POST['locale'];
					echo $_POST['titulo'];
					echo $_POST['total'];

insert($pdo, 'actividades', $record);
session_unset();


//header('Location: /../descu/includes/secargoCtrl.php')	;	 

}





 $title = 'Carga Controles';
ob_start();
include __DIR__ . '/../templates/carga.html.php';
$output = ob_get_clean() ;


}

    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
	





//

		include  __DIR__ . '/../templates/layout.html.php';

//header('Location: vercontrol.php')	;	

