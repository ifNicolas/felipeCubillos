
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2 class="tituloMarcado">Bajada De Archivos</h2>
  </div>
</div><!-- End Breadcrumbs -->

<?php

?>

<div class="caja">
  <?php
  		if($dir = opendir('uploads'))
      {
        while($archivos = readdir($dir))
        {
          if($archivos != '.' && $archivos != '..' )
          {
            echo "Achivo : <strong>$archivos</strong><br/>";
          }

        }
      }
  ?>
</div>



</main><!-- End #main -->
<div class="espacio"></div>

