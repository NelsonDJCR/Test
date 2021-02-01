<?php 

class metodos  
{
    public function mostrarDatos($sql)
    {
        $c= new connect();
        $con=$c->connection();

        $result = mysqli_query($con, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function insertarDatos($data)
    {
        $c= new connect();
        $con=$c->connection();
        $sql = "INSERT INTO empleados (cedula, nombre, email, telefono, ciudad, password) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]')";
        return $result=mysqli_query($con, $sql);
        
    }

}


?>