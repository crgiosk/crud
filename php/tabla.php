<?php
require_once('conection.php');
$con = new Conection();


?>
<div class="row">
    <div class="col-sm-12">
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
                $conection = $con->getConection();
                $consult = "SELECT * FROM pagosxrecibo";
                $result = mysqli_query($conection, $consult);
                while ($date = mysqli_fetch_row($result)) {

                    $datos = $date[0] . "||" .
                        $date[1] . "||" .
                        $date[2] . "||" .
                        $date[3] . "||" .
                        $date[4];
                    ?>
                    <tr>
                        <td><?php echo $date[0] ?></td>
                        <td><?php echo $date[1] ?></td>
                        <td><?php echo $date[2] ?></td>
                        <td><?php echo $date[3] ?></td>
                        <td><?php echo $date[4] ?></td>
                        <td><?php echo $date[5] ?></td>
                        <td style="text-align: center;">
                            <button data-toggle="modal" data-target="#ModalActualizar" class="btn btn-warning btn-sm " onclick="capData('<?php echo $datos ?>')">
                            <i class="far fa-edit"></i>
                            </button>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn btn-danger btn-sm" 
                            onclick="deleteData('<?php echo $date[0] ?>')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </thead>
        </table>
    </div>
</div>