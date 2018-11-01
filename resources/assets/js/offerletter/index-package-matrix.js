'use strict';

let PackageMatrix = ((window, undefined) => {

	// 
	let cacheDOM = {
		deleteBtn: document.querySelector('a#delete-package')
	};

	let domEvents = () => {
		cacheDOM.deleteBtn.addEventListener('click', (e) => {
			console.log(e);
		});
	};

	// 
	let init = () => {
		// 
		domEvents();
	};

	// 
	return {
		init: init
	};
})(window);

// 
PackageMatrix.init();
