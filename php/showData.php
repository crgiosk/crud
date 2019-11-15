<?php
require_once('conection.php');
$con = new Conection();
$conection = $con->getConection();

?>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Cedula</th>
            <th scope="col">Valor</th>
            <th scope="col">Fecha</th>
            <th scope="col">Tipo</th>
            <th scope="col">Observacion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $consult = "SELECT * FROM pagosxrecibo";
        $result = mysqli_query($conection,$consult);
        while ($date = mysqli_fetch_row($result)) {

        ?>
            <tr>
                <td><?php echo $date[0] ?></td>
                <td><?php echo $date[1] ?></td>
                <td><?php echo $date[2] ?></td>
                <td><?php echo $date[3] ?></td>
                <td><?php echo $date[4] ?></td>
                <td><?php echo $date[5] ?></td>
                <td>
                    <button data-toggle="modal" data-target="#ModalActualizar" class="btn btn-warning btn-sm " onclick="actualizar('.$info.')">
                        <i class="fas fa-edit"></i>
                    </button>
                </td>
                <td>
                    <span class="btn btn-danger btn-sm" onclick="deleteData('.$date['PREid'].')">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </td>
            </tr>
        <?php
    }
    ?>
    </tbody>


    $info=$date['PREid'];

    $table.='<tr>
        <td>'.$date['PREid'].'</td>
        <td>'.$date['PRECid'].'</td>
        <td>'.$date['PREvalor'].'</td>
        <td>'.$date['PREfecha'].'</td>
        <td>'.$date['PREtipo'].'</td>
        <td>'.$date['PREobservacion'].'</td>

    </tr>';
    }
    $conection->close();

    echo '
    <tbody>
        '.$table.'
    </tbody>'
    ?>