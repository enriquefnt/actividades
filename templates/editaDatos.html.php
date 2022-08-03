<?php
//if (empty($_SESSION['name']))
//{session_start();}
session_start();


?>
<div class="w3-row-padding">

<h5>Edición de datos</h5>

</div>



<div class="w3-row-padding">
 

<form class="w3-container" action="editaDatos.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="idActividad" value=<?=$actiAEditar['idActividad'] ?? ''?> > 

<input class="w3-input" type="text" required="required" name="titulo" placeholder="Título" value="<?=$actiAEditar['titulo'] ?? ''?>">


<div class="w3-half">
<input class="w3-input" type="text" required="required" name="inicio" placeholder="Fecha inicial" onfocus="(this.type='date')" value="<?=$actiAEditar['inicio'] ?? ''?>">

</div>
<div class="w3-half">
<input class="w3-input" type="text" name="final" placeholder="Fecha final"  onfocus="(this.type='date')" value="<?=$actiAEditar['final'] ?? ''?>">

</div>
<div class="w3-half">

<select name="aop" required="required" class="w3-input">
  <option value="<?=$actiAEditar['aop'] ?? ''?>" selected><?=$actiAEditar['areaoperativa'] ?? ''?></option>
    <?php
$aop = [];
  foreach ($areas as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
  </select>
</div>
<div class="w3-half">
<input  type="text" name="locale" class="w3-input" placeholder="Lugar" value="<?=$actiAEditar['locale'] ?? ''?>">
</div>


<textarea   class="w3-input" name="descri"  ><?=$actiAEditar['descri'] ?? ''?></textarea>


<div class="w3-half">
<select name="tema" required="required" class="w3-input">
  <option value="<?=$actiAEditar['tema'] ?? ''?>" selected><?=$actiAEditar['temas'] ?? ''?></option>
    <?php
$aop = [];
  foreach ($temas as $tema) {
 echo '<option value=' .  $tema['idTemas'].'>' . $tema['temas'] .'</option>';
  }
?>
  </select>
</div>



<div class="w3-half">
  <select name="modal"  id="modal" required="required" class="w3-input">
  <option value="<?=$actiAEditar['modal'] ?? ''?>" selected><?=$actiAEditar['modalidades'] ?? ''?></option>
    <?php
$aop = [];
  foreach ($modalidades as $modalidad) {
 echo '<option value=' .  $modalidad['idModalidad'].'>' . $modalidad['modalidades'] .'</option>';
  }
?>
  </select>
</div>

<div class="w3-half">
<select name="tipoParti" required="required" class="w3-input">
  <option value="<?=$actiAEditar['tipoParti'] ?? ''?>" selected><?=$actiAEditar['participantes'] ?? ''?></option>
    <?php
$aop = [];
  foreach ($participantes as $participante) {
 echo '<option value=' .  $participante['idParticipantes'].'>' . $participante['participantes'] .'</option>';
  }
?>
  </select>
</div>



<div class="w3-half">
  <input type="number" required="required" class="w3-input" id="total" name="total" placeholder="Total de participantes estimados" autocomplete="off" value=<?=$actiAEditar['total'] ?? ''?>>

</div>

<input type="hidden"   name="idUser"  value=<?=$actiAEditar['idUser'];?>>
<br>


    <div  class="w3-half" id="content">
       <br>
       <label class="custom-file-label" for="archivo">Subir fotos</label>
                <input class="custom-file-input" type="file" multiple="multiple" name="archivo[]" id="archivo" placeholder="Puede subir hasta 3 fotos">
                <input  hidden type="date" name="fecha" value="<?=date('Y-m-d');?>" >
                <input  hidden type="number" name="estado" value=1 >
  <br><br>         
<div class="w3-half">
<button type="submit" class="btn btn-primary" name="submit">Guardar cambios</button>

</div>

</div>
<div class="w3-row-padding">


<p align="right">* Evite cargar mas de 3 fotos o fotos muy grandes</p>
</div>


