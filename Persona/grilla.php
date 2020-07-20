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
            <h1 class="font-weight-bold">Personas</h1>
        </div>
        <div class="col-10 offset-1">
                <form id="formajax01" method="POST">
                <fieldset>
                    <legend>Registro de Personas</legend>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">DNI</label>
                        <div class="col-sm-10">
                        <input type="text" name="DNI" maxlength="8" class="form-control form-control-sm" id="zona"   value="" placeholder="Ingrese el DNI">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombre" class="form-control form-control-sm" id="nombre"   value="" placeholder="Ingrese el/los Nombre(s)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Apellidos</label>
                        <div class="col-sm-10">
                        <input type="text" name="apellidos" class="form-control form-control-sm" id="apellidos"   value="" placeholder="Ingrese los Apellidos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Otros datos de la Persona</label>
                        <div class="col-sm-10">
                        <input type="text" name="OtrosDatos" class="form-control form-control-sm"   value="" id="otrZona" placeholder="Otros Datos de la Persona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Otros datos de la Persona</label>
                        <div class="col-sm-10">
                        <select class="form-control form-control-sm" name="Cabeza"> 
                            <option value="0">Es cabeza de Familia</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Estado</label>
                        <div class="col-sm-10">
                        <input type="text" name="Estado" class="form-control form-control-sm"  value=""  maxlength="1"  id="Estado" placeholder="Estado">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-10 offset-1">
            <fieldset>
                <legend>Tabla de Personas</legend>
        
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
	include("../includes/footer.php")
?>
	