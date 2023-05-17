<?php include 'template/home.php' ?>
<!-- incluir carpetas -->
<?php
    include_once "model/conexion.php";
  
    //print_r($persona);
?>
<!-- ctrl+k+c para comentarios -->
<!-- importamos del bootstrap columnas -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta, damos condicion-->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <!-- alerta de bootstrap -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <!-- botton de bootstrap para cierre -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--competar la condicion  -->
            <?php 
                }
            ?>

            <!-- alerta para cuando se llenan todo los datos, cuenta con una condicion por medio metodo GET -->

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <!-- para cerrar la alerta tenemos un boton de bootstrap(x) -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- para completar el condicional -->
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 
            <h2>Registro estudiantes</h2>
            <!-- fin alerta -->
            <!-- tomamos una tarjeta de bootstrap para la lista que vamos a ver en pantalla, se le agregaro una lista que contiene los datos del estudiante-->
            <div class="card">
                <div class="card-header">
                    Lista de estudiantes 
                </div>
                
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th  scope="col">Documento</th>
                        <th scope="col">Nombre</th> 
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                         <th scope="col">Telefono</th>
                         <th scope="col" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- las condiciones para que se muestre lo que contiene la tabla -->
                        <?php
                        include("procesar_tabla.php");
                        ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-heard">
            <a href="insertarestudiante.php" class="btn btn-primary" >Insertar estudiante</a>
            <a href="insertardocente.php" class="btn btn-primary"> Insertar docente</a>
            <a href="matricula_estudiante.php" class="btn btn-primary"> Insertar matricula</a>
            <a href="consultar_es.php" class="btn btn-primary"> Consultar estudiante</a>
            <a href="consultar_docente.php" class="btn btn-primary"> Consultar docente</a>
            <a href="consulta_cursos.php" class="btn btn-primary"> Consulta matriculas por estudiante</a>
            <a href="consultar_docentecurso.php" class="btn btn-primary"> Consulta matriculas estudiantes y docentes </a>
        </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 
                <h2>Registro docentes</h2>
            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Registro docentes 
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th  scope="col">Documento</th>
                        <th scope="col">Nombres</th> 
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                         <th scope="col">profesion</th>
                         <th scope="col" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                        include("procesar_trabla_docente.php");
                        ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-heard">

            </div>
        </div>
    </div>
</div>