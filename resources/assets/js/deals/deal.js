import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';
var apiUser = "";
var apiPass = "";
var apiBaseUrl = "";
var basicAuth;
(function(window, undefined) {
	var Deal = {
		init: function() {
			/*----------  initialize DOM Elements  ----------*/
			this._cacheDom();

			/*----------  autoload functions  ----------*/
			this._autoload();

			/*----------  bind DOM element events  ----------*/
			this._bindDomEvents();
		},
		_cacheDom: function() {
			/*=======================================
			=            Form attributes            =
			=======================================*/
			
			// csrf token
			this.$formToken = $('input[name=_token]');

			// form
			this.$form = $('form.add-deals-form');
			this.$deleteForm = $('form[id=delete-form-index]');

			// attachment delete form
			// this.$attachmentDeleteForm = $('form[id=delete-deals-attachment]');

			// 
			this.$indexDeleteBtn = $('a[id=index-item-delete]');
			
			/*=====  End of Form attributes  ======*/

			/*=============================================
			=            Personal Info Section            =
			=============================================*/
			
			// suburb dom
			this.$suburb = $('input[id=location_suburb_town]');

			// state
			this.$state = $('input[id=state_identifier]');

			// state
			this.$locality = $('input[id=suburb_locality_town]');

			this.$postcode = $('input[id=postcode]');
			
			// Verify USI
			this.$usibtn = $('a.verify_usi');

			
			/*=====  End of Personal Info Section  ======*/

			/*===========================================
			=            Leads Scope Section            =
			===========================================*/

			// lead scope dom
			this.$statDecChkbx = $('input[name=stat_dec_needed][type=checkbox]');

			// stat dec datetimepicker
			this.$dobDatepicker = $('div[id=dob-datetimepicker]');

			// stat dec datetimepicker
			this.$statDecDatepicker = $('div[id=stat-dec-datetimepicker]');

			// aiss check datetimepicker
			this.$aissDatepicker = $('div[id=aiss-datepicker]');

			// enrolment received datetimepicker
			this.$enrolDatepicker = $('div[id=enrol-datetimepicker]');

			// course
			this.$course = $('select[id=course_id]');

			// course fee
			this.$courseFee = $('input[id=course_fee]');

			// course extra unit fees
			// this.$extraUnitFee = $('input[id=extra_unit_fee]');

			// agent
			this.$agent = $('select[id=agent_id]');

			// student refferer
			this.$studReferrer = $('select[id=stud_referrer]');

			// eligible
			this.$eligible = $('select[id=eligible]');
			
			/*=====  End of Leads Scope Section  ======*/

			/*===========================================
			=            Opportunity Details            =
			===========================================*/
			
			// closing date piker
			this.$closingDatepicker = $('div#closing-date-datetimepicker');

			// stage select
			this.$oppStage = $('input[id=opp_stage_id]');
			
			this.$oppStageValue = $('input[id=probability_val]');
			
			/*=====  End of Opportunity Details  ======*/
			
			/*=============================
			=            Notes            =
			=============================*/
			
			// note content
			this.$noteContent = $('textarea[id=notes-content]');

			// convo content
			this.$convoContent = $('textarea[id=convo-content]');

			// convo id
			this.$convoId = $('input[id=convo-id]');

			// note submit button
			this.$submitNoteBtn = $('button[id=submit-note]');

			this.$submitConvoBtn = $('button[id=submit-convo]');

			// note list
			this.$noteList = $('ul[id=note-list]');

			// convo list
			this.$convoList = $('ul[id=convo-list]');
			
			/*=====  End of Notes  ======*/
			
			/*================================
			=            Avetmiss            =
			================================*/
			
			// opportunity detail
			this.$oppYearCompleted = $('input[id=year_hs_completed]');
			
			// usi
			this.$usi = $('input[name=uniq_stud_identifier]');
			this.$usiverified = $('span.usi_verified');
			/*=====  End of Avetmiss  ======*/
			
		},
		_bindDomEvents: function() {

			// on stat dec toggle true
			this.$statDecChkbx.on('change', function() {
				if ( $(this).is(':checked') ) {
					$('div#stat_dec_date_wrapper').removeClass('hidden');
				} else {
					$('div#stat_dec_date_wrapper').addClass('hidden');
				}
			});

			// submit form
			toolbar.saveBtn.on('click', this._submitDealsForm.bind(this));

			// on select state change
			this.selectizeState.on('change', this._stateChange.bind(this));

			// on select suburb change
			this.selectizeSuburb.on('change', this._suburbChange.bind(this));

			// on select locality change
			// this.selectizeLocality.on('change', this._localityChange.bind(this));

			// on select opps staging change
			this.selectizeOppStage.on('change', this._oppStageChange.bind(this));

			// remove item in index page action menu
			this.$indexDeleteBtn.on('click', this._deleteItemInIndex.bind(this));

			// attachment preview
			// this.$previewAttachment.on('click', this._previewAttachment.bind(this));

			// notes submit
			this.$submitNoteBtn.on('click', this._submitNote.bind(this));

			// convo submit
			this.$submitConvoBtn.on('click', this._submitConvo.bind(this));

			// verify usi
			this.$usibtn.on('click', this._usibtn.bind(this));
		},
		_autoload: function() {
			

			/*=======================================
			=            DateTimePickers            =
			=======================================*/
				
			// stat dec
			this.$statDecDatepicker.datetimepicker({
				format: 'DD/MM/YYYY'
			});

			// aiss
			this.$aissDatepicker.datetimepicker({
				format: 'DD/MM/YYYY'
			});

			// enrol
			this.$enrolDatepicker.datetimepicker({
				format: 'DD/MM/YYYY'
			});

			// dob
			this.$dobDatepicker.datetimepicker({
				format: 'DD/MM/YYYY'
			});

			// closing date
			this.$closingDatepicker.datetimepicker({
				format: 'DD/MM/YYYY'
			});

			// hs year
			this.$oppYearCompleted.datetimepicker({
				format: 'YYYY'
			});
			
			/*=====  End of DateTimePickers  ======*/
			
			/*=================================
			=            Selectize            =
			=================================*/

			// agent
			this.$agent.selectize({
			    create: false,
			    sortField: 'text',
			    persist: false,
			});

			// student referer
			this.$studReferrer.selectize({
			    create: false,
			    sortField: 'text',
			    persist: false,
			    maxOptions: 10,
			});

			// course
			this.selectizeCourse = this.$course.selectize({
			    create: false,
			    sortField: 'text',
			    persist: false,
			    valueField: 'id',
			    options: window.courses,
			    render: {
	                item: function(item, escape) {
	                	var loc = item.location != null ? escape(item.location) +' - ' : '';
                    	return '<div>'+ loc + '' + escape(item.name) + '</div>';
	                },
	                option: function(item, escape) {
	                	var loc = item.location != null ? escape(item.location) +' - ' : '';
                    	return '<div>'+ loc + '' + escape(item.name) + '</div>';
	                }
	            },
			});

			// course fee
			this.selectizeCourseFee = this.$courseFee.selectize({
			    create: false,
			    maxItems: 1,
			    sortField: 'text',
			    persist: true,
			    valueField: 'meta_key',
			    searchField: ['name', 'fee', 'meta_key', 'description'],
			    options: window.courseFees,
			    onDropdownOpen: function(e) {
			    	let instanceCourse = Deal.selectizeCourse[0].selectize;
			    	let instanceCourseFee = Deal.selectizeCourseFee[0].selectize;
			    	// let instanceExtraUnit = Deal.selectizeExtraUnitFee[0].selectize;
			    	let eligibleFees = ['concessional', 'non_concessional'];

			    	let fees = $.map(window.courseFees, function(item) {
			    		if ( Deal.$eligible.val() == 1 ) {
				    		if ( instanceCourse.getValue() == item.course_id && $.inArray(item.meta_key, eligibleFees) != -1 ) {
				    			return item;
				    		}
			    		} else {
			    			if ( instanceCourse.getValue() == item.course_id && $.inArray(item.meta_key, eligibleFees) == -1 ) {
			    				return item;
			    			}
			    		}
			    	});

			    	// let extraUnits = $.map(window.extraUnits, function(item) {
			    	// 	if ( instanceCourse.getValue() == item.course_id ) {
			    	// 		return item;
			    	// 	}
			    	// });


			    	// if ( $.isEmptyObject(extraUnits) ) {
			    	// 	instanceExtraUnit.clearOptions();
			    	// 	instanceExtraUnit.disable();
			    	// } else {
			    	// 	instanceExtraUnit.enable();
			    	// 	instanceExtraUnit.clearOptions();
			    	// 	instanceExtraUnit.addOption(extraUnits);
			    	// }
			    	
			    	instanceCourseFee.clearOptions();
			    	instanceCourseFee.addOption(fees);
			    },
	    	    render: {
	                item: function(item, escape) {

	                	if ( item.fee == null ) {
    	                    return '<div style="pointer-events: none; color: #aaa;" disabled>' + escape(item.name) + '</div>';
                    	}

                    	return '<div>' +
    	                        '$' + escape(item.fee) +
    	                        '<br><small>' +
    	                        escape(item.name) +
    	                        '</small>'+
    	                    '</div>';
	                },
	                option: function(item, escape) {
                    	if ( item.fee == null ) {
    	                    return '<div style="pointer-events: none; color: #aaa;" disabled>' + escape(item.name) + '</div>';
                    	}

                    	return '<div>' +
    	                        '$' + escape(item.fee) +
    	                        '<br><small>' +
    	                        escape(item.name) +
    	                        '</small>'+
    	                    '</div>';
	                }
	            },
			});

			// this.selectizeExtraUnitFee = this.$extraUnitFee.selectize({
			//     create: false,
			//     sortField: 'text',
			//     persist: true,
			//     valueField: 'code',
			//     searchField: ['code', 'description'],
			//     options: window.extraUnits,
	  //   	    render: {
	  //               item: function(item, escape) {

   //                  	return '<div>' +
   //  	                        escape(item.code) +
   //  	                        '<br><small>' +
   //  	                        '$' + escape(item.fee) +
   //  	                        '</small>'+
   //  	                    '</div>';
	  //               },
	  //               option: function(item, escape) {

   //                  	return '<div>' +
   //  	                        escape(item.code) +
   //  	                        '<br><small>' +
   //  	                        '$' + escape(item.fee) +
   //  	                        '</small>'+
   //  	                    '</div>';
	  //               }
	  //           },
			// });

			// locality
			this.selectizeLocality = this.$locality.selectize({
			    create: false,
	    	    maxItems: 1,
	    	    valueField: 'id',
	    	    searchField: ['loc_name', 'postcode'],
	    	    options: window.locality,
	    	    render: {
	                item: function(item, escape) {
	                    return '<div>' +
	                        escape(item.loc_name) +
	                    '</div>';
	                },
	                option: function(item, escape) {
	                    return '<div>' +
	                        escape(item.loc_name) +
	                    '</div>';
	                }
	            },
			});

			// suburb
			this.selectizeSuburb = this.$suburb.selectize({
	    	    create: false,
	    	    maxItems: 1,
	    	    valueField: 'id',
	    	    searchField: ['post_suburb', 'postcode', 'state'],
	    	    options: window.postSuburbs,
	    	    render: {
	                item: function(item, escape) {
	                    return '<div>' +
	                        escape(item.post_suburb) +
	                    '</div>';
	                },
	                option: function(item, escape) {
	                    return '<div>' +
	                        escape(item.post_suburb) +
	                    '</div>';
	                }
	            },
			});

			// state
			this.selectizeState = this.$state.selectize({
			    create: false,
			    maxItems: 1,
			    valueField: 'id',
			    searchField: ['state_key', 'state_name'],
			    options: window.states,
			    render: {
		            item: function(item, escape) {
		                return '<div>' +
		                    escape(item.state_key) + ' - ' + escape(item.state_name) +
		                '</div>';
		            },
		            option: function(item, escape) {
		                return '<div>' +
		                    escape(item.state_key) + ' - ' + escape(item.state_name) +
		                '</div>';
		            }
		        },
			});

			// opps stage
			this.selectizeOppStage = this.$oppStage.selectize({
	    	    create: false,
	    	    maxItems: 1,
	    	    valueField: 'id',
	    	    searchField: ['name'],
	    	    options: window.opp_stagings,
	    	    render: {
	                item: function(item, escape) {
	                    return '<div>' +
	                        escape(item.name) +
	                    '</div>';
	                },
	                option: function(item, escape) {
	                    return '<div>' +
	                        escape(item.name) +
	                    '</div>';
	                }
	            },
			});

			// estimated revenue
			if ( typeof this.selectizeCourseFee[0] != 'undefined' ) {

				// course instance
				let instanceCourse = this.selectizeCourse[0].selectize;
				// let instanceExtraUnit = this.selectizeExtraUnitFee[0].selectize;

				// let courseExtraUnits = $.map(window.extraUnits, function(item) {
				// 	if ( instanceCourse.getValue() == item.course_id ) {
				// 		return item;
				// 	}
				// });

				// if ( $.isEmptyObject(courseExtraUnits) ) {
				// 	instanceExtraUnit.disable();
				// }

				// course fee instance
				let instanceCourseFee = this.selectizeCourseFee[0].selectize;
				let eligibleFees = ['concessional', 'non_concessional'];
				let cfv = instanceCourseFee.getValue();

		    	let fees = $.map(window.courseFees, function(item) {
		    		if ( Deal.$eligible.val() == 1 ) {
			    		if ( instanceCourse.getValue() == item.course_id && $.inArray(item.meta_key, eligibleFees) != -1 ) {
			    			return item;
			    		}
		    		} else {
		    			if ( instanceCourse.getValue() == item.course_id && $.inArray(item.meta_key, eligibleFees) == -1 ) {
		    				return item;
		    			}
		    		}
		    	});

		    	instanceCourseFee.clearOptions();
		    	instanceCourseFee.addOption(fees);
		    	instanceCourseFee.setValue(cfv);
			}

			// default opp stage
			if ( typeof this.selectizeOppStage[0] != 'undefined' ) {
				
				let instanceOfOppStage = this.selectizeOppStage[0].selectize;

				$.map(window.opp_stagings, function(item) {
					if ( instanceOfOppStage.getValue() == item.id ) {
						Deal.$oppStageValue.val(item.probability);
						return false;
					}
				});
			}
			
			/*=====  End of Selectize  ======*/

			// check stat dec check state
			if ( this.$statDecChkbx.is(':checked') ) {
				$('div#stat_dec_date_wrapper').removeClass('hidden');
			}

			$.ajax({ data: "GET",
		        url: "/usi/getAuth",
		        async: false,
		        success : function(data)
		        {
		            var r = JSON.parse(data);
		                apiUser = r.usr;
		                apiPass = r.pwd;
		                apiBaseUrl = r.url;
		        },
		        error: function() {
		            alert('Error occured. please check your credentials.');
		        }
		    });
		},

		/*=======================================
		=            Event Callbacks            =
		=======================================*/
		
		// form submit callback
		_submitDealsForm: function(e) {
			this.$form.submit();
		},

		// * remove item in index page
		_deleteItemInIndex: function(e) {
			let url = this.$deleteForm.attr('action');

			alertify.confirm('Delete Entry', 'Are you sure you want to delete this entry?',
				function(){
					Deal.$deleteForm.attr('action', url +'/'+ e.target.getAttribute('data-item'));

					Deal.$deleteForm.submit();
				},
				function(){ alertify.error('Cancel')});
		},

		_stateChange: function(e) {
			// selectize instance
			let instanceOfState = this.selectizeState[0].selectize;
			let instanceOfSuburb = this.selectizeSuburb[0].selectize;
			let instanceOfLocality = this.selectizeLocality[0].selectize;

			// data holders
			let suburbData = null;
			let localityData = null;
			let stateKey = null;

			// get state key
			$.map(window.states, function(item) {
				if ( item.id == instanceOfState.getValue() ) {
					stateKey = item.state_key;
					return false;
				}
			});

			// re-map suburb options
			suburbData = $.map(window.postSuburbs, function(item) {
				if ( stateKey == item.state ) {
					return item;
				}
			});

			// re-map locality options
			localityData = $.map(window.locality, function(item) {
				if ( stateKey == item.state ) {
					return item;
				}
			});

			/*re-assign new options*/
			instanceOfSuburb.clearOptions();
			instanceOfSuburb.addOption(suburbData);

			instanceOfLocality.clearOptions();
			instanceOfLocality.addOption(localityData);
		},

		// suburb change callback
		_suburbChange: function(e) {
			let instanceOfSuburb = this.selectizeSuburb[0].selectize;
			let instanceOfState = this.selectizeState[0].selectize;

			let suburbData = null;

			// 
			$.map(window.postSuburbs, function(item) {
				if ( instanceOfSuburb.getValue() == item.id ) {
					Deal.$postcode.val(item.postcode);
					return false;
				}
			});
		},

		// selectize opportunity stage change
		_oppStageChange: function(e) {

			let instanceOfOppStage = this.selectizeOppStage[0].selectize;

			$.map(window.opp_stagings, function(item) {
				if ( instanceOfOppStage.getValue() == item.id ) {

					Deal.$oppStageValue.val(item.probability);
					if( instanceOfOppStage.getValue() == 5){
						console.log(instanceOfOppStage.getValue());
						console.log(moment().format('DD/MM/YYYY'));
						$('#closing-date-datetimepicker').data('DateTimePicker').date(new Date());
					}else{
						$('#closing-date-datetimepicker').data('DateTimePicker').date(null);
					}
					
					return false;
				}
			});
		}
,
		// preview attachment
		_previewAttachment: function(e) {
			var fileMeta = $(e.currentTarget).closest('li').data('meta');
		},

		// submit note callback
		_submitNote: function(e) {
			var notification = alertify.notify('Submitting your note...', 'warning', 0, null);

			$.ajax({
				url: window.notesRoute,
				type: 'POST',
				data: {'_token': Deal.$formToken.val(), 'remarks': Deal.$noteContent.val()},
				success: function(response) {

					if ( response.status != 'error' ) {
						response.content = Deal.$noteContent.val();
						Deal._appendNote(response);

						Deal.$noteContent.val('');
						notification.dismiss();
					} else {
						alertify.alert('Error', 'There was a problem on the server.<br>Please try again later.');
					}
				}
			});
		},

		// submit convo callback
		_submitConvo: function(e) {
			var notification = alertify.notify('Submitting your conversation...', 'warning', 0, null);

			$.ajax({
				url: window.notesRoute,
				type: 'POST',
				data: {'_token': Deal.$formToken.val(), 'remarks': Deal.$convoContent.val(), 'notes_id': Deal.$convoId.val()},
				success: function(response) {

					if ( response.status != 'error' ) {
						response.content = Deal.$convoContent.val();
						Deal._appendConvo(response);

						Deal.$convoContent.val('');
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

            Deal.$noteList.append(noteItem);
		},

		// note append element callback
		_appendConvo: function(data) {
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

            Deal.$convoList.append(noteItem);
		},
		
		getAuth:function(e) {
		    // if (!basicAuth)
		        basicAuth = 'Basic ' + btoa(apiUser + ":" + apiPass);
		    return basicAuth;
		},
		showResult:function(req, res) {
		    /*$("#requestDataTxt").html(JSON.stringify(req, null, 4));*/
		    /*$("#responseDataTxt").html(JSON.stringify(res, null, 4));*/

		            console.log(res);
		            $("li#usistatus").html('USI ' + ' is ' + res["usistatus"]);
		            $("li#firstname").html('Firstname is ' + JSON.stringify(res["firstName"]));
		            $("li#lastname").html('Lastname is ' + JSON.stringify(res["familyName"]));
		            $("li#dobirth").html('Date of Birth is ' + JSON.stringify(res["dateOfBirth"]));
		            $("#erorInfo").html('Error : ' + JSON.stringify(res)); /*["errorInfo"]["message"]));*/
		            $('#verification_modal').modal('show');

		},
		showAlert: function(msg, flashKind = "success", msgTitle = "", autoClose = true) {
		    /*Go To top of page*/
		    $('html, body').animate({ scrollTop: 0 }, 'fast');

		    var myAlertMsg = "<div id='alertMsgDiv' class='alert alert-" + flashKind + "' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>" + msgTitle + "</strong>&nbsp;&nbsp;" + msg + "</div>";

		    $("#alertMsg").html(myAlertMsg);
		    if (autoClose) {
		        window.setTimeout(function() {
		            $("#alertMsgDiv").fadeTo(500, 0).slideUp(500, function() {
		                $(this).remove();
		            });
		        }, 4000);
		    }
		},
		_usibtn: function(e){
			$('input[name=usi]').val(this.$usi.val());
			console.log($('input[name=usi]').val());
			var formdata = $("#verify").serializeJSON();
			var verifyresult;
			var _usi         = this.$usi.val();
		    var _student_id  = $('input[name=student_id]').val();
		    var _token       = $('input[name=_token]').val();  
		     
		     if(this.$usiverified.data('verified_use') == 1){
		     	alertify.confirm('Validation', 'Are you sure you want to undergo a re-validation process?',
					function(){ 
						$("div#divLoading").addClass('show');
						 $.ajax({
				            type: 'POST',
				            url: apiBaseUrl + 'verify',
				            contentType: "application/json;charset=utf-8",
				            data: JSON.stringify(formdata),
				            success:function(formdata){ },
				            beforeSend: function(xhr) {
				                xhr.setRequestHeader('Authorization', Deal.getAuth());
				            }
				        }).then(function(data, status, jqxhr) {
				            console.log("RESPONSE:", data);
				            
				            verifyresult = data["usistatus"];
				                if(verifyresult == 'Valid' && data["dateOfBirth"] == 'MATCH' && data["familyName"] == 'MATCH' && data["firstName"] == 'MATCH'){
				                    $.ajax({
				                        url:window.verify,
				                        type:'POST',
				                        data:{student_id:_student_id,usi:_usi,_token:_token,verified:1},
				                        success:function(ress){
				                            console.log(ress);
				                        }
				                    });
				                }else{
				                	 $.ajax({
				                        url:window.verify,
				                        type:'POST',
				                        data:{student_id:_student_id,usi:_usi,_token:_token},
				                        success:function(ress){
				                            console.log(ress);
				                        }
				                    });
				                }
				                Deal.showResult(formdata, data);
				                $("div#divLoading").removeClass();
				            
				        }, function(data) {
				            $("#responseDataTxt").html(JSON.stringify(data.responseJSON, null, 4));
				        });
					},
					function(){ alertify.error('Cancel')});
		     }else{
		     	$("div#divLoading").addClass('show');
		     	 $.ajax({
				            type: 'POST',
				            url: apiBaseUrl + 'verify',
				            contentType: "application/json;charset=utf-8",
				            data: JSON.stringify(formdata),
				            success:function(formdata){ },
				            beforeSend: function(xhr) {
				                xhr.setRequestHeader('Authorization', Deal.getAuth());
				            }
				        }).then(function(data, status, jqxhr) {
				            console.log("RESPONSE:", data);
				            
				            verifyresult = data["usistatus"];
								if(verifyresult == 'Valid' && data["dateOfBirth"] == 'MATCH' && data["familyName"] == 'MATCH' && data["firstName"] == 'MATCH'){
				                    $.ajax({
				                        url:window.verify,
				                        type:'POST',
				                        data:{student_id:_student_id,usi:_usi,_token:_token,verified:1},
				                        success:function(ress){
				                            console.log(ress);
				                        }
				                    });
				                }else{
				                	 $.ajax({
				                        url:window.verify,
				                        type:'POST',
				                        data:{student_id:_student_id,usi:_usi,_token:_token,verified:0},
				                        success:function(ress){
				                            console.log(ress);
				                        }
				                    });
				                }
				                Deal.showResult(formdata, data);
				                $("div#divLoading").removeClass();
				            
				        }, function(data) {
				            $("#responseDataTxt").html(JSON.stringify(data.responseJSON, null, 4));
				        });
		     }
		     

			console.log(formdata);
			
		},
		
		/*=====  End of Event Callbacks  ======*/
		
	}

	// initialize
	Deal.init();
})(window)
