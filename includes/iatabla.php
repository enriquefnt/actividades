<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
$title = 'Tabla';
try {

$query = "SELECT DATE_FORMAT(inicio, '%Y-%m') AS mes, areaoperativa, COUNT(*) AS cantidad
 FROM act_actividad
 inner join act_aop on aop =idaop
 GROUP BY mes, aop";
$result = $pdo->query($query);

// Construir el arreglo de datos para DataTables
$data = array();
$meses = array();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $lugar = $row['areaoperativa'];
    $mes = $row['mes'];
    $cantidad = $row['cantidad'];

    // Agregar el lugar a la lista de filas si no está presente
    if (!in_array($lugar, $data)) {
        $data[$lugar] = array();
    }

    // Agregar el mes a la lista de columnas si no está presente
    if (!in_array($mes, $meses)) {
        $meses[] = $mes;
    }

    // Guardar la cantidad en la celda correspondiente
    $data[$lugar][$mes] = $cantidad;
}
ob_start();

    include __DIR__ . '/../templates/iatabla.html.php';

$output = ob_get_clean() ;

}
catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>

