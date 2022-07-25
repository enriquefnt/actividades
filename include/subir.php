<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
/*
$target_dir = "../imagenes/";
$target_file = $target_dir . basename($_FILES["archivo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["archivo"]["tmp_name"]);
  if($check !== false) {
    echo "El archivo es una imágen - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "El archivo es una imágen.";
    $uploadOk = 0;
  }
}
if (file_exists($target_file)) {
  echo "El archivo ya exixte";
  $uploadOk = 0;
}
if ($_FILES["archivo"]["size"] > 3000000) {
  echo "El archivo es muy grande";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Disculpe, solo se aceptan archivos JPG, JPEG, PNG o GIF .";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "No se pudo cargar la imágen";

} else {
  if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["archivo"]["name"])). " has been uploaded.";
  } else {
    echo "Hubo un error al cargar la imágen, inente de nuevo.";
  }
}

*/

$files = array_filter($_FILES['archivo']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['archivo']['name']);
// Loop through every file 
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['archivo']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "../imagenes/" . $_FILES['archivo']['name'][$i];
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      	$uploadOk = 1;
      }
   }
}
echo $total_count . "  total_count   " . $tmpFilePath . "  tmpFilePath   " . $newFilePath . "  newFilePath" ;
?>


