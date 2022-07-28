
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2 class="tituloMarcado">Bajada De Archivos</h2>
  </div>
</div><!-- End Breadcrumbs -->

<div class="row">
<?php
foreach ($archivo as $a)
?>

    <div class="col-md-4">
        <div class="row">
            <? =  $a->NOMBRE ?>
        </div>
        <div class="row">
            <? =  $a->DESCRIPCION ?>
        </div>
    </div>
</div>



</main><!-- End #main -->
<div class="espacio"></div>

