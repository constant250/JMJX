 import alertify from 'alertifyjs';
    $(document).ready(function(){

       $('body').on('click','a#delete-item-index', function(e){
        
        // e.preventDefault();
        // alert('hi');
        let url = $('form#delete-form-index').attr('action');
        console.log(url);
        alertify.confirm('Are you sure you want to delete this customer', function(){
          console.log(e.target.getAttribute("data-item"));
        $('form#delete-form-index').attr('action',url +'/'+e.target.getAttribute("data-item"))
         $('form#delete-form-index').submit();      
       },
       function(){ alertify.error('Cancel')});
        
     });
    });