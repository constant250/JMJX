
$('.add-student').on('click', function(){
  window.location.href = '/training-schedule/'+$(this).attr('value')+'/'+$(this).attr('data-sched')+'/store-student';
})

$('.remove-student').on('click', function(){
  window.location.href = '/training-schedule/'+$(this).attr('value')+'/'+$(this).attr('data-sched')+'/remove-student';
})

$('.update-student').on('click', function(){
  var sid = $(this).val();
  $.ajax({
      url: '/training-schedule/ajax/update-student/'+$('#ss'+sid).val()+'/'+sid,
      success: function(results) {
          var r = $.parseJSON(results);
          if(r.r == true){
            alertify.alert('<h3>Success!</h3>',"Training plan is saved successfully.");
          }
      }
  });
});


import alertify from 'alertifyjs';