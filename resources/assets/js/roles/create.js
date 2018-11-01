import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';

(function(window, undefined) {
	let Roles = {
		/**
		 *
		 * initialize class
		 *
		 */
		init: function() {
			/*----------  initialize DOM Elements  ----------*/
			this._cacheDom();

			/*----------  bind DOM element events  ----------*/
			this._bindDomEvents();

			this._autoload();
		},

		/**
		 *
		 * Register DOM Elements
		 *
		 */
		_cacheDom: function() {
			// form DOM
			this.$roleName = $('input[name=name]');
			this.$slugName = $('input[name=slug]');
			this.$roleLevel = $('select[id=role-level]');

			// index page dom
			this.$indexDeleteBtn = $('a[id=index-item-delete]');

			// form
			this.$form = $('form.add-role-form');
			this.$deleteForm = $('form[id=delete-form-index]');

			// table
			this.$aclTable = $('table[id=acl-table]');
			this.$rolesListTable = $('table[id=roles-table]');
			this.$checkbox = this.$aclTable.find('input:checkbox').not(':disabled');
			this.$chkbxSelectorNone = $('a[id=none-chkbx]');
			this.$chkbxSelectorAll = $('a[id=all-chkbx]');
		},

		/**
		 *
		 * Register DOM Events
		 *
		 */
		_bindDomEvents: function() {
			// create sluggable text for role name
			this.$roleName.on('focusout', this._roleSlugableEvent.bind(this));

			// save form
			toolbar.saveBtn.on('click', this._storeRoleForm.bind(this));

			// remove item in index page action menu
			this.$indexDeleteBtn.on('click', this._deleteItemInIndex.bind(this));

			/*===================================================
			=            ACL Table checkbox selector            =
			===================================================*/
			
			// select none
			this.$chkbxSelectorNone.on('click', this._aclChkbxSelectNone.bind(this));

			// select all
			this.$chkbxSelectorAll.on('click', this._aclChkbxSelectAll.bind(this));

			/*=====  End of ACL Table checkbox selector  ======*/
			
		},

		/*=======================================
		=            Event Callbacks            =
		=======================================*/
		
		/**
		 *
		 * sluggable event callback
		 *
		 */
		_roleSlugableEvent: function(e) {
			this.$roleName.val( $.trim( this.$roleName.val() ) )
			this.$slugName.val( this.$roleName.val().replace(/\s+/g, '.').toLowerCase() );
		},
		
		/**
		 *
		 * store role form
		 *
		 */
		_storeRoleForm: function(e) {
			if ( ! this.$checkbox.is(':checked') ) {
				alertify.confirm('No permission/s has been checked. Do you want to continue?', function() {
					Roles.$form.submit();					
				});

				return false;
			}

			// default
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
		 * ACL Table checkbox selector None
		 *
		 */
		_aclChkbxSelectNone: function() {
			this.$checkbox.prop('checked', false);
		},

		/**
		 *
		 * ACL Table checkbox selector All
		 *
		 */
		_aclChkbxSelectAll: function() {
			this.$checkbox.prop('checked', true);
		},
		
		/*=====  End of Event Callbacks  ======*/
		
		/*==================================
		=            DataTables            =
		==================================*/
		
		_dataTablesInit: function() {
			
			// destroy the first instance of datatable
			if ( $.fn.dataTable.isDataTable( '.custom-datatable' ) ) {
			    var DT_INSTANCE = $('.custom-datatable').DataTable();
			    DT_INSTANCE.destroy();
			}

			// acl table
			this.$aclTable.DataTable({
				"info":     false,
				"paging":   false,
				"bFilter":  false,
				"ordering": false,
			});

			this.$rolesListTable.DataTable({
				"info":     true,
				"paging":   true,
				"bFilter":  false,
				"ordering": false,
			});

		},
		
		/*=====  End of DataTables  ======*/

		/**
		 *
		 * for instant api/library initializations
		 *
		 */
		_autoload: function() {
			// 
			this.$roleLevel.selectize({
			    plugins: ['remove_button'],
			    create: false,
			    sortField: 'text',
			    persist: false,
			});

			// datatable
			this._dataTablesInit();
		}
	}

	Roles.init();
})(window)