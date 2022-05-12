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

/* Prevent errors, If these variables are missing. */
if (typeof packageIsEnabled === 'undefined') {
	var packageIsEnabled = false;
}
if (typeof editLabel === 'undefined') {
	var editLabel = 'Edit';
}

$(document).ready(function () {
	
	/* Select a category */
	getCategories(siteUrl, languageCode);
	$(document).on('click', '.cat-link', function (e) {
		e.preventDefault(); /* prevents submit or reload */
		
		getCategories(siteUrl, languageCode, this);
	});
	
});

/**
 * Get subcategories buffer and/or Append selected category
 *
 * @param siteUrl
 * @param languageCode
 * @param jsThis
 * @returns {boolean}
 */
function getCategories(siteUrl, languageCode, jsThis = null) {
	let csrfToken = $('input[name=_token]').val();
	
	let catId;
	if (!isDefined(jsThis) || jsThis === null) {
		catId = $('#categoryId').val();
		if (isEmpty(catId)) {
			catId = 0;
		}
	} else {
		let thisEl = $(jsThis);
		
		catId = thisEl.data('id');
		if (isEmpty(catId)) {
			catId = 0;
		}
		
		/*
		 * Optimize the category selection
		 * by preventing AJAX request to append the selection
		 */
		let hasChildren = thisEl.data('has-children');
		if (isDefined(hasChildren) && hasChildren == 0) {
			let catName = thisEl.text();
			let parentId = thisEl.data('parent-id');
			
			let linkText = '<i class="far fa-edit"></i> ' + editLabel;
			let outputHtml = catName + '[ <a href="#browseCategories" data-bs-toggle="modal" class="cat-link" data-id="' + parentId + '" >' + linkText + '</a> ]';
			
			return appendSelectedCategory(catId, outputHtml);
		}
	}
	
	/* Get Request URL */
	let url = siteUrl + '/ajax/category/select-category';
	
	/* AJAX Call */
	let ajax = $.ajax({
		method: 'POST',
		url: url,
		data: {
			'_token': csrfToken,
			'catId': catId
		},
		beforeSend: function() {
			let spinner = '<i class="spinner-border"></i>';
			$('#selectCats').addClass('text-center').html(spinner);
		}
	});
	ajax.done(function (xhr) {
		if (!isDefined(xhr.html) || !isDefined(xhr.hasChildren)) {
			return false;
		}
		
		let selectCatsEl = $('#selectCats');
		
		/* Get & append the category's children */
		if (xhr.hasChildren) {
			selectCatsEl.removeClass('text-center');
			selectCatsEl.html(xhr.html);
		} else {
			/*
			 * Section to append default category field info
			 * or to append selected category during form loading.
			 * Not intervene when the onclick event is fired.
			 */
			if (!isDefined(xhr.category) || !isDefined(xhr.category.id) || !isDefined(xhr.html)) {
				return false;
			}
			
			return appendSelectedCategory(xhr.category.id, xhr.html);
		}
	});
	ajax.fail(function(xhr) {
		let message = getJqueryAjaxError(xhr);
		if (message !== null) {
			jsAlert(message, 'error', false, true);
			
			/* Close the Modal */
			let modalEl = document.querySelector('#browseCategories');
			if (typeof modalEl !== 'undefined' && modalEl !== null) {
				let modalObj = bootstrap.Modal.getInstance(modalEl);
				if (modalObj !== null) {
					modalObj.hide();
				}
			}
		}
	});
}

/**
 * Append the selected category to its field in the form
 *
 * @param catId
 * @param outputHtml
 * @returns {boolean}
 */
function appendSelectedCategory(catId, outputHtml) {
	if (!isDefined(catId) || !isDefined(outputHtml)) {
		return false;
	}
	
	try {
		/* Select the category & append it */
		$('#catsContainer').html(outputHtml);
		
		/* Save data in hidden field */
		$('#categoryId').val(catId);
		
		/* Close the Modal */
		let modalEl = document.querySelector('#browseCategories');
		if (isDefined(modalEl) && modalEl !== null) {
			let modalObj = bootstrap.Modal.getInstance(modalEl);
			if (modalObj !== null) {
				modalObj.hide();
			}
		}
	} catch (e) {
		console.log(e);
	}
	
	return false;
}
