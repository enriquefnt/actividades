<?php
session_start();
?>

<body>


  
  <div>
  <table id="example" class="w3-table-all w3-tiny" > 
      
   
  <thead >
  <tr >
    
    <th class="nosort">Fecha</th>
    <th>Area operariva</th>
    <th>Titulo</th>
    <th>Tema</th>
    <th>Modalidad</th>
    <th>Participantes</th>
    <th>Referente</th>
    <th>Descripción</th>
   </tr>
  </thead>
  <tbody class="table-hover">
  
  <?php 

  






  foreach ($actividades as $actividad): ?>
  <tr >
    <td ><?= htmlspecialchars($actividad['Fecha'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['titulo'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['temas'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['modalidades'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['participantes'], ENT_QUOTES, 'UTF-8'); ?></td>
    
     <td><?= htmlspecialchars($actividad['referente'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['descri'], ENT_QUOTES, 'UTF-8'); ?></td>
   </tr>
  <?php endforeach; ?>
  </tbody>
         
    </table>
</div>