<?php

session_start();

?>



<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>

<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>



<?php



 

foreach ($imagenesActividad as $imagen):  ?>

 <div class="w3-container ">

 <img class="mySlides" src="<?= htmlspecialchars($imagen['archivo'], ENT_QUOTES, 'UTF-8'); ?>"style="width:60%">

 </div>

<?php endforeach; ?>



<div class="w3-row-padding">

<h4>Evento: <?= htmlspecialchars($imagen['titulo'], ENT_QUOTES, 'UTF-8'); ?></h4></div>



<script>

var slideIndex = 1;

showDivs(slideIndex);



function plusDivs(n) {

  showDivs(slideIndex += n);

}



function showDivs(n) {

  var i;

  var x = document.getElementsByClassName("mySlides");

  if (n > x.length) {slideIndex = 1}

  if (n < 1) {slideIndex = x.length}

  for (i = 0; i < x.length; i++) {

    x[i].style.display = "none";  

  }

  x[slideIndex-1].style.display = "block";  

}

</script>