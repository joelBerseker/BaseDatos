<?php
	include("../includes/db.php")
?>
<?php
	include("../includes/header.php")
?>
<br/>
<div class="container col-8 offset-2 border">
    <div class="row" >
        <div class="col-10 offset-1">
            <h1 class="font-weight-bold">Pisos</h1>
        </div>
        <div class="col-10 offset-1">
                <form id="formajax01" method="POST">
                <fieldset>
                    <legend>Registro de Pisos</legend>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Calle</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleFormControlSelect1" name="Calle" required>
                                <option value="">Selecciona la Calle</option>
                                <?php
                                    $query = "SELECT DISTINCT BloCasCall  FROM r1z_bloque_casas where BloCasEstReg='A'";
                                    require_once '../includes/db.php';
                                    $resultProduct= mysqli_query($conn, $query);
                                    while($row= mysqli_fetch_array($resultProduct)){
                                ?>
                                    <option value="<?=$row['BloCasCall']?>"><?=$row['BloCasCall']?></option>
                                <?php
                                    }
                                ?>
                            </select>   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Numero</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="numero" name="numero" required>
                                <option value="">Selecciona el Numero</option>
                            </select>   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Escalera</label>
                        <div class="col-sm-10">
                            <input type="text" name="escalera" class="form-control form-control-sm" id="escalera" maxlength="1" value="" placeholder="Ingrese Escalera">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Planta</label>
                        <div class="col-sm-10">
                            <input type="number" min="1" name="planta" class="form-control form-control-sm" id="Planta"   value="" placeholder="Ingrese Planta">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Puerta</label>
                        <div class="col-sm-10">
                            <input type="number" min="1" name="puerta" class="form-control form-control-sm" id="puerta"  value="" placeholder="Ingrese Puerta">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Otros datos del Piso</label>
                        <div class="col-sm-10">
                        <input type="text" name="OtrosDatos" class="form-control form-control-sm"   value="" id="otrZona" placeholder="Otros Datos sobre el Piso">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Metros</label>
                        <div class="col-sm-10">
                        <input type="number" name="metros" class="form-control form-control-sm"   min="1"  id="metro" placeholder="Ingrese El tamaño en Metros">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dueño</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="dueño" name="dueño" required>
                                <option value="">Selecciona dueño del Piso</option>
                                <?php
                                    $query = "SELECT PerDNI  FROM r2z_persona where PerEstReg='A' AND `PerDniCabFam` IS NULL";
                                    require_once '../includes/db.php';
                                    $resultProduct= mysqli_query($conn, $query);
                                    while($row= mysqli_fetch_array($resultProduct)){
                                ?>
                                    <option value="<?=$row['PerDNI']?>"><?=$row['PerDNI']?></option>
                                <?php
                                    }
                                ?>
                            </select>   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Estado</label>
                        <div class="col-sm-10">
                        <input type="text" name="Estado" class="form-control form-control-sm"  value=""  maxlength="1"  id="Estado" placeholder="Ingrese el Estado">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-10 offset-1">
            <fieldset>
                <legend>Tabla de Pisos</legend>
        
                <div id="recargar01">	
                    <?php 
                        include("tabla2.php");
                    ?>
                </div>
            </fieldset>
        </div>
        <div class="col-10 offset-1">
            <div class=" container-fluid">
                <div class="row align-items-center">

                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block" id="btnAdicionar">Adiccionar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block"id="btnModificar">Modficar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block" id="btnEliminar">Eliminar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block" id="btnCancelar">Cancelar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block" id="btnInactivar">Inactivar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block"id="btnReactivar">Reactivar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block" id="btnActualizar" disabled>Actualizar</button>
                    </div>
                    <div class="col-2 offset-1 mb-3">
                        <button class="btn btn-primary btn-block" id="btnSalir">Salir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
	include("../includes/footer.php");
?>