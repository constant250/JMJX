// add/remove class "active" on TABS  
  $('ul.crm-nav-tabs li').click( function(){
    if ( $(this).hasClass('active') ) {
        $(this).removeClass('active');
    } else {
        $('li.active').removeClass('active');
        $(this).addClass('active');    
    }
});

  /////////////////////////////////////////////////////////////////////////////////////////////////////////  DataTables  /////////////////////////////////////////////////////////////////////////////////////////////////////////

// Item: Datatables
// Name: All datatables with "custom-datatable" class
$(document).ready(function() {
    $('.custom-datatable').DataTable( {
        "paging":   true,
        "ordering": true,
            "bFilter": false,
        "info":     true
    } );
} );