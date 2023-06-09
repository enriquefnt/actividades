<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

try {

$query = "SELECT DATE_FORMAT(inicio, '%Y-%m') AS mes, aop, COUNT(*) AS cantidad
 FROM act_actividad
 GROUP BY mes, aop";
$result = $pdo->query($query);

// Construir el arreglo de datos para DataTables
$data = array();
$meses = array();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $lugar = $row['aop'];
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






<!--
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.css"/>
</head>
<body>
    <table id="registros-table" class="table">
        <thead>
            <tr>
                <th>Lugar</th>
                <?php foreach ($meses as $mes) { ?>
                    <th><?php echo $mes; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $lugar => $mesesData) { ?>
                <tr>
                    <td><?php echo $lugar; ?></td>
                    <?php foreach ($meses as $mes) { ?>
                        <td><?php echo isset($mesesData[$mes]) ? $mesesData[$mes] : 0; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registros-table').DataTable();
        });
    </script>
</body>
</html>
-->