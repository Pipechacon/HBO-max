<?php
$servidor = "127.0.0.1";
$username="root";
$password="";
$dbname="tvirtual";

//create conection

$conn = new mysqli($servidor,$username,$password,$dbname);

//check conection

if($conn->connect_error){
    die("FALLA CONEXION AL SERVIDOR: ", $conn->connect_error);
}
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $Pais = $_POST['Pais']
    