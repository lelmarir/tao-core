$(document).ready(function() {
	// API instanciation to be ready for template
	// injection.
	var apiInstance = new TaoInstall();
	apiInstance.frameId = 'mainFrame';
	apiInstance.setTemplate('step_1');

	// feedback popup show/hide
	$('#suppportTab').bind('click', openSupportTab);
	$('#supportPopupClose').bind('click', closeSupportTab);
});

function openSupportTab(){
	
	$('#supportTab').unbind('click');
	
	// We display the first state of the support frame (loading...)	   
	$('#mainSupportPopup').show();
	var opts = {
		lines: 9, // The number of lines to draw
		length: 3, // The length of each line
		width: 2, // The line thickness
		radius: 4, // The radius of the inner circle
		rotate: 0, // The rotation offset
		color: '#000', // #rgb or #rrggbb
		speed: 1.9, // Rounds per second
		trail: 60, // Afterglow percentage
		shadow: false, // Whether to render a shadow
		hwaccel: false, // Whether to use hardware acceleration
		className: 'spinner', // The CSS class to assign to the spinner
		zIndex: 2e9, // The z-index (defaults to 2000000000)
		top: -2,
		left: 0
	};
	
	var $supportLoading = $('<div id="supportLoading"></div>').css('display', 'block');
	$('#supportPopupContent').append($supportLoading);
	var spinner = new Spinner(opts).spin($supportLoading[0]);
	$supportLoading.append('<span>Loading from the World Wide Web...</span>');
	
	setTimeout(function(){ // Fake delay for user experience.
		
		var $iframe = $('<iframe/>');
		$iframe.attr('name', 'supportFrame')
			   .attr('id', 'supportFrameId')
			   .attr('alt', 'Support frame')
			   .attr('frameborder', 0)
			   .attr('scrolling', 'no');
		
		// bind events.
		if (jQuery.browser.msie)
		{
			$iframe[0].onreadystatechange = function(){	
				if(this.readyState == 'complete'){
					showRemoteSupport(spinner);
				}
			};
		}
		else
		{
			// Other great browsers.		
			$iframe[0].onload = function(){
				showRemoteSupport(spinner);	
			};
		}
		
		$iframe.attr('src', 'http://forge.tao.lu/support/installation');
		$('#supportPopupContent').append($iframe);
		
	}, 500);
}

function closeSupportTab(){
	$('#mainSupportPopup').hide();
	$('#supportLoading, #supportFrameId').remove();
}

function showRemoteSupport(spinner){
		spinner.stop();
		$('#supportLoading').remove();
		$('#supportFrameId').css('display', 'block');
}