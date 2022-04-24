var tabla; 
function init(){

}

$(document).ready(function(){
    
    tabla=$('#incid_data').dataTable({
        rowCallback:function(row,data)
        {
        
        if(data[3] == "Cerrado")
        {
            $($(row).find("td")[3]).css({
                'background-color':'#ff5252',
                'color':'white',
                 'padding': '0.2em 0.6em 0.3em',
                 'font-weight': '700',
                 'border-radius': '0.3em'
            });

            
        }

        if(data[3] == "Asignado")
        {
            $($(row).find("td")[3]).css({
                'background-color':'#5cb85c',
                'color':'white',
                 'padding': '0.2em 0.6em 0.3em',
                 'font-weight': '700',
                 'border-radius': '0.3em'
            });

            $($(row).find("td")[3]).css({
                'background-color':'#5cb85c',
                'color':'white',
                 'padding': '0.2em 0.6em 0.3em',
                 'font-weight': '700',
                 'border-radius': '0.3em'
            });
            
        }
       
        
        },
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [		          
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
                ],
                
        "ajax":{
            url: '../../controller/incidente.php?op=listar',
            type : "post",
            dataType : "json",	
  						
            error: function(e){
                console.log(e.responseText);	
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "autoWidth": false,
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }     
    }).DataTable(); 
});

function ver(incid_id){
    console.log(incid_id);
}

init();