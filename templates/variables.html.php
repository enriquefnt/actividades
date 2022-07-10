
<?php
session_start();
?>

<body>

  
  <div>
  <table id="example" class="w3-table-all w3-tiny" > 
      
   
  <thead >
  <tr >
    
    
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

