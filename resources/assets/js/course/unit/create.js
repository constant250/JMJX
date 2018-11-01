import toolbar from '../../back-end/form-toolbar.js';

( function(window, undefined) {
	let Unit = {
		init: function() {
			/*----------  initialize DOM Elements  ----------*/
			this._cacheDom();

			/*----------  autoload functions  ----------*/
			this._autoload();

			/*----------  bind DOM element events  ----------*/
			this._bindDomEvents();

		},

		_cacheDom: function() {
			// form selections
			this.$unitType = $('#unit-type');
			this.$trainingMethod = $('#training-method');
			this.$assessmentMethod = $('#assessment-method');
			this.$subjEducField = $('#subject-education-field');

			// form
			this.$form = $('form.add-units-form');
			this.$deleteForm = $('form[id=delete-form-index]');

			this.$indexDeleteBtn = $('a[id=index-item-delete]');

			// extra unit
			this.$isExtraUnit  		= $('input[id=extra-unit]');
			this.$extraUnitFormDiv 	= $('div[id=is-extra-unit]');
			this.$extraUnitContainer= $('div[id=extra-unit-container]');
		},

		_bindDomEvents: function() {
			// store form
			toolbar.saveBtn.on( 'click', this._storeUnitForm.bind(this));

			// remove item in index page action menu
			this.$indexDeleteBtn.on('click', this._deleteItemInIndex.bind(this));

			this.selectizeUnitType.on('change', this._unitTypeChange.bind(this));

			this.$isExtraUnit.on('change', this._showExtraUnitDiv.bind(this));
		},

		/*=======================================
		=            Event Callbacks            =
		=======================================*/
		
		/**
		 *
		 * store form data
		 *
		 */
		_storeUnitForm: function(e) {
			this.$form.submit();
		},

		/**
		 *
		 * remove item in index page
		 *
		 */
		_deleteItemInIndex: function(e) {
			let url = this.$deleteForm.attr('action');

			this.$deleteForm.attr('action', url +'/'+ e.target.getAttribute('data-item'));

			this.$deleteForm.submit();
		},

		_unitTypeChange: function(e) {

			let instanceUnitType = this.selectizeUnitType[0].selectize;

			if ( instanceUnitType.getValue() == 'elective' ) {
				$(e.target).closest('div').attr('class', 'col-md-6');
				this.$extraUnitFormDiv.removeClass('hidden');
			} else {
				$(e.target).closest('div').attr('class', 'col-md-12');
				this.$extraUnitFormDiv.addClass('hidden');
			}
		},

		_showExtraUnitDiv: function(e) {
			if ( $(e.target).is(':checked') ) {
				this.$extraUnitContainer.removeClass('hidden');
			} else {
				this.$extraUnitContainer.addClass('hidden');
			}
		},
		
		/*=====  End of Event Callbacks  ======*/
		

		_autoload: function() {
			this.selectizeUnitType = this.$unitType.selectize({
			    plugins: ['remove_button'],
			    create: false,
			    sortField: 'text',
			    persist: false,
			});

			this.$trainingMethod.selectize({
			    plugins: ['remove_button'],
			    create: false,
			    sortField: 'text',
			    persist: false,
			});

			this.$assessmentMethod.selectize({
			    plugins: ['remove_button'],
			    maxItems: null,
			    valueField: 'id',
			    labelField: 'description',
			    searchField: 'description',
			    options: window.assessmentMethods,
			    create: false
			});

			this.$subjEducField.selectize({
			    plugins: ['remove_button'],
			    create: false,
			    sortField: 'text',
			    persist: false,
			});
		}

	}

	// initialize class
	Unit.init();
})(window)