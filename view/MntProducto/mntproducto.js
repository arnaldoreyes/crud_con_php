var tabla;

function init() {
    $("#producto_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function () {

    tabla = $('#producto_data').dataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax": {
            url: '../../controller/producto.php?op=listar',
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,//Por cada 10 registros hace una paginación
        "order": [[0, "asc"]],//Ordenar (columna,orden)
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    }).DataTable();
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#producto_form")[0]);

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-1',
            cancelButton: 'btn btn-danger mx-1'
        },
        buttonsStyling: false
    })

    $.ajax({
        url: "../../controller/producto.php?op=guardar_y_editar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            console.log(datos);
            $('#producto_form')[0].reset();
            $("#modal-mantenimiento").modal('hide');
            $('#producto_data').DataTable().ajax.reload();

            swalWithBootstrapButtons.fire(
                'Registro!',
                'El registro se inserto correctamente.',
                'success'
            )
        }
    });
}

function editar(prod_id) {
    $('#mdl-titulo').html('Editar Registro');

    $.post("../../controller/producto.php?op=mostrar",{prod_id : prod_id},function (data) {
        data = JSON.parse(data);
        $('#prod_id').val(data.prod_id);
        $('#prod_name').val(data.prod_name);
    })

    $('#modal-mantenimiento').modal('show');
}

function eliminar(prod_id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-1',
            cancelButton: 'btn btn-danger mx-1'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿Estás seguro de ELIMINAR el registro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: '¡Sí, elimínalo!',
        cancelButtonText: '¡No, cancélalo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            $.post("../../controller/producto.php?op=eliminar", { prod_id: prod_id }, function (data) {

            });

            $('#producto_data').DataTable().ajax.reload();

            swalWithBootstrapButtons.fire(
                'Elminado!',
                'El registro se elimino correctamente.',
                'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'El registro está a salvo :)',
                'error'
            )
        }
    })
}

$(document).on("click", "#btn-nuevo", function () {
    $('#mdl-titulo').html('Nuevo Registro');
    $('#producto_form')[0].reset();
    $('#prod_id').val('');
    $('#modal-mantenimiento').modal('show');
});

init();