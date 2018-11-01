import toolbar from '../back-end/form-toolbar.js';

(function(window, undefined) {
	let Course = {
		init: function() {
			/*----------  initialize DOM Elements  ----------*/
			this._cacheDom();

			/*----------  bind DOM element events  ----------*/
			this._bindDomEvents();
		},
		_cacheDom: function() {
			this.$form = $('form.add-course-form');
			this.$indexDeleteBtn = $('a[id=index-item-delete]');
			this.$deleteForm = $('form[id=delete-form-index]');

			/**/
			// add other fee button
			this.$addCourseFeeBtn = $('button.addcoursefee-btn');

			// add other fee button
			this.$addOtherFeeBtn = $('button.addotherfee-btn');

			// course fee container
			this.$courseFeeContainer = $('div#course-fee-container');

			// other fee container
			this.$otherFeeContainer = $('div#other-fee-container');
		},
		_bindDomEvents: function() {

			// store form
			toolbar.saveBtn.on('click', this._storeCourseForm.bind(this));

			// remove item in index page action menu
			this.$indexDeleteBtn.on('click', this._deleteItemInIndex.bind(this));

			// append other fee items
			this.$addOtherFeeBtn.on('click', this._appendOtherFees.bind(this));

			// append other fee items
			this.$addCourseFeeBtn.on('click', this._appendCourseFees.bind(this));

			// remove course fee item
			this.$courseFeeContainer.on('click', 'button#remove-course-fee', this._removeCourseFees.bind(this));

			// remove other fee item
			this.$otherFeeContainer.on('click', 'button#remove-other-fee', this._removeOtherFees.bind(this));
		},

		/*=======================================
		=            Event Callbacks            =
		=======================================*/
		
		/**
		 *
		 * store form data
		 *
		 */
		_storeCourseForm: function(e) {
			this.$form.submit();
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
		},

		/**
		 *
		 * append dom element for course fees
		 * 
		 */
		_appendCourseFees: function(e) {

			this.$courseFeeContainer.append('\
				<div id="course-fee-item" class="row">\
				    <div class="col-md-2">\
				        <label for="other_fee">Concessional Fee</label>\
				        <input type="text" class="form-control" name="course_fees[others][name][]">\
				    </div>\
				    <div class="col-md-2">\
				        <label for="other_fee">Non Concessional Fee</label>\
				        <input type="text" class="form-control" name="fees[others][value][]">\
				    </div>\
				    <div class="col-md-2">\
				        <label for="other_fee">Full Course Fee</label>\
				        <input type="text" class="form-control" name="fees[others][value][]">\
				    </div>\
				    <div class="col-md-5">\
				        <label for="other_fee">location</label>\
				        <input type="number" class="form-control" name="fees[others][value][]">\
				    </div>\
				    <div class="col-md-1">\
				        &nbsp;&nbsp;&nbsp;&nbsp;\
				        <button type="button" id="remove-other-fee" class="btn btn-danger"><i class="fa fa-times"></i></button>\
				    </div>\
				    <div class="clearfix"></div>\
				</div>\
			');
		},
		
		/**
		 *
		 * append dom element for other fees
		 * 
		 */
		_appendOtherFees: function(e) {
			this.$otherFeeContainer.append('\
				<div id="other-fee-item" class="row">\
				    <div class="col-md-5">\
				        <label for="other_fee">Fee Name</label>\
				        <input type="text" class="form-control" name="fees[others][name][]">\
				    </div>\
				    <div class="col-md-6">\
				        <label for="other_fee">Fee Value</label>\
				        <input type="text" class="form-control" name="fees[others][value][]">\
				    </div>\
				    <div class="col-md-1">\
				        &nbsp;&nbsp;&nbsp;&nbsp;\
				        <button type="button" id="remove-other-fee" class="btn btn-danger"><i class="fa fa-times"></i></button>\
				    </div>\
				    <div class="clearfix"></div>\
				</div>\
			');
		},

		/**
		 *
		 * Remove other fees item
		 *
		 */
		_removeOtherFees: function(e) {
			e.target.closest('div#other-fee-item').remove();
		}
		
		/*=====  End of Event Callbacks  ======*/
		
	}

	// initialize class
	Course.init();
})(window)