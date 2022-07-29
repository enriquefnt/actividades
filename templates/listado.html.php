<?php
session_start();
?>

<body>


  
  <div>
  <table id="example" class="w3-table-all w3-tiny" > 
    <?php   
  if ( isset($cuenta) && $cuenta > 0) { ?>    
   
  <thead >
  <tr >
    
    <th class="nosort">Fecha</th>
    <th>Area operariva</th>
    <th>Lugar</th>
    <th>Titulo</th>
    <th>Tema</th>
    <th>Modalidad</th>
    <th>Participantes</th>
    <th>Referente</th>
    <th>Descripción</th>
    <th>Ver Fotos</th>
   <th>Editar</th> 
   </tr>
  </thead>

   <?php  }  
else {  ?>
  <h5>Sin Actividad Registrada </h5>
<?php }  ?>

  <tbody class="table-hover">
  
  <?php 

  

  foreach ($actividades as $actividad): ?>
  <tr >
    <td ><?= htmlspecialchars($actividad['Fecha'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['locale'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['titulo'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['temas'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['modalidades'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['participantes'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['referente'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($actividad['descri'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><a href="verImagenes.php?id=<?=$actividad['idActividad']; ?>"><i class="fas fa-solid fa-images"></i></a></td>  
    </td> 
  <td><a href="editaDatos.php?id=<?=$actividad['idActividad']; ?>"><i class="fas fa-user-edit fa-lg"></i></a></td>  
    </td> 
   </tr>
  <?php endforeach; ?>
  </tbody>
         
    </table>
</div>