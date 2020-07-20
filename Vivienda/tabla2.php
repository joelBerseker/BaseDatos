<table class='table table-bordered' id='table'>
    <thead>
        <th>Zona Urbana</th>
        <th>Otro Dato</th>
        <th>Estado</th>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM r1z_zona_urbana";
            require_once '../includes/db.php';
            $resultProduct= mysqli_query($conn, $query);
            while($row= mysqli_fetch_array($resultProduct)){
        ?>
        <tr id="<?php echo $row['ZonUrbNom']?>" onclick="select(this)" class="">
            <td class="id"><?php echo $row['ZonUrbNom']?></td>
            <td><?php echo $row['ZonUrbOtrDat']?></td>
            <td><?php echo $row['ZonaUrbEstReg']?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

