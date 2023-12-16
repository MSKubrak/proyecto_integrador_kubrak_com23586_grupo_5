<?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
     define('BASE_URL', 'http://localhost/proyecto_integrador_kubrak_maria_soledad_GRUPO_5/');
   # define('BASE_URL', 'https://....000webhostapp.com/');
   
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Proyecto Integrador KUBRAK MARIA SOLEDAD | GRUPO 5</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/codoacodo.png" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/estilos.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <header>
         <div>
            <nav class="navbar navbar-expand-lg colorfondonav navbar-dark ">
                <div class="container">
                  <a class="navbar-brand" href="#">
                    <img src="<?php echo BASE_URL; ?>assets/img/codoacodo.png" alt="Logo Codo a Codo " 
                        href="<?php echo BASE_URL; ?>/index.php" loading="lazy" width="100px" 
                    class="d-inline-block align-text-center "> 
                     Conf. Bs.As. </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>/index.php">La conferencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#oradores">Los oradores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#lugar">El lugar y la fecha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#convierteteenOrador">Conviértete en orador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-compra-tickets" href="<?php echo BASE_URL; ?>/pages/tickets.php">Comprar tickets</a>
                    
                    <?php 
                        
                        if (isset($_SESSION['usuario'])) {
                            
                        ?>  <!-- 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php #echo $_SESSION['usuario']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                </ul>
                             </li>-->
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['usuario']; ?>
                                </a>
                                <li class="nav-item">
                                <a class="nav-link active" href="<?php echo BASE_URL; ?>includes/cerrar.php">Salir del <span><?php echo $_SESSION['usuario']; ?></span></a> 
                            </li>
                            
                            
                        <?php 
                        } else {
                            // Usuario no logueado: mostrar opción para iniciar sesión
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>includes/login.php"> <button type="button" class="btn btn-outline-success">[Acceder]</button></a>
                            </li>
                        <?php 
                        }
                        ?>   
                    </ul>
                 </div>
                </div>
              </nav>          
            </div>
        </header>