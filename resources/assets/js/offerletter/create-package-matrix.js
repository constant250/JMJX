'use strict';

import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';

let PackageMatrix = ((window, undefined) => {

	let cacheDom = {
		form: document.querySelector('form#package-matrix-form')
	};

	// 
	let domEvents = () => {
		toolbar.saveBtn.on('click', () => {
			$(cacheDom.form).submit();
		})
	};

	// 
	let init = () => {
		domEvents();
	};

	// 
	return {
		init: init
	};
})(window);

// 
PackageMatrix.init();
