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
<body  class="container-fluid" style="  background: rgb(13,65,190);
background: linear-gradient(90deg, rgba(13,65,190,1) 0%, rgba(44,158,246,1) 25%, rgba(6,39,161,1) 62%, rgba(5,43,133,1) 82%, rgba(3,28,83,1) 100%);  ">

<main class="vh-100 ">
    <b></b>
    <section class="vh-25">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="<?php echo base_url()?>assets/img/iconos/logoEscuela.png"
            class="img-fluid " alt="logo-escuela">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 container-fluid">
            
            <!--inicio Formulario-->
            <form  action="" method="post" class="container-fluid">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-0 me-3"><b class="logLetter">Registra tu cuenta</b> </p>
                </div>
                <div class="divider d-flex align-items-center my-0">
                    <p class="text-center fw-bold mx-3 mb-0"> <br></p>
                </div>
                <div >
                    <!-- rut input -->
                    <br>
                    <div class="form-outline mb-4">
                        <p class="lead fw-normal mb-0 me-3"><b class="logLetter">Rut</b> </p>
                        <input type="text" id="rut" name="rut" class="form-control form-control-lg"
                        placeholder="Ingresa tu Rut"  require/>
                    </div>
                    <!-- nombre input -->
                    <div class="form-outline mb-4">
                        <p class="lead fw-normal mb-0 me-3"><b class="logLetter">Nombre</b> </p>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-lg"
                        placeholder="Ingresa tu Nombre" require />
                    </div>
                    <!-- apellido input -->
                    <div class="form-outline mb-4">
                    <p class="lead fw-normal mb-0 me-3"><b class="logLetter">Apellido</b> </p>
                        <input type="text" id="apellido" name="apellido" class="form-control form-control-lg"
                        placeholder="Ingresa tu apellido" require/>

                    </div>
                    <!-- correo input -->
                    <div class="form-outline mb-4">
                    <p class="lead fw-normal mb-0 me-3"><b class="logLetter">Correo</b> </p>
                        <input type="email" id="correo" name="correo" class="form-control form-control-lg"
                        placeholder="Ingresa un correo Valido" require />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                    <p class="lead fw-normal mb-0 me-3"><b class="logLetter">Cotraseña</b> </p>
                        <input type="password" id="contraseña" name="contraseña" class="form-control form-control-lg"
                        placeholder="ingresa una contraseña" require/>

                    </div>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submits" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;"><p > <b class="logLetter"> Registrarse</b></p></button>
                    <p class="small fw-bold mt-2 pt-1 mb-0"><b style="color:white">Ya tienes una cuenta?</b>     <a href="<?php echo base_url()?>principal/login"
                        class="link-danger"><strong>ingresa</strong> </a></p>
                </div>

            </form>
        </div>
        </div>
    </div>
</main>
  
</section>


    
</body>
</html>

