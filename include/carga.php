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
							  'total' =>  $_POST['total'],
							  'idUser'=>  $_POST['idUser']
					];
			//		print_r($record);
					

insert($pdo, 'act_actividad', $record);
session_unset();


//header('Location: /../descu/includes/secargoCtrl.php')	;	 

}

$result = findAll($pdo, 'act_aop' ,'areaoperativa');



 $title = 'Carga Actividad';
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

