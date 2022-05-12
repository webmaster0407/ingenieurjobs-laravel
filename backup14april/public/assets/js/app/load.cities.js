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

if (typeof loadingWd === 'undefined') {
	var loadingWd = 'Loading...';
}

$(document).ready(function () {
	
	if (modalDefaultAdminCode !== 0 && modalDefaultAdminCode !== '') {
		changeCity(countryCode, modalDefaultAdminCode);
	}
	$('#modalAdminField').change(function () {
		changeCity(countryCode, $(this).val());
	});
	
});

function changeCity(countryCode, modalDefaultAdminCode) {
	/* Check required variables */
	if (typeof languageCode === 'undefined' || typeof countryCode === 'undefined' || typeof modalDefaultAdminCode === 'undefined') {
		return false;
	}
	
	let url = siteUrl + '/ajax/countries/' + strToLower(countryCode) + '/admin1/cities';
	let adminCitiesEl = $('#adminCities');
	
	let ajax = $.ajax({
		method: 'POST',
		url: url,
		data: {
			'languageCode': languageCode,
			'adminCode': modalDefaultAdminCode,
			'currSearch': $('#currSearch').val(),
			'_token': $('input[name=_token]').val()
		},
		beforeSend: function() {
			let spinner = '<div class="d-flex align-items-center">\n' +
				'  <strong>' + loadingWd + '</strong>\n' +
				'  <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>\n' +
				'</div>';
			adminCitiesEl.html(spinner);
		}
	});
	ajax.done(function (xhr) {
		if (typeof xhr.adminCode == 'undefined' || typeof xhr.adminName == 'undefined' || typeof xhr.adminCities == 'undefined') {
			adminCitiesEl.empty();
			
			return false;
		}
		
		if (!isEmpty(xhr.adminName)) {
			$('#selectedAdmin strong').html(xhr.adminName);
		}
		$('#modalAdminField').val(xhr.adminCode).prop('selected');
		adminCitiesEl.html(xhr.adminCities);
		
		/* Enable the tooltip */
		/* To prevent the tooltip in bootstrap doesn't work after ajax, use selector on exist element like body */
		let bodyEl = $('body');
		bodyEl.tooltip({selector: '[data-bs-toggle="tooltip"]'});
	});
	ajax.fail(function(xhr) {
		adminCitiesEl.empty();
		
		let message = getJqueryAjaxError(xhr);
		if (message !== null) {
			jsAlert(message, 'error', false, true);
			
			/* Close the Modal */
			let modalEl = document.querySelector('#browseAdminCities');
			if (typeof modalEl !== 'undefined' && modalEl !== null) {
				let modalObj = bootstrap.Modal.getInstance(modalEl);
				if (modalObj !== null) {
					modalObj.hide();
				}
			}
		}
	});
}