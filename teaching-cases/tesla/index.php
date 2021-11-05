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
        	<div class="col-md-4">
            	<img src="media/case_logo.png" class="img-responsive" />
            </div>
            <div class="col-md-8">
                <h1>Welcome to Fraud Risk Brainstorming at Tesla Motors</h1>
            </div>
        </div>
    </div>
    
    <div class="container" role="main">
        
        <div class="well">
        	<h2>Case Overview</h2>
            <p>This instructional case offers students the opportunity to explore the fraud risk assessment process and to participate in a simulated fraud brainstorming session as required by AS 2401 (formerly SAS 99) for financial statement audits. Drawing on publicly available information about Tesla Motors, the revolutionary company behind the popular Model S all-electric vehicle, the case materials guide students through multiple learning objectives. These objectives include learning how to: (1) recognize the factors that contribute to financial statement fraud risk; (2) identify and evaluate the likelihood and severity of fraud risks; (3) analyze the ways that fraud risks can lead to material misstatements in the financial statements; (4) understand the purpose of and how to conduct a fraud brainstorming session; and (5) develop audit procedures that respond to assessed fraud risks. In a post-case learning assessment, students reported significant improvement in their knowledge, comprehension, and application of these learning objectives. Students also indicated that they enjoyed learning about these concepts in the context of this popular company. This case has both an individual and a group component, and it is designed for use in an auditing or forensic accounting course at either the undergraduate or the graduate level.</p>
            <p>To obtain these case materials proceed to: <a href="https://doi.org/10.2308/iace-51973" target="_blank">https://doi.org/10.2308/iace-51973</a></p>

            <p>Citation: Hess, M., and Andiola, L. M. 2018. Fraud risk brainstorming at Tesla Motors. <i>Issues in Accounting Education</i> 33 (2): 19-34.</p>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
