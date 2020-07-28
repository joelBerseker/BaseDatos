<?php 
    require_once '../../includes/db.php';
    $zona = $_POST['zona'];
    $estado=$_POST['Estado'];
    $calle=$_POST['calle'];
    $numero = $_POST['numero'];
    $otr = $_POST['OtrosDatos'];
    $metros = $_POST['metros'];
    $tipo = $_POST['tipo'];
    $postal = $_POST['postal'];
    $query = "INSERT INTO r1z_vivienda(VivCall, VivNum, VivTip, VivCodPos, VivMet, VivOtrDat, VivZonUrbNom, VivEstReg) 
                              VALUES ('$calle',$numero,'$tipo',   $postal,$metros,    '$otr',      '$zona','$estado')";
    echo mysqli_query($conn,$query);
?>