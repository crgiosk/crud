function showData(){
    $('#dataTable').load('php/tabla.php');
}
//Guardar nuevo registro

$(document).on('click','#btn-agregardatos',function() {
    $.ajax({
        type:'POST',
        url:'php/saveData.php',
        data:$('#form-nuevo').serialize(),
        success:function(r){
            if (r==1) {
                $('#form-nuevo')[0].reset();
                showData();
                $("#ModalNuevo .close").click();
                alertify.success("Guardado con extito.");
            }else{
                alertify.error("error inesperado.");
                return false;
            }
        }
    })
});

//Falta acomodar

function deleteData(id){
    alertify.confirm('¡Eliminar!', '¿Está seguro de eliminar este registro?. Si no ve cambios al instante, intente presionar la barra espaceadora en su opcion.', function(){ eliminarDtos(id) }
    , function(){ alertify.error('Ningun dato fue modificado.')});
}

function eliminarDtos(id){
    PReid="id="+id;
    $.ajax({
        type:'POST',
        url:'php/deleteData.php',
        data:PReid,
        success:function(r){
            if(r==1){
                showData();
                alertify.success("accion satisfactoria.");
            }else{
                alertify.error("Error inesperado.");
            }
        }
    });
}

//Actualizar
function capData(datos){

    d=datos.split('||');

    $('#idU').val(d[0]);
    $('#preidU').val(d[1]);
    $('#valoridU').val(d[2]);
    $('#fechaidU').val(d[3]);
    $('#tipoidU').val(d[4]);
    $('#observacionU').val(d[5]);
}
$(document).on('click','#btn-actualizar',function(){
    data="id="+$('#idU').val()+"&preid="+$('#preidU').val()+"&valor="+$('#valoridU').val()+"&fecha="+$('#fechaidU').val()+"&tipo="+$('#tipoidU').val()+"&observaciones="+$('#observacionU').val();
    $.ajax({
        type:'POST',
        url:'php/update.php',
        data:data,
        success:function(ec_o){
            if (ec_o==1){
                alertify.success("accion satisfactoria");
                $('#form-actualizar')[0].reset();
                showData();
                $("#ModalActualizar .close").click();
            }else{
                alertify.error("Error inesperado.");
            }
        }
    });
});