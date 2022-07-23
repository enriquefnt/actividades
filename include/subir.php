<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

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
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
if ($_FILES["archivo"]["size"] > 6000000) {
  echo "El archivo es muy grande";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Disculpe, solo se aceptan archivos JPG, JPEG, PNG o GIF .";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["archivo"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



?>


