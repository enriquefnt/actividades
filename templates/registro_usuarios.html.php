
<div class="w3-row-padding">

<div>
    <fieldset >
      <legend>Registro de Usuarios</legend>
<form class="w3-container" action="" method="post" >


  <div class="w3-quarter">
    <input type="text" required="required" class="w3-input" name="nombre" placeholder="Nombre" autocomplete="off" value="">
</div>
  <div class="w3-quarter">
  
  <input type="text" required="required" class="w3-input" name="apellido" placeholder="Apellido" autocomplete="off" value="">
</div>

<div class="w3-quarter">
  
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
<div class="w3-quarter">

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
<div class="w3-quarter">
   <input type="text" required="required" class="w3-input" name="email" placeholder="Correo electrónico" autocomplete="off" value="">
  </select>
</div>
<div class="w3-quarter">

  <input type="text" required="required" class="w3-input" name="usuario" placeholder="Elija nombre de usuario" autocomplete="off" value="">
  </select>
</div>
<div class="w3-quarter">
  <input type="text" required="required" class="w3-input" name="password" placeholder="Elija una contraseña" autocomplete="off" value="">
   </div>

   <div class="w3-quarter"> 
    <input type="submit" class="w3-input"  value="Cargar">
  </div>
  </form>

</fieldset>
</div>

