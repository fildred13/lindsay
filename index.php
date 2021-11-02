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
            <h1>Lindsay M. Andiola, Ph.D., CPA <i>(inactive)</i></h1>
            <p>"Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful." -- Albert Schweitzer</p>
        </div>
    </div>
    
    <div class="container" role="main">
    	 <h2><img src="/media/lindsay_headshot.jpg" class="img-responsive inset-image" align="left" width="200"/>Biography</h2>
        <p>I am an Assistant Professor of Accounting at Virginia Commonwealth University. My research interests include audit firm quality control initiatives, auditor-auditor interactions, audit firm culture, and auditor professional development. My interest in professional development extends to the undergraduate audit classroom where I have developed a number of teaching cases that help students learn using "real world" audit techniques. My work is published in <i>Accounting, Organizations, and Society</i>, <i>Accounting Horizons</i>, <i>Auditing: A Journal of Practice &amp; Theory</i>, <i>Behavioral Research in Accounting</i>, and <i>Issues in Accounting Education</i>. My research has been supported by awards from the CAQ Access to Audit Personnel and VCU’s Quest for Distinction.</p>
        <p>I have also been recognized by the VCU School of Business as a Summer Research Fellow.</p>
        <p>My undergraduate and graduate education include receiving a Bachelor of Science in Business Administration with concentrations in Accounting and Finance from American University in 2005 and completing my Ph.D. in Accountancy at Bentley University in 2015. During the Ph.D. program, I was an AICPA Accounting Doctoral Scholar. Prior to entering a doctoral program, I spent three years with KPMG as an auditor and three years in corporate accounting at a private equity firm in NYC.</p>

        <h2>Personal</h2>
        <p>I live in Richmond, VA with my husband, John, and our three children, Lucas, Vivian, and Henry. I am an avid runner, and I enjoy coaching soccer and love to travel and go on adventures (both close and far) with my family.</p>

    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
