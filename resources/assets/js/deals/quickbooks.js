'use strict';

import axios from 'axios';
import alertify from 'alertifyjs';

$(document).ready(function() {

	let Qbo = (function(window, undefined) {

		let cacheDOM = {
			$tabPannel				: $('div[role="tabpanel"][id="quickbooks"]'),
			$qboTabLink				: $('a[href="#quickbooks"][data-toggle="tab"]'),
			$qboActivateBtn 		: $('button[id="qbo-activate-button"]'),
			$qboCreateInvoice		: $('button[id="qbo-invoice-create-button"]'),
			$qboCustomerStatus 		: $('span[id="qbo-customer-status"]'),
			$qboTransactionTable 	: $('table[id="qbo-transaction-table"]'),
			$qboRefreshConnection	: $('button[id="qbo-refresh-connection"]'),
			$qboTransactionTemplate	: $('script[data-template="qbo-transaction"]'),
		};

		/*==================================================
		=            oauth window authorization            =
		==================================================*/
		
		let openAuthWindow = null;

		let oauthWindow = () => {
			openAuthWindow = window.open('about:blank','_blank','location=yes,height=570,width=520,scrollbars=no,status=yes');
		};
		
		/*=====  End of oauth window authorization  ======*/
		


		// append single row to transaction
		let addTransactionRow = (data) => {

			let $template = $(cacheDOM.$qboTransactionTemplate.html());

			for ( let value of data ) {
				$template.children().closest('td[id="qbo-transaction-id"]').text(value.invoiceNum);
				$template.children().closest('td[id="qbo-customer-name"]').text(value.customer);
				$template.children().closest('td[id="qbo-iss-date"]').text(value.txnDate);
				$template.children().closest('td[id="qbo-due-date"]').text(value.dueDate);
				$template.children().closest('td[id="qbo-transaction-status"]').text(value.status);
				$template.children().closest('td[id="qbo-balance-due"]').text(value.balance);
				$template.children().closest('td[id="qbo-amount"]').text(value.totalAmt);
				$template.children().closest('td').find('button[id="qbo-generate-invoice-button"]').attr('data-qbo-inv', value.invoiceNum);
				$template.children().closest('td').find('button[id="qbo-email-invoice-button"]').attr('data-qbo-inv', value.invoiceNum);

				// append
				cacheDOM.$qboTransactionTable.find('tbody').append('<tr class="qbo-transaction-row">' + $template.html() + '</tr>');
			}

		};

		// load qbo data
		let loadQbo = (id) => {

			let invoiceListNotifier = null;

			oauthWindow();

			axios.get('/quickbooks/oauth2/connect')
				.then( (reponse) => {

					openAuthWindow.close();

					// call qbo
					return axios.get(`/quickbooks/customers/${id}`);

				} )
				.then( (response) => {

					invoiceListNotifier = alertify.message('Loading invoice transactions...', 0);

					// remove loading
					cacheDOM.$tabPannel.find('section[class="loading"]').parent().removeClass('loading-wrapper');
					cacheDOM.$tabPannel.find('section[class="loading"]').removeClass('loading');

					if ( ! $.isEmptyObject(response) && response.data.status == 'disabled' ) {
						cacheDOM.$qboCustomerStatus.text('Disabled.');
						cacheDOM.$qboActivateBtn.text('Enable');
						cacheDOM.$qboCreateInvoice.attr('disabled', 'disabled');
						return;
					}

					// disabled activate button
					cacheDOM.$qboActivateBtn.attr('disabled', 'disabled');

					// call for transaction
					return axios.get(`/quickbooks/invoices/${id}`);

				})
				.then( (response) => {

					invoiceListNotifier.dismiss();

					// process data
					if ( typeof response != 'undefined' && ! $.isEmptyObject(response.data) ) {
						// list invoice transactions
						console.log(response.data);
						addTransactionRow(response.data);
						alertify.success('Invoice list loaded.', 5);
						return;
					}

					alertify.message('Invoice list empty.', 5);

				})
				.catch( (error) => {

					if ( error.response.status == 401 ) {
						
						/**
						 *
						 * Open popup window for QBO OAuth Authorization
						 *
						 */
						let authUrl = '/quickbooks/oauth2/callback';
						openAuthWindow.location.href = authUrl;

					} else if ( error.response.status != 401 ) {
						// general error
						alertify.error(`Error: ${error.response.data.message}`, 0);
						openAuthWindow.close();
					}

				});
		};

		// enable qbo for customer
		let activateQbo = () => {
			
			let notifier = alertify.message('Activating Quickbook Data...', 0);

			axios.post('/quickbooks/customers', {
				id: cacheDOM.$qboTabLink.data('qbo')
			})
			.then( (response) => {

				notifier.dismiss();

				if ( ! $.isEmptyObject(response) && response.data.status == 'success') {

					alertify.success(`Customer ${response.data.name} is activated on Quickbooks.`, 0);

					cacheDOM.$qboCreateInvoice.removeAttr('disabled');
					// disabled activate button
					cacheDOM.$qboActivateBtn.attr('disabled', 'disabled');
				}else{

				}

			})
			.catch( (error) => {

				notifier.dismiss();
				alertify.error(`Error: ${error.data.message}`, 0);

			});
		};

		let createInvoice = (id) => {
			
			let msgNotifier = alertify.message('Creating Invoice...', 0);

			axios.post('/quickbooks/invoices', {
				id: id
			})
			.then( (response) => {

				msgNotifier.dismiss();

				if ( ! $.isEmptyObject(response) && response.data.status == 'success' ) {
					// 
					alertify.success('Invoice Created Successfully', 0);
					addTransactionRow(response.data.row);
				}else{
					alertify.error(`Error: ${response.data.message}`, 0);
				}
			})
			.catch((error) => {

				msgNotifier.dismiss();
				console.log(error);
				alertify.error(`Error: ${error.data.message}`, 0);

			});

		};


		// return
		return {
			DOM: cacheDOM,
			load: loadQbo,
			activate: activateQbo,
			createInvoice: createInvoice
		};
	})(window);


	/*==============================
	=            Events            =
	==============================*/
	
	// load quickbook page
	Qbo.DOM.$qboTabLink.on('show.bs.tab', function(e) {
		var tabPannel = $(e.target).attr('aria-controls');
		var id = $(e.target).data('qbo');

		Qbo.load(id);
	});

	// 
	Qbo.DOM.$qboTabLink.on('hide.bs.tab', (e) => {
		Qbo.DOM.$tabPannel.find('div.crm-form-wrapper').addClass('loading-wrapper');
		Qbo.DOM.$tabPannel.find('div.crm-form-wrapper section').addClass('loading');
		Qbo.DOM.$qboTransactionTable.find('tbody').children().remove();
	});

	// reload quickbook page
	Qbo.DOM.$qboRefreshConnection.on('click', (e) => {
		e.preventDefault();
		Qbo.DOM.$tabPannel.find('div.crm-form-wrapper').addClass('loading-wrapper');
		Qbo.DOM.$tabPannel.find('div.crm-form-wrapper section').addClass('loading');

		Qbo.DOM.$qboTabLink.trigger('show.bs.tab');
	});

	// activate customer qbo
	Qbo.DOM.$qboActivateBtn.on('click', (e) => {
		e.preventDefault();
		Qbo.activate();
	});

	Qbo.DOM.$qboCreateInvoice.on('click', (e) => {
		e.preventDefault();
		Qbo.createInvoice(Qbo.DOM.$qboTabLink.data('qbo'));
	});

	Qbo.DOM.$qboTransactionTable.on('click', 'button[id="qbo-generate-invoice-button"]', (e) => {
		let docId = $(e.target).data('qbo-inv');
		// window.location.href = `${window.location.origin}/quickbooks/invoice/${docId}/pdf`;

		// alertify.alert('Info', 'Disabled for the mean time.');
	});

	Qbo.DOM.$qboTransactionTable.on('click', 'button[id=qbo-email-invoice-button]', (e) => {
		let docId = $(e.target).data('qbo-inv');
		let dealId = Qbo.DOM.$qboTabLink.data('qbo');

		axios.post(`/quickbooks/invoice/${docId}/email/${dealId}`)
			.then( (response) => {
				console.log(response.data);
			})
			.catch( (error) => {
				console.log(error.response);
			});
	});
	/*=====  End of Events  ======*/
	
});