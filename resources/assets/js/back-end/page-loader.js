window.onload = () => {
	$('div.page-loader').fadeOut('slow', function() {
			$('div.page-loader').removeClass('page-loader');
		/*setTimeout( () => {
		}, 3000);*/
	});
}