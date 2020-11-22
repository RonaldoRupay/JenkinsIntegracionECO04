<?php
class Conexion {
   public function conecta() {
        $enlace = mysqli_connect("localhost", "root", "", "bdproy");        
        if ($enlace->connect_error) {
            die("Conexión Fallada: " . $enlace->connect_error);
        }
        echo "Conectado exitosamente";
       return $enlace;
        mysqli_close($enlace);
    }    
}

?>