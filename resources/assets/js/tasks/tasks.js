  // create task
    $('.add-task').on('shown.bs.modal', function () {

      $('.slct').children().remove();
      $('input').val('');
      $('textarea').html('');

      $('.task-view').html('('+sview+')');
      $('.tsk-type').html('Add');

      console.log(sid)
      $('[name=status]').children().remove();
      $.each(statuses, function(k,v){
        if(v.id == sid){
          console.log('Yes');
          $('[name=status]').append('<option selected value="'+v.id+'">'+v.status+'</option>');
        }else{
          console.log('no');
          $('[name=status]').append('<option value="'+v.id+'">'+v.status+'</option>');
        }
      });

      // priority 
      $('[name=priority]').children().remove();
      $.each(priorities, function(k,v){
        $('[name=priority]').append('<option value="'+v.id+'">'+v.priority+'</option>');
      });

      // users 
      $('[name=assignedTo]').children().remove();
      $.each(users, function(k,v){
        $('[name=assignedTo]').append('<option value="'+v.id+'">'+v.party.name+'</option>');
      });
      
      // due date
      $('[name=due_date]').val('');
      $('.dueDate').datetimepicker({
            format: 'DD-MMMM-YYYY',
      }); 

    });

    $('.add-task').on('click', '.save-btn', function(){
        console.log(logUser);
        $.ajax({
            url: '/tasks',
            method:'post',
            data:{_token: csrf_token, title:$('[name=title]').val(),description:$('[name=description]').val(),status_id:sid,priority_id:$('[name=priority]').val(),due_date:moment($('[name=due_date]').val()).format('YYYY-MM-DD'),ass_to:$('[name=assignedTo]').val(),ass_by:logUser.id},
            success: function(results) {
                var r = $.parseJSON(results);
                var desc = '';
                if(r.task.description.length > 151){
                  desc = r.task.description.substr(0,150)+'...';
                }else{
                  desc = r.task.description;
                }
                var assby = '';
                var assbyID = '';
                var y = 0;
                $.each(r.task.meta, function(k,v){
                  if(logUser == v.task_meta_value && y == 0){
                    assbyID = v.task_meta_value;
                    assby = v.task.user.party.name+' (Me)'; 
                    y = 1;
                  }else if(logUser != v.task_meta_value && y == 0){
                    assbyID = v.task_meta_value;
                    assby = v.user.party.name;
                  }

                });

                var content = '<li class="li-'+r.task.id+'">\
                    <div class="item">\
                      <div class="task-content">\
                        <a href="#" data-id="'+r.task.id+'" class="edit-view" data-string="'+r.task.status.status+'" data-toggle="modal" data-target=".edit-task"><h1 class="px-12-font no-margin display-inlineblock title-'+r.task.id+'">'+r.task.title+'</h1></a>\
                        <p class="px-10-font text-justify dark-grey-font-color description-'+r.task.id+'" style="">'+desc+'</p>\
                            <div class="task-assignee px-10-font iris-blue-font-color">Assigned by: <span class="assBy-'+r.task.id+'">'+assby+'</span></div>\
                      </div>\
                      <div class="task-details">\
                        <div class="display-inlineblock">\
                          <ul class="list-inline px-10-font">\
                            <li>\
                              Priority : <span class="priority-'+r.task.priority.priority.toLowerCase()+' priority-'+r.task.id+'">'+r.task.priority.priority+'</span>\
                            </li>\
                          </ul>\
                        </div>\
                        <div class="pull-right">\
                          <div class="display-inlineblock px-10-font vertical-align-middle">Due date: <span class="dueDate-'+r.task.id+'">'+moment(r.task.due_date).format("D M, YYYY")+'</div>\
                          <div class="display-inlineblock vertical-align-middle task-avatar-img">\
                            <img src="/images/avatars/avatar-tasks.jpg" alt="" class="img-responsive">\
                          </div>\
                        </div>\
                      </div>\
                    </div>\
                  </li>';
                  // console.log($('ul.stat-'+r.task.status_id).html());

                  $('ul.stat-'+r.task.status_id).append(content);

                  // close modal
                  $('.add-task').modal('toggle', function(){
                    
                  });
                  
                  alert('Task added successfully');
            }
        });
      });

    // edit modal
    $('.edit-task').on('shown.bs.modal', function () {
      
      /*$('.slct').children().remove();
      $('input').val('');
      $('textarea').val('');*/

      $('.task-view').html('('+sview+')');
      $('.tsk-type').html('Edit');
      $('.delete-btn').attr('data-delete', sid);
      
      $.ajax({
          url: '/tasks/'+sid,
          success: function(results) {
              var r = $.parseJSON(results);

              $('[name=edt-title]').val(r.title);
              $('[name=edt-description]').val(r.description);
              $('[name=edt-description]').html(r.description);
              /*var statCon = '<label for="" class="bright-grey-font-color px-12-font">Status:</label>\
              <select name="edt-status" id="" class=" slct form-control form-input box-shadow-none px-12-font">';*/

              var statCon = '';
              $('[name=edt-status]').children().remove();

              $.each(statuses, function(k,v){
                if(r.status_id == v.id){
                  statCon += '<option selected value="'+v.id+'">'+v.status+'</option>';
                }else{
                  statCon += '<option value="'+v.id+'">'+v.status+'</option>';
                }
              });
              $('[name=edt-status]').append(statCon);
              
              // priority 
              $('[name=edt-priority]').children().remove();
              $.each(priorities, function(k,v){
                if(r.priority_id == v.id){
                  $('[name=edt-priority]').append('<option selected value="'+v.id+'">'+v.priority+'</option>');
                }else{
                  $('[name=edt-priority]').append('<option value="'+v.id+'">'+v.priority+'</option>');
                }
              });

              // users 
              $('[name=edt-assignedTo]').children().remove();
              $.each(users, function(k,v){
                $.each(r.meta, function(mk,mv){
                  if(mv.task_meta_key == '_task_requestor_id' && mv.task_meta_value == v.id){
                    $('[name=edt-assignedTo]').append('<option selected value="'+v.id+'">'+v.party.name+'</option>');
                  }else if(mv.task_meta_key == '_task_requestor_id' && mv.task_meta_value != v.id){
                    $('[name=edt-assignedTo]').append('<option value="'+v.id+'">'+v.party.name+'</option>');
                  }
                    
                });
              });
              
              // due date
              $('[name=edt-due_date]').val(moment(r.due_date).format("DD-MMMM-YYYY"));
              $('.dueDate').datetimepicker({
                    format: 'DD-MMMM-YYYY',
              }); 
          }
        }); 
      /*$('.edit-task').modal('toggle', function(){
        $('.slct').children().remove();
        $('input').val('');
        $('textarea').html('');
      });*/
  });

  $('.edit-task').on('click', '.save-edit-btn', function(){
        $.ajax({
            url: '/tasks/'+sid,
            method:'put',
            data:{_token: csrf_token,id:sid,title:$('[name=edt-title]').val(),description:$('[name=edt-description]').val(),status_id:$('[name=edt-status]').val(),priority_id:$('[name=edt-priority]').val(),due_date:moment($('[name=edt-due_date]').val()).format('YYYY-MM-DD'),ass_to:$('[name=edt-assignedTo]').val()},
            success: function(results) {
                var r = $.parseJSON(results);
                console.log(r);
                
                $.each(r.task.meta, function(k,v){
                  if(logUser == v.task_meta_value && y == 0){
                    assby = v.task.user.party.name+' (Me)'; 
                    y = 1;
                  }else if(logUser != v.task_meta_value && y == 0){
                    assby = v.user.party.name;
                  }
                });

                var desc = '';
                if(r.task.description.length > 151){
                  desc = r.task.description.substr(0,150)+'...';
                }else{
                  desc = r.task.description;
                }
                var assby = '';
                var y = 0;

                /*$('.title-'+r.task.id).html(r.task.title);
                $('.description-'+r.task.id).html(desc);
                $('.assBy-'+r.task.id).html(assby);
                $('.priority-'+r.task.id).html(r.task.priority.priority);
                $('#prio-id-'+r.task.priority.id).removeClass();
                $('#prio-id-'+r.task.priority.id).addClass('priority-'+r.task.priority.priority.toLowerCase()+' priority-'+r.task.id);
                $('.dueDate-'+r.task.id).html(moment(r.task.due_date).format("D M, YYYY"));*/

                $('.li-'+r.task.id).remove();

                var content = '<li class="li-'+r.task.id+'">\
                    <div class="item">\
                      <div class="task-content">\
                        <a href="#"><h1 class="px-12-font no-margin display-inlineblock title-'+r.task.id+'">'+r.task.title+'</h1></a>\
                        <p class="px-10-font text-justify dark-grey-font-color description-'+r.task.id+'" style="">'+desc+'</p>\
                            <div class="task-assignee px-10-font iris-blue-font-color">Assigned by: <span class="assBy-'+r.task.id+'">'+assby+'</span></div>\
                      </div>\
                      <div class="task-details">\
                        <div class="display-inlineblock">\
                          <ul class="list-inline px-10-font">\
                            <li>\
                              Priority : <span class="priority-'+r.task.priority.priority.toLowerCase()+' priority-'+r.task.id+'">'+r.task.priority.priority+'</span>\
                            </li>\
                          </ul>\
                        </div>\
                        <div class="pull-right">\
                          <div class="display-inlineblock px-10-font vertical-align-middle">Due date: <span class="dueDate-'+r.task.id+'">'+moment(r.task.due_date).format("D M, YYYY")+'</div>\
                          <div class="display-inlineblock vertical-align-middle task-avatar-img">\
                            <img src="/images/avatars/avatar-tasks.jpg" alt="" class="img-responsive">\
                          </div>\
                        </div>\
                      </div>\
                    </div>\
                  </li>';

                  $('ul.stat-'+r.task.status_id).append(content);


                $('.li-'+r.task.id).remove();

                var content = '<li class="li-'+r.task.id+'">\
                    <div class="item">\
                      <div class="task-content">\
                        <a href="#" data-id="'+r.task.id+'" class="edit-view" data-string="'+r.task.status.status+'" data-toggle="modal" data-target=".edit-task"><h1 class="px-12-font no-margin display-inlineblock title-'+r.task.id+'">'+r.task.title+'</h1></a>\
                        <p class="px-10-font text-justify dark-grey-font-color description-'+r.task.id+'" style="">'+desc+'</p>\
                            <div class="task-assignee px-10-font iris-blue-font-color">Assigned by: <span class="assBy-'+r.task.id+'">'+assby+'</span></div>\
                      </div>\
                      <div class="task-details">\
                        <div class="display-inlineblock">\
                          <ul class="list-inline px-10-font">\
                            <li>\
                              Priority : <span class="priority-'+r.task.priority.priority.toLowerCase()+' priority-'+r.task.id+'">'+r.task.priority.priority+'</span>\
                            </li>\
                          </ul>\
                        </div>\
                        <div class="pull-right">\
                          <div class="display-inlineblock px-10-font vertical-align-middle">Due date: <span class="dueDate-'+r.task.id+'">'+moment(r.task.due_date).format("D M, YYYY")+'</div>\
                          <div class="display-inlineblock vertical-align-middle task-avatar-img">\
                            <img src="/images/avatars/avatar-tasks.jpg" alt="" class="img-responsive">\
                          </div>\
                        </div>\
                      </div>\
                    </div>\
                  </li>';

                  $('ul.stat-'+r.task.status_id).append(content);

                
                // close modal
                $('.edit-task').modal('hide');
                alertify.alert('<h3>Success!</h3>',"Task successfully saved.");
            }
        });
      });

    
    $('.edit-task').on('click', '.delete-btn', function(){

      var r = confirm("Are you sure to delete task?");
      if(r == true){
        $.ajax({
            url: '/tasks/'+sid,
            method:'delete',
            data:{_token: csrf_token,id:sid},
            success: function(results) {
                var r = $.parseJSON(results);
                console.log(r);
                
                $('.li-'+r.task_id).remove();

                // close modal
                if(r.submit == 'deleted'){
                  $('.edit-task').modal('hide');
                  alertify.alert('<h3>Success!</h3>',"Task successfully deleted.");
                }
            }
        });
      }
    });

    import alertify from 'alertifyjs';