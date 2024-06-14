<?php

include("conexion.php");

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>TALLER1 BALONES</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">REGISTRO DE BALONES</h1>
        <div class="row pt-3">
            <div class="col">
                <form method="post" id="formularioBalones" action="balones.php">
                    <div class="mb-3">
                        <label lass="form-label"><h5>MARCA</h5></label>
                        <input placeholder="Ingrese la marca del Balón" type="text" name="txtMarca" class="form-control" id="txtMarca">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><h5>PRECIO</h5></label>
                        <input placeholder="Ingrese el precio del Balón"type="number" name="txtPrecio" class="form-control" id="txtPrecio">
                    </div>
                    <div class="mb-3">
                        <label lass="form-label"><h5>COLOR</h5></label>
                        <input placeholder="Ingrese el color del Balón" type="text" name="txtColor" class="form-control" id="txtColor">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label"><h5>DEPORTE</h5></label>
                        <input placeholder="Ingrese el deporte del Balón" type="text" name="txtDeporte" class="form-control" id="txtDeporte">
                    </div>
                    <div class="mb-3">
                        <label lass="form-label"><h5>ID BALON</h5></label>
                        <input placeholder="Al guardar no ingrese nada" type="number" name="txtCodigo" class="form-control" id="txtCodigo">
                    </div>
                    <button type="submit" name="btnGuardar" id="btnGuardar" class="btn btn-primary">Guardar</button>
                    <button type="submit" name="btnActualizar" id="btnActualizar" class="btn btn-dark">Actualizar</button>
                    <button type="submit" name="btnEliminar" id="btnEliminar" class="btn btn-danger">Eliminar</button>
                    <button type="submit" name="btnListar" id="btnListar" class="btn btn-info">Listar</button>
                </form>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">MARCA</th>
                            <th scope="col">PRECIO</th>
                            <th scope="col">COLOR</th>
                            <th scope="col">DEPORTE</th>
                            <th scope="col">ID BALON</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cnn=conectar();
                        $sql="SELECT * FROM balon";
                        $result=$cnn->query($sql);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>".$row['marca']."</td>";
                                echo "<td>".$row['precio']."</td>";
                                echo "<td>".$row['color']."</td>";
                                echo "<td>".$row['deporte']."</td>";
                                echo "<td>".$row['id_balon']."</td>";
                                echo "</tr>";
                            }
                        }else{
                            echo "No hay registros";
                        }
                        ?>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$cnn=conectar();
$codigo=$_REQUEST['txtCodigo'];
$marca=$_REQUEST['txtMarca'];
$precio=$_REQUEST['txtPrecio'];
$color=$_REQUEST['txtColor'];
$deporte=$_REQUEST['txtDeporte'];

if(isset($_REQUEST['btnGuardar'])){
    $sql="INSERT INTO balon (marca, precio, color, deporte) VALUES ('$marca', $precio, '$color', '$deporte')";
    if($cnn->query($sql)===TRUE){
        echo "Registro guardado";
    }else{
        echo "Error: ".$sql."<br>".$cnn->error;
    }
}

if(isset($_REQUEST['btnActualizar'])){
    $sql="UPDATE balon SET marca='$marca', precio=$precio, color='$color', deporte='$deporte' WHERE id_balon=$codigo";
    if($cnn->query($sql)===TRUE){
        echo "Registro actualizado";
    }else{
        echo "Error: ".$sql."<br>".$cnn->error;
    }
}

if(isset($_REQUEST['btnEliminar'])){
    $sql="DELETE FROM balon WHERE id_balon=$codigo";
    if($cnn->query($sql)===TRUE){
        echo "Registro eliminado";
    }else{
        echo "Error: ".$sql."<br>".$cnn->error;
    }
}


?>