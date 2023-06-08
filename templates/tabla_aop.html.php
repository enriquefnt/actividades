<?php
//if (empty($_SESSION['name']))
//{session_start();}
session_start();



foreach ($resultObject as $row) {
    $grouped[$row['areaoperativa']][$row['mes_año']] = $row['n_actividades'];
    $columns[$row['mes_año']] = $row['mes_año'];
}

//sort($columns);
$defaults = array_fill_keys($columns, ' ');
array_unshift($columns, 'Area Operativa');

echo '<table id="example" class="w3-table-all w3-tiny">';
    printf(
        "<tr><th>%s</th></tr>\n",
        implode('</th><th>', $columns)
    );
    foreach ($grouped as $name => $records) {
        printf(
            "<tr><td>%s</td><td>%s</td></tr>",
            $name,
            implode('</td><td>', array_replace($defaults, $records))
        );
    }
echo "</table>";

  ?>
