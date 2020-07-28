<?php
    $db = new mysqli('localhost', 'root','','casoestudio');
    if(isset($_POST["calle"]) && !empty($_POST["calle"]) && $_POST["calle"]!=""){
        echo$_POST["calle"];
        $q ='SELECT * FROM r1z_bloque_casas WHERE BloCasCall = \''.$_POST['calle'].'\'';
        echo "\n".$q;
        $query = $db->query($q);
        $rowCount = $query->num_rows;
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){
                echo '<option value="'.$row['BloCasNum'].'">'.$row['BloCasNum'].'</option>';
            }
        }else{
            echo '<option value="">Municipio no disponible</option>';
        }
       
    }
?>