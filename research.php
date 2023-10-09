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
            <h1>Research &amp; Practice</h1>
            <p>My research is primarily focused on firm quality control initiatives including formal training, audit review, on-the-job coaching and performance appraisal. This interest in training and coaching extends to the classroom where I also work to create teaching cases that help students learn using "real world" audit techniques. I have published articles in <i>Accounting, Organizations, and Society</i>, <i>Auditing: A Journal of Practice &amp; Theory</i>, <i>Behavioral Research in Accounting</i>, <i>Issues in Accounting Education</i>, and the <i>Journal of Accounting Literature.</i></p>
        </div>
    </div>
    
    <div class="container" role="main">

        <h2>Research Profile</h2>
        <a href="https://docs.google.com/document/d/1gXqOAfHHPL8vMLiDp5zEz5nbojk9HNbQ/edit?usp=sharing&ouid=116303155046069647492&rtpof=true&sd=true" class="btn btn-lg btn-primary margin-top-bottom">Curriculum Vitae</a>
        <a href="https://scholar.google.com/citations?user=9Q-fW18AAAAJ&hl=en" class="btn btn-lg btn-primary margin-top-bottom">Google Scholar Profile</a>

        <h2>Connecting Research to Practice</h2>
        <p><a href="/media/downloads/Executive_summary_Busy_Season_Coping_Mechanisms.pdf">Executive Summary</a> of "Surviving Busy Season: Microbreaks and Supervisory Support as Coping Mechanisms"</p>

    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
