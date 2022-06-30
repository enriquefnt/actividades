<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<form action="" method="post">

<label>Titulo</label>
<input  type="text" name="titulo">
<br>


<label>Fecha inicio</label>
<input type="date" name="inicio">
<label>Fecha final</label>
<input type="date" name="final">
<label>Área Operativa</label>
<select name="aop" >
    <option value="1">Pichanal</option>
    <option value="2">Colonia Sana Rosa</option>
    <option value="3">Iruyas</option>
  </select>
<br>
<label>Lugar</label>
<input  type="text" name="locale">
<br>


<label>Descripción</label>
<input  type="text" name="descri">
<br>


<label>Temática</label>
<br>
<select name="tema" >
    <option value="1">Lactancia</option>
    <option value="2">Embarazo</option>
    <option value="3">Adulto mayor</option>
  </select>
<br>
<label>Area</label>
<select name="areas" >
    <option value="1">Salud Infantil</option>
    <option value="2">Adultos mayores</option>
    <option value="3">Alimentación Saludable</option>
  </select>
<br>
<select name="tipo" >
    <option value="1">Taller</option>
    <option value="2">Concurso</option>
    <option value="3">Gacebo</option>
  </select>
<select name="tipoParti" >
    <option value="1">Escolares</option>
    <option value="2">Adolescentes</option>
    <option value="3">General</option>
  </select>

<label for="total">Participantes estimados:</label><br>
  <input type="number" required="required" id="total" name="total" placeholder="0" autocomplete="off" value=""><br>


<br>


<button type="submit" class="btn btn-primary" name="enviar">Enviar Información</button>

<br>
    


</form>

</body>
</html>