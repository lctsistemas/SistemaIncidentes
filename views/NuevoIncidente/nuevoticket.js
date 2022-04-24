function init() {
    $("#incid_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

$(document).ready(function() {
    $('#incid_descrip').summernote({
        height:200
    });

    $.post("../../controller/area.php?op=combo",function(data, status){
        $('#id_area').html(data);
        console.log(data);
    });
});

function guardaryeditar(e){
    e.preventDefault();
    var formData= new FormData($('#incid_form')[0]);
    $.ajax({
        url:"../../controller/incidente.php?op=insert",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,
        success:function(datos){
            $('#arch_inc').val('');
            $('#nom_inci').val('');
            $('#desc_incid').val('');
            swal("Correcto!", "Registrado Correctamente", "success");
        }
    });
}
init();
