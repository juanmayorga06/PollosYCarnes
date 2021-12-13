<?php
    if(isset($_POST['buscar'])){

        $productoId = $_POST['productoId'];
        $valores = array();
        $valores['existe'] = "0";

        $productoId = $_POST['prodcutoId'];

        $resultados = mysqli_query($conexion, "SELECT * FROM $producto_venta WHERE id = '$productoId'");
        while($consulta = mysqli_fetch_array($resultado)){

            $valores['existe'] = "1";
            $valores['tipo'] = $consulta['tipo'];
            $valores['total'] = $consulta['total'];

            $valores = json_encode($valores);
            echo $valores;
        }
    }
?>
