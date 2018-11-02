'use strict';

import axios from 'axios';

let PaymentSched = ((window, undefined) => {
	
	let paidCheckboxesState = {};
	let cacheDOM = {
		paidCheckboxes: document.querySelectorAll('input[type=checkbox]'),
	};

		
	// 
	let nodeListLoop = (array, callback, scope) => {
		for (let i = 0; i < array.length; i++) {
			callback.call(scope, array[i]);
		}
	};

	/**
	 *
	 * save payment sched
	 *
	 */
	let savePaymentSchedule = (data) => {
		let alertbox = alertify.alert('Please Wait!', 'Saving you payment...')
						.setting({
							'closable': false,
							'frameless': true
						});

		return axios.post( window.location.pathname.replace('edit', 'payment-schedule'), data)
			.then( (r) => {
				alertbox.close();
				alertify.alert('Success', 'Payment has been saved.').setting({'closable':true, 'frameless':false});
				return r;
			});

	};

	// 
	let domEvents = () => {
		/**
		 *
		 * Initialize checkbox events
		 *
		 */
		nodeListLoop(cacheDOM.paidCheckboxes, (domItem) => {
			domItem.addEventListener('change', (e) => {
				// current balance
				let currentBalance = window.offerData.balance_due;

				// 
				let paymentSchedDom = {
					// 'dueDateEl': e.target.closest('tr').querySelector('input#due_date'),
					// 'paidDateEl': e.target.closest('tr').querySelector('input#paid_receipts'),
					'dueDateEl': $(e.target.closest('tr').querySelector('input#due_date').parentElement).data('DateTimePicker'),
					'paidDateEl': $(e.target.closest('tr').querySelector('input#paid_receipts').parentElement).data('DateTimePicker'),
					'unpaidEl': e.target.closest('tr').querySelector('input#unpaid'),
					'payableEl': e.target.closest('tr').querySelector('input#payable'),
				};
				
				// kung na checked ang checkbox
				if ( e.target.checked ) {

					if ( paymentSchedDom.dueDateEl.date() == null || paymentSchedDom.paidDateEl.date() == null ) {
						alertify.alert('Warning!', 'Dates should be filled up.');
						e.target.checked = false;
						return false;
					}

					// kung ang gicheck na checkbox kay dili ang first row
					if ( e.target.dataset.index != 1 )  {
						// ang previous input balance na input
						currentBalance = e.target.closest('tr').previousElementSibling.querySelector('input#unpaid').value;

						// kung blank ang field
						if ( '' == currentBalance ) {
							alertify.alert('Warning!', 'You can\'t skip any previous payment/s.').setting({'closable':true, 'frameless':false});
							e.target.checked = false;
							return false;
						}
					}

					// 
					paymentSchedDom.unpaidEl.value = parseFloat(currentBalance).toFixed(2) - parseFloat(paymentSchedDom.payableEl.value.replace(',', '')).toFixed(2);

					// save payment
					let psd = savePaymentSchedule({
						'due_date': paymentSchedDom.dueDateEl.date().format('YYYY-MM-DD'),
						'paid_receipts': paymentSchedDom.paidDateEl.date().format('YYYY-MM-DD'),
						'due_amount': parseFloat(paymentSchedDom.payableEl.value.replace(',', '')),
						'os_balance': parseFloat(paymentSchedDom.unpaidEl.value),
					}).then( (res) => {
						e.target.setAttribute('disabled', '');
					})
					.catch( (error) => {
						alertify.alert('Error', 'Server encountered a problem. Please try again later.').setting({'closable':true, 'frameless':false});
						e.target.checked = false;
					});
				} else {
					paymentSchedDom.unpaidEl.value = '';
				}
			});
		});
	};

	// 
	let init = () => {
		domEvents();
	};

	// 
	return {
		init:init
	}
})(window);

// 
PaymentSched.init();
