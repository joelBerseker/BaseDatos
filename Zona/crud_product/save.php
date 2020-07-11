<?php
    require_once '../../includes/db.php';
    $zona = $_POST['Zona'];
    $otroDato = $_POST['OtrosDatos'];
    $estado = $_POST['Estado'];
    $query = "INSERT INTO r1z_zona_urbana (ZonUrbNom, ZonUrbOtrDat,ZonaUrbEstReg) VALUES ('$zona','$otroDato','$estado')";
    echo mysqli_query($conn,$query);
?>
