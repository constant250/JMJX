import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';

var activeTab = null

$('#dlvry-loc-country-id').selectize({
    plugins: ['remove_button'],
    create: false,
    sortField: 'text',
    persist: false
});


$('a[id=save-item]').on('click', function() {
    var form = $('div#delivery-location').find('form');
    form.submit();
});

// get active tab

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    activeTab = $(e.target).attr('aria-controls');
    if(activeTab == "delivery_location") {
        $("#save-config").css('display','none');
    }
    else {
        $("#save-config").css('display','block');
    }
})

$('a[id=save-config]').on('click', function() {
    var form = $('div#company_settings').find('form');
    // console.log(form[0]);
    form[0].submit();
});

$('a[id=index-item-delete]').on('click', function() {
    let url = $('#delete-form-index').attr('action');
    var $deleteForm = $('form[id=delete-form-index]');
    $deleteForm.attr('action', url +'/'+ this.getAttribute('data-item'));
    $deleteForm.submit();
});

/** Copied from Deals.js **/
(function(window, undefined) {
    var DeliveryLocation = {
        init: function() {
            /*----------  initialize DOM Elements  ----------*/
            this._cacheDom();

            /*----------  autoload functions  ----------*/
            this._autoload();

            /*----------  bind DOM element events  ----------*/
            this._bindDomEvents();
        },
        _cacheDom: function() {

            // csrf token
            this.$formToken = $('input[name=_token]');

            this.$form = $('form[id=company-settings]');

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

            /*=====  End of Personal Info Section  ======*/

        },
        _bindDomEvents: function() {

            // submit form
            toolbar.saveBtn.on('click', this._saveFormEvent.bind(this));

            // on select state change
            this.selectizeState.on('change', this._stateChange.bind(this));

            // on select suburb change
            this.selectizeSuburb.on('change', this._suburbChange.bind(this));

            // on select locality change
            // this.selectizeLocality.on('change', this._localityChange.bind(this));

        },
        _autoload: function() {


            /*=================================
             =            Selectize            =
             =================================*/


            // locality
            this.selectizeLocality = this.$locality.selectize({
                plugins: ['remove_button'],
                create: false,
                maxItems: 1,
                valueField: 'id',
                searchField: ['loc_name'],
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
                }
            });

            // suburb
            this.selectizeSuburb = this.$suburb.selectize({
                plugins: ['remove_button'],
                create: false,
                maxItems: 1,
                valueField: 'id',
                searchField: ['post_suburb', 'postcode', 'state'],
                options: window.post_suburbs,
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
                }
            });

            // state
            this.selectizeState = this.$state.selectize({
                plugins: ['remove_button'],
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
                }
            });

        },

        /**
         *
         * Event Callbacks
         *
         */
        _saveFormEvent: function(e) {
            alert('wew');
            console.log(this.$form);
            // this.$form.submit();
        },

        /*=======================================
         =            Event Callbacks            =
         =======================================*/


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
            suburbData = $.map(window.post_suburbs, function(item) {
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
            $.map(window.post_suburbs, function(item) {
                if ( instanceOfSuburb.getValue() == item.id ) {
                    DeliveryLocation.$postcode.val(item.postcode);
                    return false;
                }
            });
        }

        /*=====  End of Event Callbacks  ======*/

    }

    // initialize
    DeliveryLocation.init();
})(window)
