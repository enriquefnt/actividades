


<div>
    <fieldset >
      <legend>Registro de Usuarios</legend>
<form class="w3-group w3-light-grey" action="" method="post" >
    <label for="Nombre">Nombre:</label><br>
  <input type="text" required="required" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off" value=""><br>
  <label for="Apellido">Apellido:</label><br>
  <input type="text" required="required" id="apellido" name="apellido" placeholder="Apellido" autocomplete="off" value=""><br>



  <label for="profesion">Profesión:</label><br>
  <select name="profesion" id="profesion" value="-------">
    <option value='1'>Enfermería</option>
    <option value='2'>Nutrición</option>
    <option value='3'>Medicina</option>
    <option value='4'>Agente Sanitario</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
    <br>

<label for="AOP">Area Operativa:</label><br>
<select name="AOP" required="required" id="AOP">
<option value=0>Seleccione AOP</option>
    <?php
$aop = [];
  foreach ($result as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
  </select>
<br>
  <label for="email">Correo electronico:</label><br>
  <input type="text" required="required" id="email" name="email" placeholder="Correo electrónico" autocomplete="off" value=""><br>
  </select>
<label for="usuario">Usuario:</label><br>
  <input type="text" required="required" id="ususario" name="usuario" placeholder="Elija nombre de usuario" autocomplete="off" value=""><br>
  </select>
<label for="password">Contraseña:</label><br>
  <input type="text" required="required" id="password" name="password" placeholder="Elija una contraseña" autocomplete="off" value=""><br><br>
    <input type="submit"  class="w3-button w3-black" value="Cargar">
</fieldset>
</div>