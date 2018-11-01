$('[name=save]').on('click', function(){
  var id = $(this).attr('data-id');
  
  $('.row-'+id).find('.vals').each(function(k,v){
    data[$(v).attr('name')] = $(v).val();
  });
  data['attn_date'] = date;
  console.log(data);

  $.ajax({
      type: "POST",
      url: "/student/save-attendance",
      data: {_token:csrf_token, deal_id: data['deal_id'], party_id: data['party_id'], schedule_id: data['schedule_id'], attn_status: data['attn_status'], attn_date: data['attn_date'], attn_time: data['attn_time'], note: data['note']},
      success: function(result){
        var r = JSON.parse( result );
        console.log(r);

        if(r.submit == 'update'){
          alertify.alert('<h3>Congratulations!</h3>', $('.row-'+id+' td.getName').html()+"'s attendance is updated successfully.");
        }
      }
  });

});

import alertify from 'alertifyjs';