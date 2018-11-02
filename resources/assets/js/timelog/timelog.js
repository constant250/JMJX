import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';
import axios from 'axios';
import moment from 'moment';

(function (window, undefined) {
    let Timelog = {
        init: function() {
            // initialize DOM Elements
            this._cacheDom();

            // initialize DOM Evenets
            this._bindDomEvents();

            /*----------  autoload functions  ----------*/
            this._autoload();
        },

        /**
         *
         * Register DOM Elements
         *
         */
        _cacheDom: function() {
            // this.$form = $('form[id=create-time-table-form]');
            // this.$deleteForm = $('#delete-item');
            // stat dec datetimepicker
            // this.$startDatepicker = $('div[id=start-datetimepicker]');
            // this.$endDatepicker = $('div[id=end-datetimepicker]');
            this.$formToken = $('input[name=_token]');
            this.$timein = $('#time-in');
            this.$timeout = $('#time-out');
            this.$note = $('#note');
            this.$filter = $('#datetimepicker1');
            this.$submitBreak = $('#submit-break');
        },

        /**
         *
         * Register DOM Events
         *
         */
        _bindDomEvents: function() {
            // submit form
            // toolbar.saveBtn.on('click', this._saveFormEvent.bind(this));

            // remove item in index page action menu
            // toolbar.deleteBtn.on('click', this._deleteItemInIndex.bind(this));

            this.$timein.on('click', function(){
                // window.location.href = "/timelog/time-in";
                alertify.notify('Processing your request...', 'warning', 10, null);

                axios.post('/timelog/time-in',{'notes':Timelog.$note.val(), '_token':Timelog.$formToken.val()})
                .then( response => {
                    if(response.data.result == 1){
                        window.location.href = "/timelog";
                    }
                })
                .catch( error => {
                    // console.log(error.response);
                    console.log(error.message);
                    console.log(error);
                });

            });

            this.$timeout.on('click', function(){
                // window.location.href = "/timelog/time-out";
                alertify.notify('Processing your request...', 'warning', 10, null);

                axios.post('/timelog/time-out',{'notes':Timelog.$note.val(), '_token':Timelog.$formToken.val()})
                .then( response => {
                    if(response.data.result == 1){
                        window.location.href = "/timelog";
                    }else{
                        alertify.alert('Error', response.data.msg);
                    }
                })
                .catch( error => {
                    // console.log(error.response);
                    console.log(error.message);
                    console.log(error);
                });

            });

            this.$submitBreak.on('click', function(){

                alertify.notify('Processing your request...', 'warning', 10, null);

                var timeBreak = $('[name=timelog-breaks]:checked').val();
                var specific = '';

                if(timeBreak == 3){
                    specific = $('[name=bout]').val(); 
                }

                if (timeBreak == null) {
                    alertify.alert('Error', 'Please follow the time log process.');
                    return '';
                }

                axios.post('/timelog/timelog-break',{'break': timeBreak, 'spec': specific,'notes':Timelog.$note.val(), '_token':Timelog.$formToken.val()})
                .then( response => {
                    // console.log(response.data);
                    if(response.data.result == 1){
                        window.location.href = "/timelog";
                    }else{
                        alertify.alert('Error', 'Please follow the time log process.');
                    }
                })
                .catch( error => {
                    // console.log(error.response);
                    console.log(error.message);
                    console.log(error);
                });

            });

            this.$filter.on('dp.change', function(){
                var date = $('#filter-date').val();
                if (date) {
                    // window.location.href = "/timelog/filter?date="+date;
                    axios.get("/timelog/filter?date="+date)
                    .then( response => {
                        // console.log(date);
                        var selDate = date;

                        $('[name=pickDate] option').html(selDate);
                        $('#timeInView').html(response.data.summary[selDate]['time_in'] ? response.data.summary[selDate]['time_in'] : '--:--:--');
                        $('#timeOutView').html(response.data.summary[selDate]['time_out'] ? response.data.summary[selDate]['time_out'] : '--:--:--');
                        var tb = parseFloat(response.data.summary[selDate]['total_bt_percentage']) / 100.0;
                        var tw = parseFloat(response.data.summary[selDate]['total_wt_percentage']) / 100.0;
                        tb = tb > 1 ? '100%' : response.data.summary[selDate]['total_bt_percentage'];
                        tw = tw > 1 ? '100%' : response.data.summary[selDate]['total_wt_percentage'];
                        // console.log(tb);
                        // console.log(tw);
                        $('#totalHours').css('width', tw);
                        $('#totalBreaks').css('width', tb);
                        var twc = response.data.summary[selDate]['total_wt'] ? response.data.summary[selDate]['total_wt'] : '--:--:--';
                        var tbc = response.data.summary[selDate]['total_bt'] ? response.data.summary[selDate]['total_bt'] : '--:--:--';
                        $('#totalHoursCount').html(twc);
                        $('#totalBreaksCount').html(tbc);
                        $('#tableBreaks').children().remove();
                        var content = '';
                        $.each(response.data.summary[selDate]['breaks'], function(k,v){
                            var start = v.start_break ? v.start_break : '--:--:--';
                            var end = v.end_break ? v.end_break : '--:--:--';
                            var diff = v.time_diff ? v.time_diff : '--:--:--';
                            content += '<tr><td>'+start+'</td><td>'+end+'</td><td>'+diff+'</td></tr>';
                        });
                        $('#tableBreaks').append(content);

                        /*if(response.data.result == 1){
                            window.location.href = "/timelog";
                        }else{
                            alertify.alert('Error', 'Please follow the time log process.');
                        }*/
                    })
                    .catch( error => {
                        // console.log(error.response);
                        console.log(error.message);
                        console.log(error);
                        alertify.alert('Opsss', 'No time-log available');
                    });
                }else{
                    alertify.alert('Error', 'Fields must be filled...');
                }
            });

            // this.$timeout.on('click', function(){
            //     window.location.href = "/timelog/time-out";
            // });




        },

        /**
         *
         * Register autoload Events
         *
         */

        _autoload: function() {

            // console.log(window.summary[$('[name=pickDate]').val()])
            $('#timeInView').html(window.summary[$('[name=pickDate]').val()]['time_in']);
            $('#timeOutView').html(window.summary[$('[name=pickDate]').val()]['time_out']);
            var tb = parseFloat(window.summary[$('[name=pickDate]').val()]['total_bt_percentage']) / 100.0;
            var tw = parseFloat(window.summary[$('[name=pickDate]').val()]['total_wt_percentage']) / 100.0;
            tb = tb > 1 ? '100%' : window.summary[$('[name=pickDate]').val()]['total_bt_percentage'];
            tw = tw > 1 ? '100%' : window.summary[$('[name=pickDate]').val()]['total_wt_percentage'];
            // console.log(tb);
            // console.log(tw);
            $('#totalHours').css('width', tw);
            $('#totalBreaks').css('width', tb);
            var twc = window.summary[$('[name=pickDate]').val()]['total_wt'] ? window.summary[$('[name=pickDate]').val()]['total_wt'] : '--:--:--';
            var tbc = window.summary[$('[name=pickDate]').val()]['total_bt'] ? window.summary[$('[name=pickDate]').val()]['total_bt'] : '--:--:--';
            $('#totalHoursCount').html(twc);
            $('#totalBreaksCount').html(tbc);
            $('#tableBreaks').children().remove();
            var content = '';
            $.each(window.summary[$('[name=pickDate]').val()]['breaks'], function(k,v){
                var start = v.start_break ? v.start_break : '--:--:--';
                var end = v.end_break ? v.end_break : '--:--:--';
                var diff = v.time_diff ? v.time_diff : '--:--:--';
                content += '<tr><td>'+start+'</td><td>'+end+'</td><td>'+diff+'</td></tr>';
            });
            $('#tableBreaks').append(content);
            // datepicker
            // this.$startDatepicker.datetimepicker({
            //     format: 'DD/MM/YYYY'
            // });

            // this.$endDatepicker.datetimepicker({
            //     format: 'DD/MM/YYYY'
            // });
        },

        /**
         *
         * Event Callbacks
         *
         */
        

    }

    Timelog.init();
})(window)
