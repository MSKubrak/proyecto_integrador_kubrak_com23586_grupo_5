<main class="container mt-5 overflow-hidden">
    <section class="mt-5">
        <h3 class="text-center">Encontra tus oradores favoritos por sus temas</h3>
        <form class="d-flex" action="../includes/buscar.php" method="post">
            <input class="form-control me-2" name="temabuscar" id="temabuscar" type="search" placeholder="Escribi un tema" aria-label="Buscar">
            <input class="btn btn-outline-success" type="submit" value="Buscar">
        </form>
    </section>
       <h3 class="text-center mt-5">CONOCE TODOS NUESTROS ORADORES</h3>
       <section class="mt-5 overflow-auto">
            <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Modificar</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php #leemos oradores 1 por 1
                        foreach($oradores as $orador){ 
                    ?>
                        <tr>
                            <th scope="row"><?php echo $orador['id_orador'];?></th>
                            <td> <img class="img-fluid img-thumbnail" style="object-fit:cover;" width="150" height="150" src="<?php echo BASE_URL; ?>assets/upload/<?php echo $orador['imagen'];?>" alt="<?php echo $orador['nombre'];?>">  </td>
                            <td><?php echo $orador['nombre'];?></td>
                            <td><?php echo $orador['apellido'];?></td>
                            <td><?php echo $orador['mail'];?></td>
                            <td><?php echo $orador['tema'];?></td>
                            <td><a name="eliminar" id="eliminar" class="btn btn-outline-danger" href="?borrar=<?php echo $orador['id_orador'];?>">Eliminar</a></td>
                            <td><a name="modificar" id="modificar" class="btn btn-outline-info" href="?modificar=<?php echo $orador['id_orador'];?>">Modificar</a></td>
                        </tr>
                    
                    <?php #leemos oradores 1 por 1
                    }
                    ?>
                    </tbody>
            </table>

        </section>

    </main>