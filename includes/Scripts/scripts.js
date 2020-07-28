$(document).ready(function(){
    $('#exampleFormControlSelect1').on('change',function(){
        //alert("entro");
        var calle= $(this).val();
        if(exampleFormControlSelect1 && calle.length!=0){
            //alert(calle);
            $.ajax({
                url: "/BaseDatos/Piso/recargables/CallePiso.php",
                type: "POST",
                data:'calle='+calle,
                success:function(html){
                    //alert(html);
                    $('#numero').html(html);
                }
            });
        }else{
            $('#numero').html('<option value="">Selecciona una calle primero</option>');
        }   
    });
    $('#calle').on('change',function(){
        var callex= $(this).val();
        if(calle && callex.length!=0){
            $.ajax({//HabitarPiso/recargables/HabitaPiso.php
                url: "/BaseDatos/HabitarPiso/recargables/HabitaPiso.php",
                type: "POST",
                data:'calle='+callex,
                success:function(html){
                    //alert(html);
                    $('#numero').html(html);
                }
            });
        }else{
            $('#numero').html('<option value="">Selecciona una calle primero</option>');
        }   
    });
    $('#numero').on('change',function(){
        var numerx= $(this).val();
        var callex = document.getElementById("calle").value
        var data ='calle='+callex+'&numero='+numerx;
        if(numero && numerx.length!=0){
            $.ajax({
                url: "/BaseDatos/HabitarPiso/recargables/HabitaPiso.php",
                type: "POST",
                data:data,
                success:function(html){
                    //alert(html);
                    $('#escalera').html(html);
                }
            });
        }else{
            $('#escalera').html('<option value="">Selecciona una calle primero</option>');
        }
    });
    $('#escalera').on('change',function(){
        var escaler= $(this).val();
        var callex = document.getElementById("calle").value;
        var numerx = document.getElementById("numero").value;
        var data ='calle='+callex+'&numero='+numerx+'&escalera='+escaler;
        if(escalera && escaler.length!=0){
            $.ajax({
                url: "/BaseDatos/HabitarPiso/recargables/HabitaPiso.php",
                type: "POST",
                data:data,
                success:function(html){
                    //alert(html);
                    $('#planta').html(html);
                }
            });
        }else{
            $('#planta').html('<option value="">Selecciona una calle primero</option>');
        }
    });
    $('#planta').on('change',function(){
        var plantax= $(this).val();
        var escaler = document.getElementById("escalera").value;
        var callex = document.getElementById("calle").value;
        var numerx = document.getElementById("numero").value;
        var data ='calle='+callex+'&numero='+numerx+'&escalera='+escaler+'&planta='+plantax;
        if(planta && planta.length!=0){
            $.ajax({
                url: "/BaseDatos/HabitarPiso/recargables/HabitaPiso.php",
                type: "POST",
                data:data,
                success:function(html){
                    alert(html);
                    $('#puerta').html(html);
                }
            });
        }else{
            $('#puerta').html('<option value="">Selecciona una calle primero</option>');
        }
    });

    $('#btnAdicionar').click(function(){
        $("#formajax01")[0].reset();
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
            url:"crud/save.php",
            data: datos,
            success:function(respuesta){
                alert(respuesta);     
            }
        });
        $("#formajax01")[0].reset();
        $('#recargar01').load('tabla2.php');
        document.getElementById('btnActualizar').disabled=true;
        return false;
    });
    $('#btnCancelar').click(function(){
        $("#formajax01")[0].reset();
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
    $('#exampleFormControlSelect1').on('change',function(){
        var select= $(this).val();
        if(exampleFormControlSelect1 && select.length!=0){
            $.ajax({
                url: "/BaseDatos/Prueba/tipo.php",
                type: "POST",
                data:'tipo='+select,
                success:function(html){
                    $('#actualizar').html(html);
                }
            });
        }else{
            $('#actualizar').html('');
        }   
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
