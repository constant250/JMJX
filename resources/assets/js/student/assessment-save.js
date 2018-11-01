
$("#save-item").on('click', function(){
  var x = 0;
  var tp = [];
  var tpa = '{"plan":[';
  $("tr.unitRow").each(function(k,v){
    var tpd = [];
    tp[x] = ['unitCode', 'description', 'p_start', 'p_end', 'method', 'hours', 'core_elective', 'ass_method', 'a_start', 'a_end', 'stud_status', 'ass_outcome', 'stud_initial', 'train_initial'];
    $(v).find('td.x-html').each(function(kk,vv){
      tpd.push($(vv).html());
    });
    $(v).find('td.x-value').children().each(function(kkk,vvv){
      tpd.push($(vvv).val());
    });
    tpa += "{";
    var z =[];
            for (var i = 0; i < tp[x].length; ++i){
                tpa += '"'+tp[x][i]+'":"'+tpd[i]+'"';
                i++;
                if(i != tp[x].length){
                  tpa += ",";
                }
                i--;
            } 

    x++;
    if(x != $("tr.unitRow").length){
      tpa += "},";  
        }else{
          tpa += "}";
        }
  });
  tpa += "]}";

  // tpa = tpa.replace(/(\r\n|\n|\r)/gm,"");
  var tpz = tpa.replace(/(\r\n|\n|\r)/gm,"");

  // alert(tpa);
  // console.log(tpz);

  $.ajax({
      type: "POST",
      url: "/student/save-assessment",
      data:{_token: csrf_token, lln: $('[name=lln]').val(), rpl: $('[name=rpl]').val(), training_plan:tpz, schedule_id:$('[name=schedule_id]').val(), deal_id:$('[name=deal_id]').val()},
      success: function(data){
        var r = JSON.parse( data );
        console.log(r);

        if(r.submit == 'new'){
          alertify.alert('<h3>Success!</h3>',"Training plan is saved successfully.");
        }else if(r.submit == 'update'){
          alertify.alert('<h3>Congratulations!</h3>',"Training plan is updated successfully.");
        }
      }
  });
});

import alertify from 'alertifyjs';