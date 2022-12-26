$('#formSel').change( function() {
    var id = $(this).val();
    if( id != '-' )
    {
        $('form').hide();
        $('#form'+id).show();
        $('#myModal').modal('show');
    }
});
