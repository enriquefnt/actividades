
<?php 
session_start();
?>

<div class="w3-row-padding w3-content">



      
<form class="w3-container" action="" method="post" >


  <div class="w3-twothird">
    <input type="text" required="required" class="w3-input" name="nombre" placeholder="Nombre" autocomplete="off" value="">
</div>
  <div class="w3-twothird">
  
  <input type="text" required="required" class="w3-input" name="apellido" placeholder="Apellido" autocomplete="off" value="">
</div>

<div class="w3-twothird">
  
  <select name="profesion"  class="w3-input">
    <option hidden selected>Profesion</option>
    <option value='1'>Enfermería</option>
    <option value='2'>Nutrición</option>
    <option value='3'>Medicina</option>
    <option value='4'>Agente Sanitario</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
 </div>

<div class="w3-twothird">
  <select name="AOP" required="required" class="w3-input">
    <option hidden selected>Area Operativa</option>
      <?php
  $aop = [];
    foreach ($result as $aop) {
   echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
    }
  ?>
  </select>
</div>

<div class="w3-twothird">
   <input type="text" required="required" class="w3-input" name="email" placeholder="Correo electrónico" autocomplete="off" value="">
</div>

<div class="w3-twothird">
  <input type="text" required="required" class="w3-input" name="usuario" placeholder="Elija nombre de usuario" autocomplete="off" value="">
</div>

<div class="w3-twothird">
  <input type="text" required="required" class="w3-input" name="password" placeholder="Elija una contraseña" autocomplete="off" value="">
</div>

  <div class="w3-twothird"> 
    <button type="submit" class="w3-btn w3-round-large">Cargar</button>
 </div>
  </form>


</div>

