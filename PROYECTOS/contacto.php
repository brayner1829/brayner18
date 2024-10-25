<?php
include 'includes/header.php';
?>
    <h1>Quienes Somos</h1>
    <main class="container">
        <form class="formulario" method="POST">
            <fieldset>
                <legend>Digite todos sus datos</legend>
                <div class="campo">
                  <label for="Nombre">Nombre</label>
                  <input type="text" name="Nombre" id="Nombre" placeholder="digite nombre completo"> 
                </div>

                <div class="campo">
                    <label for="Telefono">Telefono</label>
                  <input type="text" name="Telefono" id="Telefono" placeholder="+54 3xxxxx">
                </div>

                <div class="campo">
                    <label for="Email">Email</label>
                  <input type="text" name="Email" id="Email" placeholder="correo@correo.com">
                </div>

                <div class="campo">
                    <label for="Mensaje">Mensaje</label>
                  <textarea name="Mensaje" id="Mensaje"></textarea>
                </div>


                <input type="submit" class="btn">
               
            </fieldset>
        </form>
    </main>
    <?php
    var_dump($_POST);
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Email = $_POST['Email'];
    $Mensaje = $_POST['Mensaje'];
try{

  require __DIR__.('/includes/conexion_bd.php');
  $sql ="INSERT INTO contactos (nombre, telefono, email, mensaje) VALUES ('$Nombre','$Telefono', '$Email', '$Mensaje');";
  $query = mysqli_query($coneccion, $sql);
  echo 'se a resivido su mensaje';

} catch (\Throwable $th) {
  var_dump($th);
}




include 'includes/footer.php';
?>