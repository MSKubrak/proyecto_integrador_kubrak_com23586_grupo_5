<?php ob_start();
session_start(); ?>
<?php 
    #validar datos
    if ($_POST){
      #conexion a la base
      /*<?php include 'includes/conexion.php'; ?>
        <?php $conexion = new conexion(); # me conecto a la base de datos
        $user= $conexion->consultar("SELECT * FROM `usuarios` where mail =".$_POST['email'] ."and password="..$_POST['pass']);
        $user['es_admin'];  #tiene que ser un campo de la base de datos de la tabla usuarios
        $user['password']  # levanto la contraseña
       
       ?> */
      #mail
      #contraseña
      #es_admin s o n 
      /*
      select mail, pass
      from usuarios where
      es_admin = 'S';*/
      /* USUARIOS["mail"] */
        if( ($_POST['email']=="grupo5") && ($_POST['password']=='cac') ){
          $_SESSION['usuario']= $_POST['email'];
          $_SESSION['logueado']='S';
          $_SESSION['privilegio']="Admin";
          #redirecciono porque ingreso ok 
          header("location:../pages/listado_admin.php");
          die();
         // exit;
        }
        else{
            # aca me da igual quien se loguea
           $_SESSION['usuario'] = $_POST['email'];
           header("location:../pages/listado.php");
          
           die();
        }
    }
    include_once("../includes/header.php")
    ?>    

    <main class="container mt-5">    
        <div class="row mt-5 justify-content-center">
            <h2 class="text-center">LOGIN</h2>
            <div class="col-6">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Usuario</label>
                        <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                
                    <input type="submit" class="btn btn-success text-center" value="Login">
                    
                </form>
                <a href="<?php echo BASE_URL; ?>includes/registrarse.php">Si no tenes user registrate</a>
                <p>usuario :grupo5 </p>
                <p>contraseña:cac </p>
            </div>
            
        </div>
</main>
<?php include_once("../includes/footer.php")?>