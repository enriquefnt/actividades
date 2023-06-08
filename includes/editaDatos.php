<?php
include __DIR__ . '/../includes/conect.php';
include __DIR__ . '/../includes/funciones.php';

try {

$areas = findAll($pdo, 'act_aop' ,'areaoperativa');
$temas = findAll($pdo, 'act_temas' ,'temas');
$modalidades = findAll($pdo, 'act_modalidad' ,'modalidades');
$participantes = findAll($pdo, 'act_participantes' ,'participantes');

 $title = 'Editar';

if (isset($_POST['inicio'])) {
	$actiEditada = [ 							
							 'idActividad'=> $_POST['idActividad'],
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
				

save($pdo, 'act_actividad', 'idActividad', $actiEditada);


$files = array_filter($_FILES['archivo']['name']); 
$total_count = count($_FILES['archivo']['name']);

for( $i=0 ; $i < $total_count ; $i++ ) {
 
   $tmpFilePath = $_FILES['archivo']['tmp_name'][$i];

   if ($tmpFilePath != ""){
   
      $newFilePath = "../imagenes/" . $_FILES['archivo']['name'][$i];
      
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
       
         	$datosImagen =[
      		'archivo'=> $newFilePath ,
      		'idActividad' => $_POST['idActividad'] ,
      		'fecha' => date('Y-m-d') ,
					'estado' => 1
      	];

 insert($pdo, 'act_imagenes', $datosImagen);

      	$uploadOk = 1;
      }
   }
}

session_unset();
header('Location: /../actividades/includes/listado.php')	;	 





}




if (isset($_GET['id'])) {
	
	

	$query = $pdo->prepare('call `saltaped_actividades-promo`.paraEditar('.$_GET['id'].');');
    	$query->execute();
    	$actiAEditar = $query->fetch();	
}



 ob_start();
include __DIR__ . '/../templates/editaDatos.html.php';
$output = ob_get_clean() ;


}

    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';