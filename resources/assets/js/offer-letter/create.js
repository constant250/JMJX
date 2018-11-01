import $ from 'jquery'; 
import datetimepicker from 'eonasdan-bootstrap-datetimepicker';
import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';
import axios from 'axios';
import moment from 'moment';
import selectize from 'selectize';

$(document).ready(function () {

(function(window, undefined) {
  let OfferLetter = {
    init: function() {
      /*----------  initialize DOM Elements  ----------*/
      this._cacheDom();

      /*----------  bind DOM element events  ----------*/
      this._bindDomEvents();

      this._autoload();
    },
    _cacheDom: function() {

      // csrf token
      this.$formToken = $('input[name=_token]');

      this.$form = $('form.add-offer-letter-form');
      this.$indexDeleteBtn = $('a[id=index-item-delete]');
      this.$deleteForm = $('form[id=delete-form-index]');
      this.$packages = $('[name=package]');
      this.$shore = $('[name=shore]');
      this.$addRow = $('#addrow_detail');
      this.$oshc = $('[name=oshc]');
      this.$send = $('#send-offer-letter');
      this.$preview = $('#preview-offer-letter');
      this.$payReq = $('[name=payment_required]');
      this.$start_datepicker = $('body .start_datetimepicker');
      this.$package_type = $('[name=package_type]');
      this.$course_code = $('[name=course_codes]');

      this.$body = $('body');


      /*=============================
      =            Notes            =
      =============================*/
      
      // note content
      this.$noteContent = $('textarea[id=notes-content]');

      // note submit button
      this.$submitNoteBtn = $('button[id=submit-note]');

      // note list
      this.$noteList = $('ul[id=note-list]');
      
      /*=====  End of Notes  ======*/

      // this.$globalPackage;
    },
    _bindDomEvents: function() {

      // datetimepicker
      // this.$start_datepicker.datetimepicker({
      //   format: 'DD/MM/YYYY',
      // });

      // store form
      toolbar.saveBtn.on('click', this._submitForm.bind(this));

      // remove item in index page action menu
      this.$indexDeleteBtn.on('click', this._deleteItemInIndex.bind(this));

      // on change package
      this.$packages.on('change', this._packageChange.bind(this));

      // on change shore
      this.$shore.on('change', this._shoreChange.bind(this));

      // on click add button
      this.$addRow.on('click', this._onAddClick.bind(this));

      // on change oshc
      this.$oshc.on('change', this._onChangeOSHC.bind(this));

      // on keyup payment_requirement
      this.$payReq.keyup( this._payReqLetter.bind(this));

      // on click send
      this.$send.on('click', this._sendOfferLetter.bind(this));

      // on click preview
      this.$preview.on('click', this._previewOfferLetter.bind(this));

      // on change week
      this.$body.on('change', '[name=duration]', this._onChangeWeek.bind(this));

      // on change tuition
      this.$body.on('change', '.tuition', this._onChangeTuition.bind(this));

      // on change tuition
      this.$body.on('change', '.material', this._onChangeMaterial.bind(this));

      // on change course start date
      this.$body.on('dp.change', '.start_datetimepicker', this._onChangeCourseStartDate.bind(this));

      // on focus course start date
      this.$body.on('focus', '.start_datetimepicker', this._onFocusCourseStartDate.bind(this));

      // on change package type
      this.$package_type.on('change', this._onChangePackageType.bind(this));

      // on change course codes
      this.$course_code.on('change', this._onChangeCourseCode.bind(this));


      // notes submit
      this.$submitNoteBtn.on('click', this._submitNote.bind(this));
    },

    /*=======================================
    =               Autoloads               =
    =======================================*/
    _autoload: function(e){

      if(typeof window.offerData !== 'undefined'){
        var od = window.offerData;


        if( od.offer_details.length != 0){
           $('[name=shore]').children().remove();
           var onshore = '', offshore = '';
           if(typeof od.shore_type !== 'undefined'){
              onshore =  od.shore_type == 'ONSHORE' ? 'selected' : '';
              offshore = od.shore_type == 'OFFSHORE' ? 'selected' : '';
           }

           var options = '<option value> Select Region Type</option><option value="ONSHORE" '+onshore+' >Onshore</option><option value="OFFSHORE" '+offshore+' >Offshore</option>';

           // console.log(od.offer_details[0].package.shore_type);
           // console.log(offshore);
           $('[name=shore]').append(options);

           // $('[name=package]').attr('placeholder',od.offer_details[0].package.name)
           console.log(window.slct_package.length);

           if(od.package_type == 'package'){
             var pckg = '';
             if(window.slct_package.length != 0){
               $.each(window.slct_package, function(k,v){
                  pckg += '<option value="'+v.id+'" '+(od.offer_details[0].package.id == v.id ? 'selected' : '')+'>'+v.name+'</option>';
               });
               $('[name=package]').append(pckg);
             }   
           }else{
              $('#go-package').addClass('hidden');
              $('#go-course').removeClass('hidden');
              var crs = '';
              $.each(window.matrix, function(k,v){
                crs += '<option value="'+v.id+'" '+(od.offer_details[0].non_package_id == v.id ? 'selected' : '')+'>'+v.course.name+'</option>';
              });
              $('[name=course_codes]').append(crs);
           }

        }

      }



      var packs = '';
      var cols = '';
      var count = 0;
      if($('[name=all_package]').val() != ''){
          packs = $.parseJSON($('[name=all_package]').val());
          $.each(packs, function(k,v){
            var mat = (typeof v.material !== 'undefined') ? v.material : '';
            cols += '<tr><td><input type="text"  readonly class="form-control" value="'+v.cricos+'" name="cricos'+count+'"/></td>';
            cols += '<td><input type="text"  readonly class="form-control" value="'+v.course+'" name="course'+count+'"/></td>';
            cols += '<td><input type="number" class="form-control wk dw'+count+'" max="'+v.max_duration+'" data="'+count+'" value="'+v.duration+'" name="duration"/></td>';
            cols += '<td><input type="number" class="form-control tuition" data="'+v.max_tuition+'" value="'+v.tuition+'" data-count="'+count+'" name="tuition'+count+'"/></td>';
            cols += '<td><input type="number" class="form-control material" value="'+mat+'" data="'+count+'" name="material'+count+'"/></td>';
            cols += '<td class="dtp"><input type="text" class="form-control start_datetimepicker" data="'+count+'" value="'+moment(v.start_date, 'YYYY-MM-DD').format('DD/MM/YYYY')+'" name="start_date'+count+'"/></td>';
            cols += '<td><input type="text" readonly class="form-control" value="'+moment(v.end_date, 'YYYY-MM-DD').format('DD/MM/YYYY')+'" name="end_date'+count+'"/></td>';
            cols += '<td class="text-center"></td></tr>';
            count++;
          });
          $('.package-detail-rows').append(cols);
      }

      // Package-Course Selection Tag

      if(typeof $('[name=package]')[0].selectize  !== 'undefined'){
        // $('[name=package]')[0].selectize.destroy();
      }

      // $('[name=package]').children().remove();
      // $('[name=course_codes]').children().remove();

      if(this.$package_type.val() == 'package'){
          $('#go-course').addClass('hidden');
          $('#go-package').removeClass('hidden');
          $.each(window.packages, function(k,v){
            if($('[name=shore]').val() == v.shore_type){
              if($('[name=hide_package]').val() == v.id){
                $('[name=package]').append('<option value="'+v.id+'" selected>'+v.name+'</option>');
              }else{
                $('[name=package]').append('<option value="'+v.id+'">'+v.name+'</option>');
              }
            }
          });
      }else{
          $('#go-course').removeClass('hidden');
          $('#go-package').addClass('hidden');
          $.each(window.matrix, function(k,v){
            if($('[name=hide_course_codes]').val() == v.id){
              $('[name=course_codes]').append('<option value="'+v.id+'" selected>'+v.course.name+' '+(v.location ? '('+v.location+')' : '')+'</option>');
            }else{
              $('[name=course_codes]').append('<option value="'+v.id+'">'+v.course.name+' '+(v.location ? '('+v.location+')' : '')+'</option>');
            }
          });  
      }

      // console.log(this.$start_datepicker);

      

      // this.$packages.selectize({
      //     valueField: 'id',
      //     create:false,
      //     labelField: 'name',
      //     maxItems: 1,
      //     searchField: ['name'],
      //     options: window.packages,
      //     render: {
      //         option: function(item, escape){
      //             return '<div> '+ escape(item.name) +'</div>';
      //         },
      //         item: function(item, escape){
      //             return '<div> '+ escape(item.name) +'</div>';
      //         },

      //     }
      // });

      


      // console.log($("#course_unit")[0].selectize);
      // this.$globalPackage = this.$packages[0].selectize;
      // console.log(this.$globalPackage);

    },



    /*=======================================
    =            Event Callbacks            =
    =======================================*/

    _onFocusCourseStartDate: function(e) {
      $(e.target).datetimepicker({
        format: 'DD/MM/YYYY',
      });
    },

    _sendOfferLetter: function(e) {
      window.location = '/agent/offer-letter/render/'+window.offerData['id'];
    },

    _payReqLetter : function(e)
    {
      var pr = parseInt($(e.target).val());

      if( pr != 'NaN'){
        var bd = parseFloat($('[name=total_course_fee_due]').val()) - parseFloat(pr);
        $('[name=balance_due]').val(bd.toFixed(2));  
      }
      // console.log($(e.target).val());
    },

    _previewOfferLetter: function(e){
      // window.location = '/agent/offer-letter/preview/'+window.offerData['id'];
      window.open('/agent/offer-letter/preview/'+window.offerData['id'], '_blank');
    },

    // submit note callback
    _submitNote: function(e) {
      var notification = alertify.notify('Submitting your note...', 'warning', 0, null);

      $.ajax({
        url: window.notesRoute,
        type: 'POST',
        data: {'_token': OfferLetter.$formToken.val(), 'remarks': OfferLetter.$noteContent.val()},
        success: function(response) {

          if ( response.status != 'error' ) {
            response.content = OfferLetter.$noteContent.val();
            OfferLetter._appendNote(response);

            OfferLetter.$noteContent.val('');
            notification.dismiss();
          } else {
            alertify.alert('Error', 'There was a problem on the server.<br>Please try again later.');
          }
        }
      });
    },

    // note append element callback
    _appendNote: function(data) {
      var noteItem = '<li>\
                <div class="position-relative">\
                    <div class="chatbox-avatar" style="">\
                        <canvas width="50" height="50" data-jdenticon-value="%userId%"></canvas>\
                    </div>\
                    <div class="chatbox-content">\
                        <h1 class="content-name px-16-font proximanova-bold iris-blue-font-color no-margin line-height-1">%user%</h1>\
                        <span class="content-date px-10-font dark-grey-font-color">%timeSent%</span>\
                        <span class="content-timepass px-10-font dark-grey-font-color"><i class="fa fa-clock-o" aria-hidden="true"></i>%timeDiff%</span>\
                        <div class="content-conversation px-12-font bright-grey-font-color">\
                            <p>%content%</p>\
                        </div>\
                    </div>\
                </div>\
            </li>';
            

            noteItem = noteItem.split('%user%').join(data.userName);
            noteItem = noteItem.split('%userId%').join(data.userId);
            noteItem = noteItem.split('%timeSent%').join(data.createdAt);
            noteItem = noteItem.split('%timeDiff%').join(data.timeDiff);
            noteItem = noteItem.split('%content%').join(data.content);

            OfferLetter.$noteList.append(noteItem);
    },
    
    /**
     *
     * store form data
     *
     */
    _submitForm: function(e) {
      // alert('test');
      alertify.warning('Saving offer letter.');
      this.$form.submit();
    },

    _onChangeOSHC: function(e) {

      var tcfd = parseFloat($('[name=totla_course_fee]').val()) - parseFloat(this.$oshc.val());
      var payment_required = (tcfd / 2) + parseFloat($('[name=application_fee]').val()) + parseFloat($('[name=materials_fee]').val());
      $('[name=total_course_fee_due]').val(tcfd.toFixed(2));
      $('[name=payment_required]').val(payment_required.toFixed(2));

    },

    _packageChange: function(e) {

      // console.log(this.$packages.val());

      if(this.$packages.val() != ''){
        $('#addrow_detail').attr('style', 'display:none');
      }else{
        $('#addrow_detail').attr('style', 'display:block');
      }

      $('.package-detail-rows').children().remove();

      axios.get('/agent/offer-letter/get-courses/'+this.$packages.val())
      .then(function (response){
        // console.log(response.data);
        var count = 0;
        var cols = '';
        var allPackage = [];
        var nextCourseDate = '';
        $.each(response.data, function(k,v){
          var shore = $('[name=shore]').val();

          if(k == 0){
            $('#package_loc').val(v.offer_package.location);
            $('#package_desc').val(v.offer_package.description);
          }

          var course = '';
          var cName = '';
          
          if(typeof v.detail_course.course !== 'undefined'){
            // console.log(v.detail_course.course);
            course = v.detail_course.course.name.split(' - ');
            cName = course[course.length - 1];
          }

          var weeks = parseFloat(v.detail_course.wk_duration_package);
          var start = nextCourseDate == '' ? v.course_start_date : nextCourseDate;
          var end = nextCourseDate == '' ? v.course_start_date : nextCourseDate
          end = moment(end, 'YYYY-MM-DD').add(weeks, 'w').format('YYYY-MM-DD');

          nextCourseDate =  moment(end).add(1, 'M').format('YYYY-MM-DD');
          nextCourseDate =  moment(nextCourseDate).startOf('isoWeek').format('YYYY-MM-DD');

          // console.log(start);
          // console.log(end);
          // console.log(nextCourseDate);

          var tuition = (shore == 'OFFSHORE' ? v.detail_course.oh_tuition_package : v.detail_course.os_tuition_package);
          cols += '<tr><td><input type="text" readonly class="form-control" value="'+v.detail_course.cricos_code+'" name="cricos' + count + '"/></td>';
          cols += '<td><input type="text" readonly class="form-control" value="'+v.detail_course.course_code+' - '+cName+'" name="course' + count + '"/></td>';
          cols += '<td><input type="number" class="form-control wk dw'+count+'" max="'+v.detail_course.wk_duration_package+'" data="'+count+'" value="'+v.detail_course.wk_duration_package+'" name="duration"/></td>';
          cols += '<td><input type="number" class="form-control tuition" data="'+tuition+'" value="'+tuition+'" data-count="'+count+'" name="tuition' + count + '"/></td>';
          cols += '<td><input type="number" class="form-control material" value="'+v.detail_course.material_fees+'" data="'+count+'" name="material' + count + '"/></td>';
          cols += '<td class="dtp"><input type="text" class="form-control start_datetimepicker" data="'+count+'" value="'+moment(start, 'YYYY-MM-DD').format('DD/MM/YYYY')+'" name="start_date' + count + '"/></td>';
          cols += '<td><input type="text" readonly class="form-control" value="'+moment(end, 'YYYY-MM-DD').format('DD/MM/YYYY')+'" name="end_date' + count + '"/></td>';
          cols += '<td class="text-center"></td></tr>';
          
          allPackage.push({'cricos': v.detail_course.cricos_code, 'course': v.detail_course.course_code, 'duration': v.detail_course.wk_duration_package, 'max_duration': v.detail_course.wk_duration,  'tuition': tuition, 'max_tuition': tuition, 'material': v.detail_course.material_fees, 'start_date': start, 'end_date': end});


          if(count == 0){
            // var course = '';
            $('#course_discription').html('('+v.detail_course.course.code+') '+cName); 
            var total_course_fee = parseFloat(tuition) + parseFloat(v.detail_course.enrolment_fee) + parseFloat(v.detail_course.material_fees);
            var payment_required = (shore == 'ONSHORE' ? 1500 : (total_course_fee / 2) + parseFloat(v.detail_course.enrolment_fee) + parseFloat(v.detail_course.material_fees));
            var balance_due = total_course_fee - payment_required;
            // console.log(payment_required);
            $('[name=course_tuition_fee]').val(tuition);
            $('[name=application_fee]').val(v.detail_course.enrolment_fee);
            $('[name=materials_fee]').val(v.detail_course.material_fees);
            $('[name=totla_course_fee]').val(total_course_fee.toFixed(2));
            $('[name=total_course_fee_due]').val(total_course_fee.toFixed(2));
            $('[name=payment_required]').val(payment_required.toFixed(2));
            $('[name=balance_due]').val(balance_due.toFixed(2));
            $('[name=oshc]').val(0.00);

          }

          count++;
        });
        $('[name=all_package]').val(JSON.stringify(allPackage));
        $('.package-detail-rows').append(cols);


        // $('body .start_datetimepicker').datetimepicker({
        //   format: 'DD/MM/YYYY',
        // });

      }).then(function (){
        $('.start_datetimepicker').datetimepicker({
          format: 'DD/MM/YYYY',
        });
      })
      .catch(function (error){
        console.log(error);
      });

    },

    _onChangeWeek: function(e) {
        
        var max = parseFloat($(e.target).attr('max'));
        var id = $(e.target).attr('data');
        var wk = parseFloat($(e.target).val());
        var tf = parseFloat($('[name=tuition'+id+']').val());
        var max_tf = parseFloat($('[name=tuition'+id+']').attr('data'));
        var csd = $('[name=start_date'+id+']').val();
        var ced = moment(csd, 'DD/MM/YYYY').add(wk, 'w').format('DD/MM/YYYY');

        var wklyPymnt = max_tf / max;
        var nwtf = wklyPymnt * wk; 

        // Course Fee Package Structure
        if(id == 0){
          var total_course_fee = (Math.round(nwtf)) + parseFloat($('[name=application_fee]').val()) + parseFloat($('[name=materials_fee]').val());
          var total_course_fee_due = total_course_fee - ($('[name=oshc]').val() != '' ? parseFloat($('[name=oshc]').val()) : 0);
          var payment_required = (total_course_fee / 2) + parseFloat($('[name=application_fee]').val()) + parseFloat($('[name=materials_fee]').val());
          var balance_due = total_course_fee - payment_required;
          $('[name=course_tuition_fee]').val((Math.round(nwtf)).toFixed(2));
          $('[name=totla_course_fee]').val(total_course_fee.toFixed(2));
          $('[name=total_course_fee_due]').val(total_course_fee_due.toFixed(2));
          $('[name=payment_required]').val(payment_required.toFixed(2));
          $('[name=balance_due]').val(balance_due.toFixed(2));
        }

        // Package Details
        var ap = $.parseJSON($('[name=all_package]').val());
        $('[name=end_date'+id+']').val(ced);
        $('[name=tuition'+id+']').val((Math.round(nwtf)).toFixed(2));
        $.each(ap, function(k,v){
          if(k == id){
              ap[k]['duration'] = wk;
              ap[k]['tuition'] = (Math.round(nwtf)).toFixed(2);
              ap[k]['end_date'] = moment(ced, 'DD/MM/YYYY').format('YYYY-MM-DD');
          }
        });
        $('[name=all_package]').val(JSON.stringify(ap));


    },

    // Change Tuition Fee
    _onChangeTuition: function(e) {
        var id = $(e.target).attr('data-count');
        var tf = parseFloat($('[name=tuition'+id+']').val());
        var mat = parseFloat($('[name=material'+id+']').val());
        // Course Fee Package Structure
        if(id == 0){
          var total_course_fee = (Math.round(tf)) + parseFloat($('[name=application_fee]').val()) + mat;
          var total_course_fee_due = total_course_fee - ($('[name=oshc]').val() != '' ? parseFloat($('[name=oshc]').val()) : 0);
          var payment_required = (total_course_fee / 2) + parseFloat($('[name=application_fee]').val()) + mat;
          var balance_due = total_course_fee - payment_required;
          $('[name=course_tuition_fee]').val(tf.toFixed(2));
          $('[name=materials_fee]').val(mat.toFixed(2));
          $('[name=totla_course_fee]').val(total_course_fee.toFixed(2));
          $('[name=total_course_fee_due]').val(total_course_fee_due.toFixed(2));
          $('[name=payment_required]').val(payment_required.toFixed(2));
          $('[name=balance_due]').val(balance_due.toFixed(2));
        }

        // Package Details
        var ap = $.parseJSON($('[name=all_package]').val());
        // $('[name=end_date'+id+']').val(ced);
        // $('[name=tuition'+id+']').val((Math.round(nwtf)).toFixed(2));
        $.each(ap, function(k,v){
          if(k == id){
              // ap[k]['duration'] = wk;
              ap[k]['tuition'] = (Math.round(tf)).toFixed(2);
              ap[k]['material'] = (Math.round(mat)).toFixed(2);
              // ap[k]['end_date'] = moment(ced, 'DD/MM/YYYY').format('YYYY-MM-DD');
          }
        });
        $('[name=all_package]').val(JSON.stringify(ap));
    },

    // Change Material Fee
    _onChangeMaterial: function(e) {
        // alert('test');
        var id = $(e.target).attr('data');
        var tf = parseFloat($('[name=tuition'+id+']').val());
        var mat = parseFloat($('[name=material'+id+']').val());
        // Course Fee Package Structure
        if(id == 0){
          var total_course_fee = (Math.round(tf)) + parseFloat($('[name=application_fee]').val()) + mat;
          var total_course_fee_due = total_course_fee - ($('[name=oshc]').val() != '' ? parseFloat($('[name=oshc]').val()) : 0);
          var payment_required = (total_course_fee / 2) + parseFloat($('[name=application_fee]').val()) + mat;
          var balance_due = total_course_fee - payment_required;
          $('[name=course_tuition_fee]').val(tf.toFixed(2));
          $('[name=materials_fee]').val(mat.toFixed(2));
          $('[name=totla_course_fee]').val(total_course_fee.toFixed(2));
          $('[name=total_course_fee_due]').val(total_course_fee_due.toFixed(2));
          $('[name=payment_required]').val(payment_required.toFixed(2));
          $('[name=balance_due]').val(balance_due.toFixed(2));
        }

        // Package Details
        var ap = $.parseJSON($('[name=all_package]').val());
        // $('[name=tuition'+id+']').val((Math.round(nwtf)).toFixed(2));
        $.each(ap, function(k,v){
          if(k == id){
              // ap[k]['duration'] = wk;
              ap[k]['tuition'] = (Math.round(tf)).toFixed(2);
              ap[k]['material'] = (Math.round(mat)).toFixed(2);
              // ap[k]['end_date'] = moment(ced, 'DD/MM/YYYY').format('YYYY-MM-DD');
          }
        });
        $('[name=all_package]').val(JSON.stringify(ap));

    },

    _onChangeCourseStartDate: function(e) {
      var date = $(e.target).val();
      var id = $(e.target).attr('data');
      var wk = $('.dw'+id).val();
      var ced = moment(date, 'DD/MM/YYYY').add(wk, 'w').format('DD/MM/YYYY');
      $('[name=end_date'+id+']').val(ced);
      // alert(ced);
      var ap = $.parseJSON($('[name=all_package]').val());
      ap[id]['start_date'] = moment(date, 'DD/MM/YYYY').format('YYYY-MM-DD');
      ap[id]['end_date'] = moment(ced, 'DD/MM/YYYY').format('YYYY-MM-DD');
      $('[name=all_package]').val(JSON.stringify(ap));
    },

    _onAddClick: function(e) {
      var counter  = 0;
      var newRow = $("<tr>");
      var cols = "";

      cols += '<td><input type="text" class="form-control" name="due_date' + counter + '"/></td>';
      cols += '<td><input type="text" class="form-control" name="payable' + counter + '"/></td>';
      cols += '<td><input type="text" class="form-control" name="paid_receipts' + counter + '"/></td>';
      cols += '<td><input type="text" class="form-control" name="unpaid' + counter + '"/></td>';

      cols += '<td class="text-center"><a class="ibtnDel btn text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
      newRow.append(cols);
      $("table.course-fee").append(newRow);
      counter++;

    },

    _onChangePackageType: function(e) {
      // alert(this.$package_type.val());
      $('.package-detail-rows').children().remove();
      // console.log(this.$package_type.val());

      var shore = '<option value="">Select shore type</option><option value="ONSHORE">Onshore</option><option value="OFFSHORE">Offshore</option>';
      $('#get-shore').children().remove();
      $('#get-shore').append(shore);

      $('[name=all_package]').val('');

      // console.log(this.$globalPackage);
      if(typeof $('[name=package]')[0].selectize  !== 'undefined'){
        $('[name=package]')[0].selectize.destroy();
      }

      $('[name=package]').children().remove();
      $('[name=course_codes]').children().remove();

      if(this.$package_type.val() == 'package'){
          $('#go-course').addClass('hidden');
          $('#go-package').removeClass('hidden');
      }else{
          $('#go-course').removeClass('hidden');
          $('#go-package').addClass('hidden');

      }
    },

    _shoreChange: function(e) {
      // console.log(this.$shore.val());
      // if(this.$globalPackage != null){
      //   this.$globalPackage.destroy();
      // }

      // console.log(this.$package_type.val());

      // if(this.$shore.val() != ''){
      //   $('#addrow_detail').attr('style', 'display:none');
      // }else{
      //   $('#addrow_detail').attr('style', 'display:block');
      // }

      $('.package-detail-rows').children().remove();


      if(this.$package_type.val() == 'package'){
          $('[name=package]').attr('placeholder', 'Select Package');
          axios.get('/agent/offer-letter/get-package/'+this.$shore.val())
          .then(function (response){
            
            // console.log(this.$globalPackage);
            if(typeof $('[name=package]')[0].selectize  !== 'undefined'){
              $('[name=package]')[0].selectize.destroy();
            }

            // $('[name=package]')[0].selectize
            // console.log(response.data);

            $('[name=package]').selectize({
                valueField: 'id',
                create:false,
                labelField: 'name',
                maxItems: 1,
                searchField: ['name'],
                options: response.data,
                render: {
                    option: function(item, escape){
                        return '<div> '+ escape(item.name) +'</div>';
                    },
                    item: function(item, escape){
                        return '<div> '+ escape(item.name) +'</div>';
                    },
                }
            });

            $('[name=package]')[0].selectize.setValue('', 1);
            // this.$globalPackage = $('[name=package]')[0].selectize;

            // console.log(response.data);
          }).catch(function (error){
            console.log(error);
          });

      }else{
        // console.log('sulod');
        var val = $('[name=course_codes]').val();
        var matrix = '<option >Select Course</option>';
        $('[name=course_codes]').children().remove();

        $.each(window.matrix, function(k,v){
          var loc = v.location != null ? '('+v.location+')' : ''; 
          matrix += '<option value="'+v.id+'">'+ v.course.name + ' '+loc+'</option>';
        });
        // console.log(matrix);
        $('[name=course_codes]').append(matrix);
      }
      
    },

    _onChangeCourseCode: function(e) {
      $('.package-detail-rows').children().remove();

      axios.get('/agent/offer-letter/non-package-course/'+this.$course_code.val())
      .then(function (response){
        // console.log(response.data);
        var count = 0;
        var cols = '';
        var allPackage = [];
        var nextCourseDate = '';
        $.each(response.data, function(k,v){
          var shore = $('[name=shore]').val();
          console.log(v);
          // if(k == 0){
          //   $('#package_loc').val(v.offer_package.location);
          //   $('#package_desc').val(v.offer_package.description);
          // }

          var course = '';
          var cName = '';
          
          if(typeof v.course !== 'undefined'){
            // console.log(v.detail_course.course);
            course = v.course.name.split(' - ');
            cName = course[course.length - 1];
          }

          var weeks = parseFloat(v.wk_duration);
          var start = moment().startOf('isoWeek').format('YYYY-MM-DD');
          var end = moment(start, 'YYYY-MM-DD').add(weeks, 'w').format('YYYY-MM-DD');

          // nextCourseDate =  moment(end).add(1, 'M').format('YYYY-MM-DD');
          // nextCourseDate =  moment(nextCourseDate).startOf('isoWeek').format('YYYY-MM-DD');

          // console.log(start);
          // console.log(end);
          // console.log(nextCourseDate);
          var tuition = (shore == 'OFFSHORE' ? v.oh_tuition_individual : v.os_tuition_individual);
          console.log(shore);
          console.log(tuition);
          cols += '<tr><td><input type="text" readonly class="form-control" value="'+v.cricos_code+'" name="cricos' + count + '"/></td>';
          cols += '<td><input type="text" readonly class="form-control" value="'+v.course_code+' - '+cName+'" name="course' + count + '"/></td>';
          cols += '<td><input type="number" class="form-control wk dw'+count+'" max="'+v.wk_duration+'" data="'+count+'" value="'+v.wk_duration+'" name="duration"/></td>';
          cols += '<td><input type="number" class="form-control tuition" data="'+tuition+'" value="'+tuition+'" data-count="'+count+'" name="tuition' + count + '"/></td>';
          cols += '<td><input type="number" class="form-control material" value="'+v.material_fees+'" data="'+count+'" name="material' + count + '"/></td>';
          cols += '<td class="dtp"><input type="text" class="form-control start_datetimepicker" data="'+count+'" value="'+moment(start, 'YYYY-MM-DD').format('DD/MM/YYYY')+'" name="start_date' + count + '"/></td>';
          cols += '<td><input type="text" readonly class="form-control" value="'+moment(end, 'YYYY-MM-DD').format('DD/MM/YYYY')+'" name="end_date' + count + '"/></td>';
          cols += '<td class="text-center"></td></tr>';
          
          allPackage.push({'cricos': v.cricos_code, 'course': v.course_code, 'duration': v.wk_duration, 'max_duration': v.wk_duration,  'tuition': tuition, 'max_tuition': tuition, 'material': v.material_fees, 'start_date': start, 'end_date': end});


          if(count == 0){
            // var course = '';
            $('#course_discription').html('('+v.course.code+') '+cName); 
            var total_course_fee = parseFloat(tuition) + parseFloat(v.enrolment_fee) + parseFloat(v.material_fees);
            var payment_required = (shore == 'ONSHORE' ? 1500 : (total_course_fee / 2) + parseFloat(v.enrolment_fee) + parseFloat(v.material_fees));
            var balance_due = total_course_fee - payment_required;
            // console.log(payment_required);
            $('[name=course_tuition_fee]').val(tuition);
            $('[name=application_fee]').val(v.enrolment_fee);
            $('[name=materials_fee]').val(v.material_fees);
            $('[name=totla_course_fee]').val(total_course_fee.toFixed(2));
            $('[name=total_course_fee_due]').val(total_course_fee.toFixed(2));
            $('[name=payment_required]').val(payment_required.toFixed(2));
            $('[name=balance_due]').val(balance_due.toFixed(2));
            $('[name=oshc]').val(0.00);

          }

          count++;
        });
        $('[name=all_package]').val(JSON.stringify(allPackage));
        $('.package-detail-rows').append(cols);


      }).then(function (){
        $('.start_datetimepicker').datetimepicker({
          format: 'DD/MM/YYYY',
        });
      })
      .catch(function (error){
        console.log(error);
      });
    },

    /**
     *
     * remove item in index page action menu
     *
     */
    _deleteItemInIndex: function(e) {
      let url = this.$deleteForm.attr('action');

      this.$deleteForm.attr('action', url +'/'+ e.target.getAttribute('data-item'));

      this.$deleteForm.submit();
    }
    
    /*=====  End of Event Callbacks  ======*/
    
  }

  // initialize class
  OfferLetter.init();
})(window)
});



$('#delete-item').on('click', function(e){
    e.preventDefault();
    var x = false;
    alertify.confirm('Delete Entry', 'Are you sure you want to delete this entry?',
        function(){
            $('#delete-item').parent().submit();
        },
        function(){ alertify.error('Cancel')
    });

});
