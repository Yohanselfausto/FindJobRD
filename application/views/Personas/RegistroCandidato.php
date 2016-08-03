<?php
$completo = true; // variable que verifica si el formulario esta completo
if(isset($_POST['NombreUsuario'])){
  // donde pones el -nombre- de nombreempresa o no me acuerdo como se llamaba en $_POST['nombre']
  // verifica cada elemento enviado y si hay uno vacio entonces cambia el valor de la variable
  foreach($_POST as $elemento){
    if($elemento == ""){
      $completo = false;
    }
  }
  if($completo){
    // Avisas que los datos se han guardado
    echo "<script>alert('Se ha registrado correctamente')</script>";
    // aqui codigo de insertar datos en una tabla

    // aqui codigo de insertar datos en la otra

  } else {
    // Aqui avisas se requiere que el formmulario este completo esto incluira los select
    // si tu escribes a cada option un valor y el primero le dejas el valor "" o eso creo
    echo"<script>alert('Por Favor llene todos los datos del formulario')</script>";
  }
}
?>



<div class="container">
      <h3 style="color:black">Registrar Usuario</h3>
      <div class="row">

      <form action="" method="post">
        <div class="col-md-12" >
          <div class="col-md-12">

            <div class="form-group input-group" >
              <span style="color: #2E9AFE"class="input-group-addon">ID:</span>
              <input type="text" class="form-control" name="UsuarioID" readonly>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Email:</span>
              <input type="text" class="form-control" name="Email" required="Email">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Usuario:</span>
            <input type="text" class="form-control" name="NombreUsuario" required="NombreUsuario">
                </div>

            <div class="form-group input-group">
             <span class="input-group-addon">Contraseña:</span>
            <input type="text" class="form-control" name="Contrasena" required="Contrasena">
                </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Nombres:</span>
              <input class="form-control" name="Nombre" required="Nombre">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Apellidos:</span>
              <input type="text" class="form-control" name="Apellido" required="Apellido">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Cedula:</span>
              <input type="text" class="form-control" name="Cedula" required="Cedula" >
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">País:</span>
              <select class="list-group-item" name="Pais">
                <option value="">Seleccione País</option>

              </select>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Ciudad:</span>
              <select class="list-group-item" name="Ciudad">
                <option value="">Seleccione Ciudad</option>

              </select>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Dirección:</span>
              <input type="text" class="form-control" name="Direccion" required="Direccion">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Código Postal:</span>
              <input type="text" class="form-control" name="Direccion" required="Direccion">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Telefono:</span>
              <input type="text" class="form-control" name="Telefono" required="Telefono">
            </div>

            <div class="form-group">
             <label for="Curriculum">Adjuntar Curriculum</label>
             <input type="file" id="curriculum">
              </div>
              </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        </div>
      </form>
    </div>
<br/>
<br/>
