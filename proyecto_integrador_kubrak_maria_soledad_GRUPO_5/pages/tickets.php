
<?php include_once('../includes/header.php');
     ?>

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
        <main>
            <br>
              <div class="container fluid d-flex justify-content-center ">
                <!--Card 1-->
              <div class="card-group "  style="width: 46rem;">
                <div class="card border border-primary text-center mx-1">
                  <div class="card-body">
                    <p class="card-text h4">Estudiante</p>
                    <p class="card-text">Tiene un descuento</p>
                    <p class="card-text"> <strong>80%</strong></p>
                    <p class="card-text text-muted"> <small> *presentar documentación</small></p>
                  </div>
                </div>
                <!--Card 2-->
                <div class="card border border-success text-center mx-1" >
                  <div class="card-body">
                    <p class="card-text h4">Trainee</p>
                    <p class="card-text">Tiene un descuento</p>
                    <p class="card-text"> <strong>50%</strong></p>
                    <p class="card-text text-muted"><small> *presentar documentación</small></p>
                  </div>
                </div>
                <!--Card 3-->
                <div class="card border border-warning text-center mx-1" >
                  <div class="card-body">
                    <p class="card-text h4">Junior</p>
                    <p class="card-text">Tiene un descuento</p>
                    <p class="card-text"> <strong>15%</strong></p>
                    <p class="card-text text-muted"><small> *presentar documentación</small></p>
                  </div>
                </div>
              </div>
            </div>

            <div>
                <p class="text-uppercase pt-2 mb-0 text-center">
                  <small>venta</small>
                </p>
                <h3 class="text-uppercase text-center animate__animated animate__heartBeat">valor de ticket $200</h3>
                
              </div>

   <!-- Formulario  -->
 
    <div class="container-fluid col-7">
        <form id="compraEntradas" class="row g-3 " >
          
          <div class="col-md mb-3 ">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre"  aria-label="Nombre"  required>
            <div class="invalid-feedback" id="errorNombre">
              Ingrese Nombre
            </div>
          </div>
          <div class="col-md mb-3">
            <input type="text" class="form-control" id="apellido" placeholder="Apellido"  aria-label="Apellido" required>
            <div class="invalid-feedback" id="errorApellido">
              Ingrese Apellido
            </div>
          </div>
          <div class="col-12">
            <input type="email" class="form-control" id="email" placeholder="Correo" aria-label="Correo" required>
            <div class="invalid-feedback" id="errorEmail">
              Ingrese un mail valido
            </div>
          </div>
          <div class="col-md mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" min="1" step="1" class="form-control" id="cantidad" placeholder="Cantidad" aria-label="Cantidad"/>
            <div class="invalid-feedback" id="errorCantidad">
              Ingrese cantidad de tickets
            </div>
          </div>

          <div class="col-md mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select class="form-select" aria-label="Categoría" id="categoria">
              <option value="General"  selected>General</option>
              <option value="Estudiante">Estudiante</option>
              <option value="Trainee">Trainee</option>
              <option value="Junior">Junior</option>
            </select>
         
          </div>
          
          <div class="alert alert-primary mt-2 mb-4" role="alert" >
            Total a Pagar: $ <span id="total" class="text-dark"></span>
          </div>
          
          <div class="col">
              <button class="btn btn-success col-sm-12  botonEnviar" type="reset" id="botonBorrar" >Borrar</button>
          </div>
          <div class="col">
              <button class="btn btn-success col-sm-12 botonEnviar" type="button" id="botonResumen" >Resumen</button>
            </div>
            
          
        
        </form>
      </div>
    
    
        <!-- fin de Formulario  -->
       
        <br>
        </main>
       
 <?php     include_once('../includes/footer.php');?>
        <script src="../js/tickets.js"></script>
    </body>
</html>