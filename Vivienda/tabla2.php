<table class='table table-bordered' id='table'>
    <thead>
        <th>Calle</th>
        <th>Numero</th>
        <th>Tipo</th>
        <th>Codigo Postal</th>
        <th>Area</th>
        <th>Otro Dato</th>
        <th>Zona Urban</th>
        <th>Estado</th>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM r1z_vivienda";
            require_once '../includes/db.php';
            $resultProduct= mysqli_query($conn, $query);
            $cont = 0;
            while($row= mysqli_fetch_array($resultProduct)){
        ?>
        <tr id="<?=$cont?>" onclick="select(this)" class="">
            <td><?=$row['VivCall']?></td>
            <td><?=$row['VivNum']?></td>
            <td><?=$row['VivTip']?></td>
            <td><?=$row['VivCodPos']?></td>
            <td><?=$row['VivMet']?></td>
            <td><?=$row['VivOtrDat']?></td>
            <td><?=$row['VivZonUrbNom']?></td>
            <td><?=$row['VivEstReg']?></td>
        </tr>
        <?php
                $cont = $cont+1;
            }
        ?>
    </tbody>
</table>

