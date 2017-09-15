(function () {
	'use strict';

	var docsWithIssues = [
		'3046'
	];

	$('#kate-burke-ask-issues-form').submit(function(event){
		
		var docId = $('#document-id').val();

		if ($.inArray(docId, docsWithIssues) > -1) {
			var url = '/teaching-cases/sprandel-inc/client/kate-burke/issue-responses/' + docId + '.php'
		} else {
			var url = '/teaching-cases/sprandel-inc/client/kate-burke/issue-responses/sorry.php'
		}

		window.open(url, '_self')

		return false
	});

})();