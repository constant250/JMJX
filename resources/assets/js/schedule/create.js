import toolbar from '../back-end/form-toolbar.js';

(function(window, undefined) {
  let Schedule = {
    init: function() {
      /*----------  initialize DOM Elements  ----------*/
      this._cacheDom();

      /*----------  bind DOM element events  ----------*/
      this._bindDomEvents();
    },
    _cacheDom: function() {
      this.$form = $('form.add-schedule-form');
      this.$indexDeleteBtn = $('a[id=index-item-delete]');
      this.$deleteForm = $('form[id=delete-form-index]');
    },
    _bindDomEvents: function() {

      // store form
      toolbar.saveBtn.on('click', this._storeScheduleForm.bind(this));

      // remove item in index page action menu
      this.$indexDeleteBtn.on('click', this._deleteItemInIndex.bind(this));
    },

    /*=======================================
    =            Event Callbacks            =
    =======================================*/
    
    /**
     *
     * store form data
     *
     */
    _storeScheduleForm: function(e) {
      // alert('test');
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
    }
    
    /*=====  End of Event Callbacks  ======*/
    
  }

  // initialize class
  Schedule.init();
})(window)