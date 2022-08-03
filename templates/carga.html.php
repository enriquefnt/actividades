<?php
//if (empty($_SESSION['name']))
//{session_start();}
session_start();


?>
<div class="w3-row-padding">

<h5>Datos de la actividad</h5>

</div>



<div class="w3-row-padding">
 

<form class="w3-container" action="" method="post" enctype="multipart/form-data">


<input class="w3-input" type="text" required="required" name="titulo" placeholder="Título">


<div class="w3-half">
<input class="w3-input" type="text" required="required" name="inicio" placeholder="Fecha inicial"
                    onfocus="(this.type='date')">

</div>
<div class="w3-half">
<input class="w3-input" type="text" name="final" placeholder="Fecha final"
                    onfocus="(this.type='date')">

</div>
<div class="w3-half">

<select name="aop" required="required" class="w3-input">
  <option hidden selected>Area Operativa</option>
    <?php
$aop = [];
  foreach ($areas as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
  </select>
</div>
<div class="w3-half">
<input  type="text" name="locale" class="w3-input" placeholder="Lugar">
</div>


<textarea   class="w3-input" name="descri" placeholder="Descripción"></textarea>


<div class="w3-half">
<select name="tema" required="required" class="w3-input">
  <option hidden selected>Tema principal</option>
    <?php
$aop = [];
  foreach ($temas as $tema) {
 echo '<option value=' .  $tema['idTemas'].'>' . $tema['temas'] .'</option>';
  }
?>
  </select>
</div>



<div class="w3-half">
<select name="modal" required="required" class="w3-input">
  <option hidden selected>Modalidad principal</option>
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
  <option hidden selected>Grupo de participantes mayoritario</option>
    <?php
$aop = [];
  foreach ($participantes as $participante) {
 echo '<option value=' .  $participante['idParticipantes'].'>' . $participante['participantes'] .'</option>';
  }
?>
  </select>
</div>



<div class="w3-half">
  <input type="number" required="required" class="w3-input" id="total" name="total" placeholder="Total de participantes estimados" autocomplete="off" value="">

</div>

<input type="hidden"   name="idUser"  value=<?=$_SESSION['idUser'];?>>
<br>


    <div  class="w3-half" id="content">
       <br>
       <label class="custom-file-label" for="archivo">Subir fotos</label>
                <input class="custom-file-input" type="file" multiple="multiple" name="archivo[]" id="archivo" placeholder="Puede subir hasta 3 fotos">
                <input  hidden type="date" name="fecha" value="<?=date('Y-m-d');?>" >
                <input  hidden type="number" name="estado" value=1 >
  <br><br>         
<div class="w3-half">
<button type="submit" class="btn btn-primary" name="submit">Enviar Información</button>

</div>
<div class="w3-row-padding">


<p align="right">* Evite cargar mas de 3 fotos o fotos muy grandes</p>
</div>
</div>



