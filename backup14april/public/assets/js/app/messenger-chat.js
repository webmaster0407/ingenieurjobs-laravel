/*
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

if (typeof updateChatErrorMessage === 'undefined') {
	var updateChatErrorMessage = 'The chat update could not be done.';
}

var autoScrollEnabled = true;

$(function () {
	var chatTextField = $('#body');
	var chatFileFiled = $('#addFile');
	
	setInterval(scrollChatHistoryToBottom, 2000);
	$('#messageChatHistory').scroll(function() {
		autoScrollEnabled = false;
	});
	chatTextField.focus();
	
	/* Auto-Refresh Chat Messages (1000 ms * X mn) */
	if (typeof timerNewMessagesChecking !== 'undefined') {
		if (timerNewMessagesChecking > 0) {
			var showNewMsgTimer = setInterval(function () {
				getMessages(window.location.href, true);
			}, timerNewMessagesChecking);
		}
	}
	
	/* AJAX data loading & pagination */
	$(document).on('click', '#linksMessages a', function (e) {
		e.preventDefault();
		
		/* Stop New Messages Auto-Display */
		if (typeof showNewMsgTimer !== 'undefined') {
			clearInterval(showNewMsgTimer);
		}
		
		var url = $(this).attr('href');
		getMessages(url, false, false);
		
		return false;
	});
	
	/* Submit New Chat Message */
	$('#chatForm').on('submit', function (e) {
		e.preventDefault();
		
		updateChat(this);
		
		/* Fast chat fields clearing */
		chatTextField.val('');
		clearFileInput(chatFileFiled);
		
		return false;
	});
	
	/* Watch textarea for key presses */
	chatTextField.keydown(function (e) {
		var key = e.which;
		
		/* All keys including return */
		if (key >= 33) {
			var maxLength = $(this).attr('maxlength');
			var length = this.value.length;
			
			/* Don't allow new content if length is maxed out */
			if (length >= maxLength) {
				e.preventDefault();
			}
		}
	});
	
	/* Watch textarea for release of key press */
	chatTextField.keyup(function (e) {
		/* Submit the form when ENTER key is pressed without the SHIFT key */
		if (!e.shiftKey && e.keyCode === 13) {
			var text = $(this).val();
			var maxLength = $(this).attr('maxlength');
			var length = text.length;
			
			/* Send */
			if (length <= maxLength + 1) {
				$('#chatForm').submit();
				$(this).val('');
			} else {
				$(this).val(text.substring(0, maxLength));
			}
		}
	});
});

/* Function of AJAX data loading & pagination */
function getMessages(url, firstLoading = false, canBeAutoScroll = true) {
	let ajax = $.ajax({
		url: url
	});
	ajax.done(function (xhr) {
		$('#successMsg').empty().hide();
		$('#errorMsg').empty().hide();
		
		if (typeof xhr.messages === 'undefined' || typeof xhr.links === 'undefined') {
			return false;
		}
		
		if (firstLoading === true) {
			$('#messageChatHistory').empty().html('<div id="linksMessages" class="text-center"></div>');
		}
		
		$('#linksMessages').html(xhr.links).after(xhr.messages);
		
		autoScrollEnabled = canBeAutoScroll;
	});
	ajax.fail(function () {
		jsAlert(loadingErrorMessage, 'error', false);
	});
}

function updateChat(formElement) {
	var formUrl = $(formElement).attr('action');
	var formData = new FormData(formElement);
	
	let ajax = $.ajax({
		method: 'POST',
		url: formUrl,
		data: formData,
		cache: false,
		contentType: false,
		processData: false
	});
	ajax.done(function (xhr) {
		
		getMessages(formUrl, true);
		
		/* Chat fields clearing */
		$('#body').val('').focus();
		clearFileInput($('#addFile'));
		
	});
	ajax.fail(function (xhr) {
		$('#successMsg').empty().hide();
		var errorMsg = $('#errorMsg');
		errorMsg.empty();
		
		if (xhr.responseJSON) {
			var appended = false;
			
			if (xhr.responseJSON.message) {
				errorMsg.append(xhr.responseJSON.message);
				appended = true;
			}
			
			if (xhr.responseJSON.data) {
				if (xhr.responseJSON.data.body) {
					if (Array.isArray(xhr.responseJSON.data.body)) {
						errorMsg.append('<ul class="list list-check"></ul>');
						$.each(xhr.responseJSON.data.body, function (index, item) {
							errorMsg.find('ul').append('<li>' + item + '</li>');
						});
						appended = true;
					}
				}
			}
			
			if (appended) {
				errorMsg.show();
			} else {
				errorMsg.html(updateChatErrorMessage).show();
			}
		} else {
			errorMsg.html(updateChatErrorMessage).show();
		}
	});
}

/* Auto-Scroll to Messages History to Bottom */
function scrollChatHistoryToBottom() {
	if (autoScrollEnabled) {
		/* Pure JS version */
		/*
		var el = document.getElementById('messageChatHistory');
		el.scrollTop = el.scrollHeight;
		*/
		
		/* jQuery version */
		var el = $('#messageChatHistory');
		/* el.scrollTop(el[0].scrollHeight);           /* Without animation */
		el.animate({ scrollTop: el[0].scrollHeight }); /* With animation */
	}
}

/* Clear the File Input */
function clearFileInput(input) {
	input.replaceWith(input.val('').clone(true));
}
