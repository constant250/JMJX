export default (function(window, undefined) {
	let $saveBtn 	= $('a[id=save-item]');
	let $deleteBtn 	= $('a[id=delete-item]');

	return {
		saveBtn		: $saveBtn,
		deleteBtn	: $deleteBtn
	};
})(window);
