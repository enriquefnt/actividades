<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="w3-row-padding">
  

<form class="w3-container" action="" method="post">


<input class="w3-input" type="text" name="titulo" placeholder="Título">


<div class="w3-half">
<input class="w3-input" type="text" name="inicio" placeholder="Fecha inicial"
                    onfocus="(this.type='date')">

</div>
<div class="w3-half">
<input class="w3-input" type="text" name="final" placeholder="Fecha final"
                    onfocus="(this.type='date')">

</div>
<div class="w3-half">

<select name="aop" class="w3-input" >
       <option hidden selected>Area Operativa</option>
    <option value="2">Colonia Sana Rosa</option>
    <option value="3">Iruyas</option>
  </select>
</div>
<div class="w3-half">
<input  type="text" name="locale" class="w3-input" placeholder="Lugar">
</div>


<input  type="text" class="w3-input" name="descri" placeholder="Descripción">




<div class="w3-half">
<select name="tema" class="w3-input">
    <option hidden selected>Temas</option>
    <option value="1">Lactancia</option>
    <option value="2">Embarazo</option>
    <option value="3">Adulto mayor</option>
  </select>
</div>

<div class="w3-half">
<select name="areas" class="w3-input">
    <option hidden selected>Areas</option>
    <option value="1">Salud Infantil</option>
    <option value="2">Adultos mayores</option>
    <option value="3">Alimentación Saludable</option>
  </select>
</div>
<div class="w3-half">
<select name="tipo"  class="w3-input">
    <option hidden selected>Tipo</option>
    <option value="1">Taller</option>
    <option value="2">Concurso</option>
    <option value="3">Gacebo</option>
  </select>
</div>
<div class="w3-half">
<select name="tipoParti" class="w3-input" >
    <option hidden selected>Participantes</option>
    <option value="1">Escolares</option>
    <option value="2">Adolescentes</option>
    <option value="3">General</option>
  </select>
</div>

<div class="w3-half">
  <input type="number" required="required" class="w3-input" id="total" name="total" placeholder="Total de participantes estimados" autocomplete="off" value=""><br>


<br>


<button type="submit" class="btn btn-primary" name="enviar">Enviar Información</button>

<br>
    


</form>
</div>

</body>
</html>