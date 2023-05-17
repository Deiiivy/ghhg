<?php include 'template/home.php' ?>

<div class="col-md-4">
    <div class="card-header">
        ingresar datos:
    </div>
    <form class="p-4" method="POST" action="procesar_registrar.php"></form>
    <div class="mb-3">
        <label class="for-label">Documento</label>
        <input type="text" class="form-control" name="documento" autofocus>
        <label class="for-label">Nombre</label>
        <input type="text" class="form-control" name="documento" autofocus>
        
        <label class="for-label">Apellidos</label>
        <input type="text" class="form-control" name="documento" autofocus>
        
        <label class="for-label">Correo</label>
        <input type="text" class="form-control" name="documento" autofocus>
        
        <label class="for-label">Telefono</label>
        <input type="text" class="form-control" name="documento" autofocus>

    </div>
    <div class="d-grid">
        <input type="hidden" name="oculto" value="1">
        <input type="submit" class="btn btn-primary" value="registrar">
</div>
</div>