<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
		if (!empty($_SERVER['SUBDOMAIN_DOCUMENT_ROOT'])) {
		  #GoDaddy Hackery
			$_SERVER['DOCUMENT_ROOT'] = $_SERVER['SUBDOMAIN_DOCUMENT_ROOT'];
		}
		$root = $_SERVER['DOCUMENT_ROOT'];
	?>
    	
	<?php include($root."/includes/head.html"); ?>
  </head>

  <body>
  
  	<?php include($root."/includes/nav.html"); ?>
    
    <div class="jumbotron">
    	<div class="container">
        	<h1>Research</h1>
            <p>My research is primarily focused on auditor interactions specifically those involving coaching and training of auditors. This interest in coaching and training extends to the classroom where I also work to create teaching cases that help students learn using "real world" audit techniques.</p>
        </div>
    </div>
    
    <div class="container" role="main">
    
    	<h2>Published:</h2>
		<ul>
            <li>Andiola, L. M., Lambert, T., and Lynch. E. 2018. Sprandel Inc: A Teaching Case on Closing Review Notes in an Electronic Audit Environment. Forthcoming in <i>Issues in Accounting Education.</i></li>

            <li>Hess, M., and Andiola, L. M. 2017. Fraud Risk Brainstorming at Tesla Motors. Forthcoming in <i>Issues in Accounting Education.</i></li>

            <li>Andiola, L., Bedard, J. C., and Hux, C. 2016. Writing an effective literature review in behavioral accounting. Invited book chapter for the <i>Routledge Companion to Behavioral Accounting Research</i> forthcoming in 2017.</li>

        	<li>Andiola, L. 2014. Performance feedback in the audit environment: A review and synthesis of research on the behavioral effects. <i>Journal of Accounting Literature</i> 33 (1-2): 1-36.</li>
        </ul>
        
        <h2>Working Papers:</h2>
        <ul>
        
            <li>Andiola, L. M., and Bedard, J. C. 2018. Delivering the “Tough Message”: Moderators of Subordinate Auditors’ Reactions to Feedback? Under 4th round review at <i>Accounting, Organizations and Society.</i></li>

            <li>Andiola, L. M., Downey, D., Spilker, B., and Noga, T. 2017. The Interactive Effects of Feedback Sign and Source on Indian Tax Professionals’ Satisfaction: A Social Identity Perspective. Under 3rd round review at <i>Behavioral Research in Accounting.</i></li>

            <li>Andiola, L. M., Bedard, J. C., and Westermann, K. 2017. It's not my fault! Insights into subordinate auditors' attributions and emotions following audit review. Under 2nd round review at <i>Auditing: A Journal of Practice &amp; Theory.</i></li>

            <li>Andiola, L. M., Masters, E., and Norman, C. S. 2017. The Impact of a Data-Driven World on Accounting Education. Technology and Data Analytic Skills in the Accounting Curriculum. Under 1st round review at <i>Accounting Horizons.</i></li>

            <li>Lynch, E., and Andiola, L. M. 2018. If Eyes are the Window to Our Soul, What Role does Eye-Tracking Play in Accounting Research? Under 1st round review at <i>Behavioral Research in Accounting.</i></li>

            <li>Andiola, L. M., Bedard, J. C., and Kremin, J. 2018. On-the-Job Coaching Quality and Turnover Intentions in a Multiple Supervisor Context: Does One "Bad Apple" Spoil the Bunch? Preparing for submission.</li>

            <li>Andiola, L. M., Brazel, J., Downey, D. H., and Schaefer, T. S. 2018. Coaching Today's Auditors: When do Workpaper Reviewers Professionally Develop the Preparers? Preparing for submission.</li>

            <li>Andiola, L. 2016. Giving the Tough Message: Improving the Effectiveness of Workpaper Review. Preparing for submission.</li>
        </ul>
        
        <h2>Work in Progress:</h2>
        <ul>   
        	<li>Andiola, L., Downey, D., Earley, C. and Thibodeau, J. "Wealthy Watches Inc.: A Teaching Case to Integrate Sampling Technology and Revenue Recognition Fraud in the Electronic Confirmation Process into an Auditing Curriculum." Phase: teaching case write-up and class testing.</li>

            <li>Lynch, E., Andiola, L. M, and Brink, A. "The Effects of Irrelevant Information and Minor Errors in Client Documents on Assessments of Misstatement Risk and Sample Size." Data analysis &amp; Write-up phase.</li>
        </ul>

        <a href="/media/downloads/Andiola_vita_06_26_2018.pdf" class="btn btn-lg btn-primary margin-top-bottom">Curriculum Vitae</a>

    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
