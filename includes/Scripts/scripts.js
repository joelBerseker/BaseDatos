
$(document).ready(function(){
   
    $('#btnguardar').click(function(){
        var datos= $('#formajax').serialize();
        $.ajax({
            type:"POST",
            url:"/BaseDatos/Zona/crud_product/save.php",
            data: datos,
            success:function(r){
                if(r==0){
                    alert("fallo al Ingresar");
                }else if(r==2){
                    alert("Ya existe");
                }
                else{
                    swal("Termine");
                }
                    
            }
        });
        $("#formajax")[0].reset();
        $('#recargar').load('tabla.php');
        return false;
    });

    $('#btnGuardarArchivos').click(function(){
        var formData= new FormData(document.getElementById('frmArchivos'));
        var fileSelect = document.getElementById('archivos');
        var files = fileSelect.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            formData.append('archivos[]', file, file.name);
        }
        $.ajax({
            url: "save.php",
            type: "POST",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){
                respuesta=respuesta.trim();
                if(respuesta==1){
                    $('#recargarArchivos').load("tabla.php");
                }else{
                    alert(respuesta);
                }
            }
        });
        return false;
    });
    $('#btnAdicionar').click(function(){
        document.getElementById("zona").value="";
        document.getElementById("otrZona").value="";
        document.getElementById("Estado").value="A";
        $('#btnActualizar').removeAttr("disabled");//habilita boton
        return false;
    });
    $('#btnActualizar').click(function(){
        if(document.getElementById('Estado').disabled){
            alert("edicion");
            return false;
        }    
        var datos= $('#formajax01').serialize();
        $.ajax({
            type:"POST",
            url:"/BaseDatos/Zona/crud_product/save.php",
            data: datos,
            success:function(r){
                if(r==0){
                    alert("fallo al Ingresar");
                }else if(r==2){
                    alert("Ya existe");
                }
                else{
                    swal("Termine");
                }
                    
            }
        });
        $("#formajax01")[0].reset();
        $('#recargar01').load('tabla2.php');
        document.getElementById('btnActualizar').disabled=true;
        return false;
    });
    $('#btnCancelar').click(function(){
        document.getElementById("zona").value="";
        document.getElementById("otrZona").value="";
        document.getElementById("Estado").value="";
        document.getElementById('btnActualizar').disabled=true;
        return false;
    });
    $('#btnModificar').click(function(){
        elmnt= document.getElementsByClassName('selected');
        var Cells = elmnt[0].getElementsByTagName("td");
        document.getElementById("zona").value=Cells[0].innerText;
        document.getElementById("otrZona").value=Cells[1].innerText;
        document.getElementById("Estado").value=Cells[2].innerText;
        document.getElementById('Estado').disabled=true;
        document.getElementById('btnActualizar').disabled=false;
        
        elmnt[0].classList.remove("selected");
        return false;
    });
});
function eliminar(elmnt) {
    data="id="+elmnt;
    $.ajax({
        type:"POST",
        url:"/BaseDatos/Zona/crud_product/delete.php",
        data: data,
        success:function(r){
            if(r!=1)
                alert("fallo al Eliminar");
        }
    });
    $('#recargar').load('tabla.php');
    return false;
}

//------------------
function select(elmnt) {
    //var Cells = elmnt.getElementsByTagName("td");
    elmnt.classList.add('selected');
    //document.getElementById("zona").value=Cells[0].innerText;
    //document.getElementById("otrZona").value=Cells[1].innerText;

    return false;
} 
