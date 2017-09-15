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
        	<li>Andiola, L. 2014. Performance feedback in the audit environment: A review and synthesis of research on the behavioral effects. <i>Journal of Accounting Literature</i> 33 (1-2): 1-36.</li>

            <li>Andiola, L., Bedard, J. C., and Hux, C. 2016. Writing an effective literature review in behavioral accounting. Invited book chapter for the <i>Routledge Companion to Behavioral Accounting Research</i> forthcoming in 2017.</li>
        </ul>
        
        <h2>Working Papers:</h2>
        <ul>
            <li>Andiola, L and Bedard, J. C. 2016. Delivering the “Tough Message”: How do Supervisors’ Goal Framing and Subordinates’ Feedback Orientation Affect Subordinate Auditors’ Reactions to Audit Review? (<i>Formerly: What distinguishes effective audit reviews? Evidence from the experiences of staff auditors</i>). Revising for 2nd round submission at <i>Accounting, Organizations and Society.<i></li>

        	<li>Andiola, L., Downey, D., Spilker, B., and Noga, T. 2015. The Interactive Effects of Feedback Sign and Source on Indian Tax Professionals' Satisfaction: A Social Identity Perspective. Under review at <i>Organizational Behavior and Human Decision Processes.</i></li>

            <li>Andiola, L., Lambert, T., and Lynch. E. Sprandel Inc: A Teaching Case on Closing Review Notes in an Electronic Audit Environment. Preparing for submission.</li>

            <li>Andiola, L., Bedard, J. C., and Westermann, K. Self-serving bias and affective reactions to audit review. Preparing for Submission.</li>
        
        	<li>Andiola, L. 2015. Giving the Tough Message: Improving the Effectiveness of Workpaper Review. Preparing for submission.</li>
        </ul>
        
        <h2>Work in Progress:</h2>
        <ul>   
        	<li>Andiola, L., Bedard, J. C, and Kremin, J. "Determinants and Consequences of Effective On-the-job Coaching in the Audit Environment." <i>Phase: paper write up.</i></li>
            
            <li>Andiola, L., Downey, D., Earley, C. and Thibodeau, J. "Wealthy Watches Inc.: A Teaching Case to Integrate Sampling Technology and Revenue Recognition Fraud in the Electronic Confirmation Process into an Auditing Curriculum." <i>Phase: teaching case write-up and pilot testing.</i></li>

            <li>Andiola, L. M. and Lynch, E. “Eye-tracking: A Research Method for Behavioral Accounting Research.” <i>Phase: Literature review and case study.</i></li>

            <li>Andiola, L. M., Masters, E., Norman, C. “Incorporating Technology into the Accounting Curriculum: Experiences, Challenges, and How Regulatory Groups Can Help.” Phase: <i>Data collection.</i></li>
        </ul>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
