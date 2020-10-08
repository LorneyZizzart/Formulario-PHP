<?php
    $nombre = $_POST['nombre'];
    $password =  $_POST['password'];
    $genero = $_POST['genero'];
    $correo = $_POST['correo'];
    $materia = $_POST['materia'];
    $phone = $_POST['phone'];
    if(!empty($nombre) && !empty($password) && !empty($genero) && !empty($correo) && !empty($materia) && !empty($phone)){
        $host = "localhost";
        $dbuser = "root";
        $dbpss = "";
        $db = "fomulario";

        $conn = new mysqli($host, $dbuser, $dbpss, $db);
        if(mysqli_connect_error()){
            // para verificar la conexion y ver la descripcion del error
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            $searchPhone = "SELECT phone from usuario where phone = ? limit 1";
            $query = "INSERT INTO usuario (nombre, password, genero, correo, materia, phone) VALUES (?,?,?,?,?,?)";

            $stmt = $conn->prepare($searchPhone);
            $stmt ->bind_param("i", $phone);
            $stmt ->execute();
            $stmt ->bind_result($phone);
            $stmt ->store_result();
            $rnum = $stmt ->num_rows;
            if($rnum == 0){
                $stmt->close();
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sssssi", $nombre, $password, $genero, $correo, $materia, $phone);
                $stmt->execute();
                echo "Registrado";

            }else{
                echo "El número de phone existe";
            }

            $stmt->close();
            $conn->close();
            echo "<br><br><a type='button' href='index.php'>Volver</a>";
        }

    }else{
        echo "Todos los datos son obligatorios";
        die(); // equivalente a exit
    }
?>