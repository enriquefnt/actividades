<?php
session_start();
?>



<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
	
	<div class="carousel-item active">
      <img src="../imagenes/caratulaFotos.jpg"  class="d-block" style="width:1%">
    </div>
  
  <?php 
 

  foreach ($imagenesActividad as $imagen): ?>
    
    <div class="carousel-item ">
      <img src="<?= htmlspecialchars($imagen['archivo'], ENT_QUOTES, 'UTF-8'); ?>"  class="d-block" style="width:100%">
    </div>
    
<?php endforeach; ?>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  
</div>


