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
                <h1>Welcome to the Substantive Testing of AR at Wealthy Watches, Inc.</h1>
            </div>
        </div>
    </div>
    
    <div class="container" role="main">
        
        <div class="well">
            <h2>Case Overview</h2>
            <p>Substantive testing of accounts receivable through confirmations is an established and required audit procedure. However, the technology used to perform portions of this work is evolving. This case exposes students to the testing of accounts receivable while introducing them to audit-related technologies (such as Interactive Data Extraction and Analysis (IDEA) software and robotic process automation (RPA)) used in practice. In this case, students 1) evaluate a client-provided data file, 2) select a sample of customer invoices using IDEA, 3) obtain audit evidence from their firm’s RPA software and evaluate the evidence for the identification of exceptions, 4) project any misstatements from the sample to the population, and 5) document their conclusions. This case helps students develop a greater awareness of technologies used in audit practice. The case also allows students to practice skepticism, apply professional judgment, and hone their business writing skills by documenting their results in a professional memo.</p>
            <h3>Learning Outcomes for Students</h3> 
            <ul>
                <li>Can evaluate whether a data file received from a client (i.e., a detailed journal listing) is complete and accurate and describe the significance of this procedure.</li>
                <li>Can apply the professional standard pertaining to audit sampling and describe how professional judgment can impact an auditor’s sample selection.</li>
                <li>Able to utilize a sampling software tool to select a statistical monetary unit sample.</li>
                <li>Can critically assess information gathered by RPA software and direct audit evidence in light of the known risks inherent to the revenue cycle, including improper revenue recognition and fraud.</li>
                <li>Able to evaluate the results of an audit sample and conclude on the existence of the accounts receivable balance, including projecting any misstatements from the sample to the population.</li>
                <li>Able to document and communicate audit results and conclusions, including audit judgments and decisions made while performing substantive audit procedures.</li>
            </ul>
            <p>To obtain these case materials proceed to: <a href="https://doi.org/10.2308/ISSUES-2020-037" target="_blank">https://doi.org/10.2308/ISSUES-2020-037</a></p>

            <p>Citation: Andiola, L. M., Downey, D. H., Earley, C. E. and Jefferson, D. 2021. Wealthy Watches Inc.: The substantive testing of accounts receivable in the evolving audit environment. <i>Issues in Accounting Education</i> (forthcoming). </p>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
