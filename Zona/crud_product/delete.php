<?php
    include("../../includes/db.php");
    $id = $_POST['id'];
    $query = "DELETE FROM r1z_zona_urbana WHERE ZonUrbNom = '$id'";
    echo mysqli_query($conn,$query);
    
?>
