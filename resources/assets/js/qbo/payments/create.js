import alertify from 'alertifyjs';  

$(function () {
    $('#payment-date-datetimepicker').datetimepicker({
          format: 'DD/MM/YYYY'
      });

    $('#save-item').on('click', function(e){
      e.preventDefault();
      alertify.confirm('Save Payment', 'Are you sure to save payment?',
          function(){
              $('#create-qbo-payment-form').submit();
          },
          function(){ alertify.error('Cancel')
      });
    })
 });