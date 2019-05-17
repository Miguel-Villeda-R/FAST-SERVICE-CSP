<?php

function generarfolio($longitud)
{
    $key     = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max     = strlen($pattern) - 1;
    for ($i = 0; $i < $longitud; $i++)
        $key .= $pattern{mt_rand(0, $max)};
    return $key;
}


function registerToCourse($folio,$course)
{
    $usuario     = "miguelangel";
    $contrasena  = "miguelangel";
    $servidor    = "localhost";
    $basededatos = "id9296254_carsp";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");

}

function registerAssitence($code)
{
    
    $usuario     = "miguelangel";
    $contrasena  = "miguelangel";
    $servidor    = "localhost";
    $basededatos = "id9296254_carsp";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
    
    $consultaCode = "SELECT * FROM `REGISTERS_COURSE` WHERE `code` = '" . $code . "'";
    $resultadoConsultaCode = mysqli_query($conexion, $consultaCode) or die("Algo ha ido mal en la consulta a la base de datos consulta email");
    
    while ($columnaConsultaCode = mysqli_fetch_array($resultadoConsultaCode)) {
        $statusCode = $columnaConsultaCode[code];
    }
    
    if ($statusCode) {
        $updateStatusAssitence = "UPDATE `REGISTERS_COURSE` SET `assistence` = '2' WHERE `code` = '$code'";
        $resultadoUpdate = mysqli_query($conexion, $updateStatusAssitence) or die("Algo ha ido mal en la consulta a la base de datos consulta email");
        
        if ($resultadoUpdate) {
            echo "se actualizo exitosamente";
        } else {
            echo "no se actualizo";
        }
    } else {
        echo "Este codigo no existe.";
    }
}
function changeStatus($id, $status)
{
    
    $usuario     = "miguelangel";
    $contrasena  = "miguelangel";
    $servidor    = "localhost";
    $basededatos = "id9296254_carsp";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
    
    $ChangeStatus = "SELECT * FROM `REGISTERS_COURSE` WHERE `id` = '" . $id . "'";
    $resultadoChangeStatus = mysqli_query($conexion, $ChangeStatus) or die("Algo ha ido mal en la consulta a la base de datos consulta email");
    
    while ($columnaChangeStatus = mysqli_fetch_array($resultadoChangeStatus)) {
        $statusConsulta = $columnaChangeStatus[id];
    }
    
    if ($statusConsulta) {
        $updateStatus = "UPDATE `REGISTERS_COURSE` SET `status` = '$status' WHERE `id` = '$id'";
        echo $updateStatus;

        $resultadoUpdate = mysqli_query($conexion, $updateStatus) or die("Algo ha ido mal en la consulta a la base de datos consulta email");
        
        if ($resultadoUpdate) {
            echo "200";
        } else {
            echo "500";
        }
    } else {
        echo "Este codigo no existe.";
    }
}

function selectContacts()
{
    $usuario     = "miguelangel";
    $contrasena  = "miguelangel";
    $servidor    = "localhost";
    $basededatos = "id9296254_carsp";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
    
    $consultaRegisters = "SELECT * FROM `REGISTERS_COURSE`";
    $resultadoConsultaRegisters = mysqli_query($conexion, $consultaRegisters) or die("Algo ha ido mal en la consulta a la base de datos consulta email");
    

    echo "<table>
            <tr>
                <th>id</th>
                <th>Folio</th>
            </tr>";

    // output data of each row
    while($row = $resultadoConsultaRegisters->fetch_assoc()) 
    {
        echo "<tr>
                <td>" . $row["folio"]. "</td>
                
                <td id='ST".$row["id"]."' style='background-color:" . $bg . "'>" . $row["status"]. "</td>
                <td><button onclick='changeStatus(".$row["id"].",".$changeStatus.")'>Cambiar</button></td>
            </tr>";
    }
    echo "</table>";
}


?>