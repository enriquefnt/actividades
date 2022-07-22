
<?php
session_start();
?>

<body>

  
  <div>
  <table  class="w3-table-all w3-hoverable w3-tiny " > 
      
   
  <thead >
  <tr class="w3-light-grey">
    
    
    <th>Tema</th>
    <th>Borrar</th>
   </tr>
  </thead>
  <tbody class="table-hover">
  
  <?php 

  
  foreach ($temas as $tema): ?>


  <tr >
    
    
    <td><?= htmlspecialchars($tema['temas'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><a href="variables.php?idTemas=<?=$tema['idTemas']; ?>"><i class="fas fa-user-edit fa-lg"></i></a></td>
    


   </tr>
  <?php endforeach; ?>
  </tbody>
         
    </table>
</div>

