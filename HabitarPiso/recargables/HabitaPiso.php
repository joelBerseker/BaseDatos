<?php
    $db = new mysqli('localhost', 'root','','casoestudio');       
    if(isset($_POST["calle"]) && isset($_POST["numero"]) && isset($_POST["escalera"]) && isset($_POST["planta"])){
        $planta =$_POST["planta"];
        $escalera =$_POST["escalera"];
        $numero =$_POST["numero"];
        $calle =$_POST["calle"];
        $q ="SELECT DISTINCT PisPue FROM r1z_piso 
            WHERE PisCall = '$calle' 
            and PisNum = $numero 
            and PisEsc = '$escalera'
            and PisPla = '$planta'
            and PisEstReg = 'A'";
        $query = $db->query($q);
        $rowCount = $query->num_rows;
        if($rowCount > 0){
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['PisPue'].'">'.$row['PisPue'].'</option>';
            }
        }else{
            echo '<option value="">Planta no disponible</option>';
        }
    }elseif (isset($_POST["calle"]) && isset($_POST["numero"]) && isset($_POST["escalera"])) {
        $escalera =$_POST["escalera"];
        $numero =$_POST["numero"];
        $calle =$_POST["calle"];
        $q ="SELECT DISTINCT PisPla FROM r1z_piso 
            WHERE PisCall = '$calle' 
            and PisNum = $numero 
            and PisEsc = '$escalera'
            and PisEstReg = 'A'";
        $query = $db->query($q);
        $rowCount = $query->num_rows;
        if($rowCount > 0){
            echo '<option value="">Elige Planta</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['PisPla'].'">'.$row['PisPla'].'</option>';
            }
        }else{
            echo '<option value="">Escalera no disponible</option>';
        }
    }elseif (isset($_POST["calle"]) && isset($_POST["numero"]) ) {
        $numero =$_POST["numero"];
        $calle =$_POST["calle"];
        $q ="SELECT DISTINCT PisEsc FROM r1z_piso 
            WHERE PisCall = '$calle' 
            and PisNum = $numero 
            and PisEstReg = 'A'";
        $query = $db->query($q);
        $rowCount = $query->num_rows;
        if($rowCount > 0){
            echo '<option value="">Elige Escalera</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['PisEsc'].'">'.$row['PisEsc'].'</option>';
            }
        }else{
            echo '<option value="">Escalera no disponible</option>';
        }
    }elseif (isset($_POST["calle"])) {
        $calle =$_POST["calle"];
        $q ="SELECT DISTINCT PisNum FROM r1z_piso WHERE PisCall = '$calle'";
        $query = $db->query($q);
        $rowCount = $query->num_rows;
        if($rowCount > 0){
            echo '<option value="">Elige Numero</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['PisNum'].'">'.$row['PisNum'].'</option>';
            }
        }else{
            echo '<option value="">Municipio no disponible</option>';
        }
    }  
?>