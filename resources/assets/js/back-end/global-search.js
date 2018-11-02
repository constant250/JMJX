// import $ from 'jquery';
// import omniSearch from 'omni-search/dist/js/omni.search.js';
import key from 'omni-search/demo/vendor/keymaster-1.6.3/keymaster.js';
import axios from 'axios';
require('omni-search/dist/js/omni.search.js');
// require('omni-search/demo/vendor/keymaster-1.6.3/keymaster.js');

		// Call omni-search on an element
		var $search = $('body').omniSearch();

		var ALERT_TYPE = 'ALERT',
			NAVIGATE_TO_URL_TYPE = 'NAVIGATE_TO_URL',
			REPLACE_MSG_PLACEHOLDER_TYPE = 'REPLACE_MSG_PLACEHOLDER_TYPE';

		var allData = null;

		/*axios.get('/global-search')
		.then( response => {
			// console.log(response.data);
			allData = response.data;
			console.log(allData);
		})
		.catch( error => {
			// console.log(error.response);
			console.log(error.message);
			// console.log(error);
		});*/

		$.ajax({
	        'async': false,
	        'type': "GET",
	        'url': "/global-search",
	        'success': function (data) {
	            allData = data;
	        }
	    });
		// console.log(allData);
		// Create a list of search items
		var searchItems = allData;

		// var searchItems = [
		// 	{
		// 		title: "Fork me on GitHub",
		// 		type: NAVIGATE_TO_URL_TYPE,
		// 		searchElementImgUrl: 'https://assets-cdn.github.com/pinned-octocat.svg'
		// 	},
		// 	{
		// 		title: "Important action change placeholder text",
		// 		type: REPLACE_MSG_PLACEHOLDER_TYPE,
		// 		searchElementImgUrl: 'http://pedrocatre.com/omni-search/demo/assets/gear.png'
		// 	},
		// 	{
		// 		title: "Trigger alert",
		// 		type: ALERT_TYPE
		// 	}
		// ];

		// Create a callback function that gets triggered when a search item is clicked or when it is selected
		// and a user clicks Enter
		var callback = function (activatedItemData) {
			switch (activatedItemData.type) {
				case 'REPLACE_MSG_PLACEHOLDER_TYPE':
					// $('.msg-placeholder').text(activatedItemData.title);
					break;
				case 'NAVIGATE_TO_URL_TYPE':
					window.location.href = activatedItemData.url;
					break;
				case 'ALERT_TYPE':
					alert('Activated item data ' + activatedItemData.title);
					break;
				default:
					alert('Unknown type');
			}

		};

		// On keyboard shortcut
		key('⌘+⇧+y', function() {
			openOmniSearch()
		});

		// On click
		$('#global-search-input, #global-search-btn').click(function () {
			openOmniSearch();
		});

		function openOmniSearch() {
			// console.log('open omni-search');
			$search.omniSearch('open', searchItems, callback);
		}


		// $('.omni-search input[type="text"]').keypress(function(e){
		$('.omni-search input[type="text"]').bind("keyup", function(e) {

			var search = $(this).val();

			if (e.which <= 90 && e.which >= 48 || e.which == 8){
				
				if(search.length >= 3){

					axios.get('/global-search?search='+search)
					.then( response => {
						// console.log(response.data);
						$search.omniSearch('open', response.data, callback);
					})
					.catch( error => {
						// console.log(error.response);
						console.log(error.message);
						console.log(error);
					});

					/*$.ajax({
				        'async': false,
				        'type': "GET",
				        'url': "/global-search?search="+search,
				        'success': function (data) {
				            $search.omniSearch('open', JSON.parse(data), callback);
				        },
				        'error': function () {
				        	console.log('no such data available');
				        }
				    });*/
				}	
			}
			
		});

