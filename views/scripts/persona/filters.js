$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#tbllistado thead tr').clone(true).appendTo( '#tbllistado thead' );
    $('#tbllistado thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var table = $('#tbllistado').DataTable( {
        scrollX:        true,
        autoWidth:         true,
        paging:         true,
        orderCellsTop: true,
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
                {
                    extend: 'csv',
                    text: 'Exportar CSV',
                    className: 'excelButton',
                    title: 'clientes/proveedores'
                },
                {
                    extend: 'excel',
                    text: 'Exportar Excel',
                    className: 'excelButton',
                    title: 'clientes/proveedores'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'Exportar PDF',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    className: 'pdfButton',
                    title: 'clientes/proveedores'
                },
                {
                    extend: 'colvis',
                    text: 'Mostrar columnas',
                }
        ]
    } );

} );