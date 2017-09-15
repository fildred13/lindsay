(function () {
	'use strict';

	var docsWithIssues = [
		'41965',
		'3046',
		'2141',
		'2178'
	];

	$('#meg-black-ask-issues-form').submit(function(event){
		
		var docId = $('#document-id').val();

		if ($.inArray(docId, docsWithIssues) > -1) {
			var url = '/teaching-cases/sprandel-inc/client/meg-black/issue-responses/' + docId + '.php'
		} else {
			var url = '/teaching-cases/sprandel-inc/client/meg-black/issue-responses/sorry.php'
		}

		window.open(url, '_self')

		return false
	});

})();