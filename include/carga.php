<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
try {

$areas = findAll($pdo, 'act_aop' ,'areaoperativa');
$temas = findAll($pdo, 'act_temas' ,'temas');
$modalidades = findAll($pdo, 'act_modalidad' ,'modalidades');
$participantes = findAll($pdo, 'act_participantes' ,'participantes');

 $title = 'Carga Actividad';

if (isset($_POST['inicio'])) {

$record = [ 							
							 	'inicio' => $_POST['inicio'],
							 	'final' =>$_POST['final'],
							 	'aop' => $_POST['aop'],
	 							'locale' =>$_POST['locale'],
							  'titulo' =>$_POST['titulo'],
							  'descri' =>$_POST['descri'],
							  'tema' =>$_POST['tema'],
							  'modal' =>$_POST['modal'],
							  'tipoParti' =>$_POST['tipoParti'],
							  'total' =>  $_POST['total'],
							  'idUser'=>  $_POST['idUser']
					];
			//		print_r($record);
					

insert($pdo, 'act_actividad', $record);
$sql='SELECT max(idActividad)  FROM `saltaped_actividades-promo`.act_actividad;';
 
  $ultimoId = $pdo->query($sql);
  $ult = $ultimoId->fetch();


$files = array_filter($_FILES['archivo']['name']); 
$total_count = count($_FILES['archivo']['name']);

for( $i=0 ; $i < $total_count ; $i++ ) {
 
   $tmpFilePath = $_FILES['archivo']['tmp_name'][$i];

   if ($tmpFilePath != ""){
   
      $newFilePath = "../imagenes/" . $_FILES['archivo']['name'][$i];
      
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
       
         	$datosImagen =[
      		'archivo'=> $newFilePath ,
      		'idActividad' => $ult[0] ,
      		'fecha' => date('Y-m-d') ,
					'estado' => 1
      	];

 insert($pdo, 'act_imagenes', $datosImagen);

      	$uploadOk = 1;
      }
   }
}

print_r($datosImagen);

session_unset();
header('Location: /../actividades/include/carga.php')	;	 

}



ob_start();
include __DIR__ . '/../templates/carga.html.php';
$output = ob_get_clean() ;


}

    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
	

		include  __DIR__ . '/../templates/layout.html.php';



