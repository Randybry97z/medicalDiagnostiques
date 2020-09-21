$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#tbllistado thead tr').clone(true).appendTo( '#tbllistado thead' );
    $('#tbllistado thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" style="width: 60%; font-size:10px; " placeholder="Search '+title+'" />' );

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
        scrollCollapse: true,
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
                    title: 'usuarios'
                },
                {
                    extend: 'excel',
                    text: 'Exportar Excel',
                    className: 'excelButton',
                    title: 'usuarios'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'Exportar PDF',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    className: 'pdfButton',
                    title: 'usuarios'
                },
                {
                    extend: 'colvis',
                    text: 'Mostrar columnas',
                }
        ]
    } );

} );