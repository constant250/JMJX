$(document).ready(function(){
  getTimeTable($('#full_time_learning_option').val(), $('[name=deal_id]').val());

});

$('[name=study_mode]').on('change', function(){
  getTimeTable($(this).val(), $('[name=deal_id]').val());
});

function getTimeTable(study_mode, deal_id){
  $.ajax({ 
          data: "GET",
          async: false,
          url: "/time-table/select_time/"+study_mode+"/deal/"+deal_id,
          success : function(results)
          {
              var r = $.parseJSON(results);
              // console.log(r);
              $('#time-table').children().remove();
              var content = '';
              $.each(r,function(x,y){
                content += '<span class="select-day-time"><input '+y.check+' type="checkbox" name="'+y.day+'" value="'+x+'">'+y.day+' - '+y.start_time+' to '+y.end_time+'</span>';
              })
              $('#time-table').append(content);

          },
          error: function() {
              console.log('No time-table found.');
          }
  });
}