<table class='table table-bordered' id='table'>
    <thead>
        <th>DNI</th>
        <th>Nombre(s)</th>
        <th>Apellidos</th>
        <th>Otros Datos</th>
        <th>Cabeza de Familia</th>
        <th>Vivienda Calle</th>
        <th>Vivienda Numero</th>
        <th>Estado</th>
    </thead>
    <tbody>
        <?php
            function verificarP($value){
                if(strlen($value)==0){
                    return "Es Cabeza de Familia";
                }else{
                    return $value;
                }
            }
            function verificarV($value){
                if(strlen($value)==0){
                    return "Aun No registrado";
                }else{
                    return $value;
                }
            }
            $query = "SELECT * FROM r2z_persona";
            require_once '../includes/db.php';
            $resultProduct= mysqli_query($conn, $query);
            while($row= mysqli_fetch_array($resultProduct)){
        ?>
        <tr id="<?=$row['PerDNI']?>" onclick="select(this)" class="">
            <td class="id"><?=$row['PerDNI']?></td>
            <td><?=$row['PerNom']?></td>
            <td><?=$row['PerApe']?></td>
            <td><?=$row['PerOtrDat']?></td>
            <td><?=verificarP($row['PerDniCabFam'])?></td>
            <td><?=verificarV($row['PerCall'])?></td>
            <td><?=verificarV($row['PerNum'])?></td>
            <td><?=$row['PerEstReg']?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

