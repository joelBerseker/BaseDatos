<table class='table table-bordered' id='table'>
    <thead>
        <th>Calle</th>
        <th>Numero</th>
        <th>Escalera</th>
        <th>Planta</th>
        <th>Puerta</th>
        <th>DNI Persona</th>
        <th>Estado</th>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM r2z_piso_habitado where PisoHabEstReg ='A'";
            require_once '../includes/db.php';
            $resultProduct= mysqli_query($conn, $query);
            $cont = 0;
            while($row= mysqli_fetch_array($resultProduct)){
        ?>
        <tr id="<?=$cont?>" onclick="select(this)" class="">
            <td><?=$row['PisoHabCall']?></td>
            <td><?=$row['PisoHabNum']?></td>
            <td><?=$row['PisoHabEsc']?></td>
            <td><?=$row['PisoHabPla']?></td>
            <td><?=$row['PisoHabPue']?></td>
            <td><?=$row['PisoHabPerDni']?></td>
            <td><?=$row['PisoHabEstReg']?></td>
        </tr>
        <?php
                $cont = $cont+1;
            }
        ?>
    </tbody>
</table>

