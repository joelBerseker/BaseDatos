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
            <h1 class="font-weight-bold">Vivienda</h1>
        </div>
        <div class="col-10 offset-1">
                <form id="formajax01" method="POST">
                <fieldset>
                    <legend>Registro de Viviendas</legend>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Zona</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleFormControlSelect1" name="zona" required>
                                <option value="">Selecciona la Zona</option>
                                <?php
                                    $query = "SELECT * FROM r1z_zona_urbana where ZonaUrbEstReg='A'";
                                    require_once '../includes/db.php';
                                    $resultProduct= mysqli_query($conn, $query);
                                    while($row= mysqli_fetch_array($resultProduct)){
                                ?>
                                    <option value="<?=$row['ZonUrbNom']?>"><?=$row['ZonUrbNom']?></option>
                                <?php
                                    }
                                ?>
                            </select>   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Calle</label>
                        <div class="col-sm-10">
                            <input type="text" name="calle" class="form-control form-control-sm" id="zona"   value="" placeholder="Ingrese la Calle">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Numero</label>
                        <div class="col-sm-10">
                            <input type="text" name="numero" class="form-control form-control-sm" id="zona"   value="" placeholder="Ingrese numero de Calle">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipo de Vivienda</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="tipo" id="exampleFormControlSelect1" required>
                            <option value="B">Bloque de Casas</option>
                            <option value="C">Casa Particular</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Codigo Postal</label>
                        <div class="col-sm-10">
                            <input type="number" name="postal" class="form-control form-control-sm" id="zona"   value="" placeholder="Ingrese Codigo Postal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Otros datos de Zona</label>
                        <div class="col-sm-10">
                        <input type="text" name="OtrosDatos" class="form-control form-control-sm"   value="" id="otrZona" placeholder="Otros Datos sobre la Zona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Metros</label>
                        <div class="col-sm-10">
                        <input type="number" name="metros" class="form-control form-control-sm"   min="1"  id="Estado" placeholder="Ingrese El tamaño en Metros">
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
                <legend>Tabla de Viviendas</legend>
        
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