<?php
    include 'Conexion.php';
  session_start();
  $Descripcion=$_POST['Descripcion'];
  $Nombre=$_POST['Nombre'];
  $Telefono=$_POST['Telefono'];
  $Correo=$_POST['correo'];
  $Direccion=$_POST['Direccion'];


      $query="INSERT INTO servicios VALUES('$Nombre','$Direccion','$Correo','$Telefono','$Descripcion')";
      
      $ejecutar = mysqli_query($conexion,$query);
          if($ejecutar){
          echo '<script>
                  alert("Registro Correcto");   
                  window.location ="it_contact.html";
       
                </script>';
          }else{
              echo '<script>
                      alert("Registro Incorrecto");
                      window.location ="it_contact.html";
                    </script>';
          }
?>