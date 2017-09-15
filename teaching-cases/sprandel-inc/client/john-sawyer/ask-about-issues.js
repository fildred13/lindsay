(function () {
	'use strict';

	var docsWithIssues = [
		'41786'
	];

	$('#john-sawyer-ask-issues-form').submit(function(event){
		
		var docId = $('#document-id').val();

		if ($.inArray(docId, docsWithIssues) > -1) {
			var url = '/teaching-cases/sprandel-inc/client/john-sawyer/issue-responses/' + docId + '.php'
		} else {
			var url = '/teaching-cases/sprandel-inc/client/john-sawyer/issue-responses/sorry.php'
		}

		window.open(url, '_self')

		return false
	});

})();