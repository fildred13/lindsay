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
        	<h1>Contact Me</h1>
            <p>Lindsay Andiola, Assistant Professor, Virginia Commonwealth University</p>
        </div>
    </div>
    
    <div class="container" role="main">
        
        <div class="col-sm-6">
        	<div class="contact-tile tile-contact">
            	<div>
                    <p>e-mail: <a href="emailto:lmandiola@vcu.edu">lmandiola@vcu.edu</a><br/>
                    phone: 804-827-7414</p>
            </div>
            </div>
        </div>
        
        <div class="col-sm-6">
        	<div class="contact-tile tile-address">
            	<div>
                    <p>Virginia Commonwealth University<br/>
                    Snead Hall, Room B3127<br/>
                    301 West Main Street<br/>
                    PO Box 844000<br/>
                    Richmond, VA 23284</p>
                </div>
            </div>
        </div>
    
    	<!--<div class="col-sm-6">
            <ul>
                <p>Lindsay M. Andiola<br/>
                Assistant Professor<br/>
                Virginia Commonwealth University<br/>
                e-mail: <a href="emailto:lmandiola@vcu.edu">lmandiola@vcu.edu</a><br/>
                phone: 804-827-7414</p>
            </ul>
        </div>
        <div class="col-sm-6">
                <p>Mailing Address:</p>
                <p>Virginia Commonwealth University<br/>
                Snead Hall, Room B3127<br/>
                301 West Main Street<br/>
                PO Box 844000<br/>
                Richmond, VA 23284</p>
        </div>-->
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
