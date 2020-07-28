<table class='table table-bordered' id='table'>
    <thead>
        <th>Calle</th>
        <th>Numero</th>
        <th>Escalera</th>
        <th>Planta</th>
        <th>Puerta</th>
        <th>Area</th>
        <th>Otro Dato</th>
        <th>Estado</th>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM r1z_piso where PisEstReg ='A'";
            require_once '../includes/db.php';
            $resultProduct= mysqli_query($conn, $query);
            $cont = 0;
            while($row= mysqli_fetch_array($resultProduct)){
        ?>
        <tr id="<?=$cont?>" onclick="select(this)" class="">
            <td><?=$row['PisCall']?></td>
            <td><?=$row['PisNum']?></td>
            <td><?=$row['PisEsc']?></td>
            <td><?=$row['PisPla']?></td>
            <td><?=$row['PisPue']?></td>
            <td><?=$row['PisMet']?></td>
            <td><?=$row['PisOtroDato']?></td>
            <td><?=$row['PisEstReg']?></td>
        </tr>
        <?php
                $cont = $cont+1;
            }
        ?>
    </tbody>
</table>

