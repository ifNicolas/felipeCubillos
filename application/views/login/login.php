<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Escuela felipe cubillos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/img/iconos/logoEscuela.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/iconos/logoEscuela.png" rel="apple-touch-icon">  


  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b27e2a5a9b.js" crossorigin="anonymous"></script>


  <!-- llamados de scripts -->
  <script href="<?php echo base_url()?>assets/vendor/fontawesome/js/all.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

  <!-- scripts inicio -->
  <!-- custom css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/css-custom/custom.css">
  <!-- css google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Frijole&family=Pacifico&family=Potta+One&family=Bungee+Shade&display=swap" rel="stylesheet">
 
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- custom js -->
    <script src="<?php echo base_url()?>assets/js/js-custom/custom.js"></script>
    <script src="<?php echo base_url()?>assets/js/js-custom/jquery-3.6.0.js"></script>
    <!-- .custom js -->
    
</head>

<!-- /////inicio de contenido/////  -->
<body class="container-fluid" style="background: rgb(143,224,241);
background: linear-gradient(90deg, rgba(143,224,241,1) 0%, rgba(9,120,205,1) 45%, rgba(11,4,148,1) 73%);">
<main class="vh-100">
    <section class="vh-25">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="<?php echo base_url()?>assets/img/iconos/logoEscuela.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

            <!-- INICIO DE FORMULARIO LOGIN -->
            <form action="" method="post">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal align-items-center my-4"><b class="logLetter" >Ingresa con tu cuenta</b> </p>
            </div>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label ><p><b class="logLetter ">Dirección De Correo</b> </p> </label>
                <input type="email" id="correo" name="correo" class="form-control form-control-lg"
                placeholder="Ingresa un Correo Valido"  require/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <label ><p><b class="logLetter ">Contraseña</b> </p> </label>
                <input type="password" id="contraseña" name="contraseña" class="form-control form-control-lg"
                placeholder="Ingresa tu Contraseña"  require/>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    <label ><p><b class="logLetter ">Recuerdame</b> </p> </label>
                </label>
                </div>
                <a href="#"><p> <b class="link-danger" style="font-family: 'Potta One'; font-size:12px">Olvidaste Tu Contraseña?</b></p></a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submits" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;"><p><b class="logLetter">Ingresar</b></p></button>

                <p class="small fw-bold mt-0 pt-1 mb-0 ">  <b class="logLetter">No tienes una cuenta?</b>  <a href="<?php echo base_url()?>principal/registro"
                    class="link-danger"><strong><b style="font-family: 'Potta One'">Registrate</b></strong> </a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
</main>
  
</section>

    
</body>
</html>

