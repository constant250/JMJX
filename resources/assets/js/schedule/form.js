$(function () {
      var xhr_city, xhr_suburb;
      var select_state, $select_state;
      var select_course, $select_course;
      var course_id, loc;
      var select_city, $select_city;
      var select_suburb, $select_suburb;
      var select_time_table, $select_time_table;

      // selectize
      $('#trainer-id').selectize({
          placeholder: 'Select trainer',
          valueField: 'id',
      });
      $('#status-id').selectize({
          placeholder: 'Select status',
          valueField: 'id',
      });

      $('#del_loc_id').selectize({
          placeholder: 'Select Location',
          valueField: 'dlvr_loc_identifier',
      });


      $select_time_table = $('#time-table-id').selectize({
          placeholder: 'Select time table',
          valueField: 'id',
          labelField: 'study_mode',
          options: window.time_table,
          render: {
                  item: function(item, escape) {
                      var r = $.parseJSON(item.recurrence);
                      var opt = '<div class="row"><div class="col-md-12"><strong>'+ escape(item.study_mode)+'</strong></div>';
                      $.each(r, function(x,y){
                        opt += '<div class="col-md-6">'+escape(y['day'])+' - '+escape(y.start_time)+' to '+escape(y.end_time)+'</div>';
                      })
                      opt += '</div>';

                      return opt;

                      /*return '<div>' +
                          escape(item.study_mode) +'<br><p>'+escape(item.recurrence)+'</p>'+
                      '</div>';*/
                  },
                  option: function(item, escape) {
                      var r = $.parseJSON(item.recurrence);
                      var opt = '<div class="row"><div class="col-md-12"><strong>'+ escape(item.study_mode)+'</strong></div>';
                      $.each(r, function(x,y){
                        opt += '<div class="col-md-6">'+escape(y['day'])+' - '+escape(y.start_time)+' to '+escape(y.end_time)+'</div>';
                      })
                      opt += '</div>';

                      return opt;
                      /*return '<div>' +
                          escape(item.study_mode) +'<br><p>'+escape(item.recurrence)+'</p>'+
                      '</div>';*/
                  }
              },
      });

      $select_course = $('#course-id').selectize({
          placeholder: 'Select course',
          valueField: 'id',
          onChange: function(value){
            course_id = value;
            select_time_table.load(function(callback) {

                // data holders
                var getTime = null;

                console.log(loc);

                // re-map suburb options
                getTime = $.map(window.time_table, function(item) {
                  if ( item.location == loc && item.course_id == course_id) {
                    return item;
                  }
                });

                select_time_table.enable();
                select_time_table.clearOptions();
                select_time_table.addOption(getTime);
            });
          }
      });

      $select_city = $('#city-id').selectize({
          placeholder: 'Select city',
          valueField: 'id',
          labelField: 'city',
          searchField: ['city'],
          options: window.city,
          render: {
                  item: function(item, escape) {
                      return '<div>' +
                          escape(item.city) +
                      '</div>';
                  },
                  option: function(item, escape) {
                      return '<div>' +
                          escape(item.city) +
                      '</div>';
                  }
              },
      });

      $select_suburb = $('#suburb-id').selectize({
          placeholder: 'Select suburb',
          valueField: 'id',
          labelField: 'suburb',
          searchField: ['suburb'],
          options: window.suburb,
          render: {
                  item: function(item, escape) {
                      return '<div>' +
                          escape(item.postcode) +' - '+ escape(item.suburb) +
                      '</div>';
                  },
                  option: function(item, escape) {
                      return '<div>' +
                          escape(item.postcode) +' - '+ escape(item.suburb) +
                      '</div>';
                  }
              },
      });

      $select_state = $('#state-id').selectize({
        placeholder: 'Select state',
        onChange: function(value){
          if(!value.length) return;
          var val = value.split(",");
          loc = val; 
          select_city.load(function(callback) {

              // data holders
              var getCity = null;

              // console.log(window.city);

              // re-map suburb options
              getCity = $.map(window.city, function(item) {
                if ( item.state_key == val ) {
                  return item;
                }
              });

              select_city.enable();
              select_city.clearOptions();
              select_city.addOption(getCity);

          });
          select_suburb.load(function(callback) {

              // data holders
              var getSub = null;

              // console.log(window.city);

              // re-map suburb options
              getSub = $.map(window.suburb, function(item) {
                if ( item.state == val ) {
                  return item;
                }
              });

              select_suburb.enable();
              select_suburb.clearOptions();
              select_suburb.addOption(getSub);
          });
          select_time_table.load(function(callback) {

              // data holders
              var getTime = null;

              // console.log(window.city);

              // re-map suburb options
              getTime = $.map(window.time_table, function(item) {
                if ( item.location == val && item.course_id == course_id) {
                  return item;
                }
              });

              select_time_table.enable();
              select_time_table.clearOptions();
              select_time_table.addOption(getTime);
          });
        }
      });

      select_city  = $select_city[0].selectize;
      select_suburb = $select_suburb[0].selectize;
      select_state = $select_state[0].selectize;
      select_time_table = $select_time_table[0].selectize;
      

      if(select_city['items'][0] == null){
        select_city.disable();
      }
      
      if(select_suburb['items'][0] == null){
        select_suburb.disable();
      }

      if(select_time_table['items'][0] == null){
        select_time_table.disable();
      }


      // START DATE
      $('#sched-start-date-datetimepicker').datetimepicker({
            format: 'DD-MMMM-YYYY',
      });
      $('#sched-start-date-datetimepicker').on('dp.change', function(){
        var sdate = moment($('[name=start_date_get]').val()).format('YYYY-MM-DD');
        $('[name=start_date]').val(sdate);
      });

      if($('[name=start_date]').val() != ''){
        var sdate = moment($('[name=start_date]').val()).format('DD-MMMM-YYYY');
        var ssdate = moment($('[name=start_date]').val()).format('YYYY-MM-DD');
        $('[name=start_date_get]').val(sdate);
        $('[name=start_date]').val(ssdate);
        console.log(ssdate);
      }

      // End DATE
      $('#sched-end-date-datetimepicker').datetimepicker({
            format: 'DD-MMMM-YYYY',
      });
      $('#sched-end-date-datetimepicker').on('dp.change', function(){
        var sdate = moment($('[name=end_date_get]').val()).format('YYYY-MM-DD');
        $('[name=end_date]').val(sdate);
      });

      if($('[name=end_date]').val() != ''){
        var sdate = moment($('[name=end_date]').val()).format('DD-MMMM-YYYY');
        var ssdate = moment($('[name=end_date]').val()).format('YYYY-MM-DD');
        $('[name=end_date_get]').val(sdate);
        $('[name=end_date]').val(ssdate);
        console.log(ssdate);
      }

   });