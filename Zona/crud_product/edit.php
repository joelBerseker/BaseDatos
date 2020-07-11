<?php 
    include("../../includes/db.php");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $query = "SELECT * FROM r1z_zona_urbana WHERE ZonUrbNom = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)== 1 ){
            $row = mysqli_fetch_array($result);
            $title= $row['ZonUrbOtrDat'];
           
        }
        
    }
    if(isset($_POST['update'])){
        $zona = $_POST['Zona'];
        $otroDato = $_POST['OtrosDatos'];
        $query = "UPDATE r1z_zona_urbana SET ZonUrbOtrDat = '$otroDato' WHERE ZonUrbNom = '$zona'";
        $result = mysqli_query($conn,$query);
        
        $_SESSION['message'] = 'Product Edited Succesfully';
        $_SESSION['message_type']= 'info';
        header("Location: ../index.php");
        
    }
?>
<?php
	include('../includes/header.php')
?>
<div class="container p-4"></div>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                <div class="form-group">
						<input type="text" name="titlex2" class="form-control" value="<?php echo $title;?>" placeholder="Product Title" autofocus>
					</div>
					<div class="form-group">
						<textarea name="descriptionx2"  row="2" class="form-control"  placeholder="Product Description" ><?php echo $desciption;?></textarea>
					</div>
					<button class="btn btn-success btn-block" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>


<?php
	include("../includes/footer.php")
?>