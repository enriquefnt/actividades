<?php
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../include/funciones.php';


$sql='SELECT max(idActividad)  FROM `saltaped_actividades-promo`.act_actividad;';
 
  $ultimoId = $pdo->query($sql);
  $row = $ultimoId->fetch();

// echo $ultimoId;

$datosImagen =[
      		'archivo'=> 'cualquiercosa.jpg' ,
      		'idActividad' => $row[0] ,
      		'fecha' => date('Y-m-d'),
					'estado' => 1
      	];

insert($pdo, 'act_imagenes', $datosImagen);

print_r($datosImagen)




?>