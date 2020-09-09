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
            <p>My research is primarily focused on firm quality control initiatives including formal training, audit review, on-the-job coaching and performance appraisal. This interest in training and coaching extends to the classroom where I also work to create teaching cases that help students learn using "real world" audit techniques. I have published articles in <i>Accounting, Organizations, and Society</i>, <i>Auditing: A Journal of Practice &amp; Theory</i>, <i>Behavioral Research in Accounting</i>, <i>Issues in Accounting Education</i>, and the <i>Journal of Accounting Literature.</i></p>
        </div>
    </div>
    
    <div class="container" role="main">

        <a href="/media/downloads/Andiola_vita.pdf" class="btn btn-lg btn-primary margin-top-bottom">Curriculum Vitae</a>

    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
