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
            <h1>Lindsay Andiola</h1>
            <p>Prepare your brains, nerds.</p>
        </div>
    </div>
    
    <div class="container" role="main">
    	
    	<h2>How did I get here?!?</h2>
        <p><img src="/media/lindsay_headshot.jpg" class="img-responsive inset-image" align="left" width="200"/>Well I definitely didn't grow up dreaming of being an Accounting Professor. I think for most of my young life I dreamed of being an Olympic swimmer, then sometime in high school I started to think that perhaps this dream just was not meant to be. When looking at colleges, I knew I wanted to study business. Probably because I watched my mom build her own business, I saw her passion and I wanted to have that too. I ended up at American University, partly because it was in D.C., partly because I still wanted to swim, and partly because they had a solid business school. I was drawn to finance and accounting, I was good at it and I figured if I know how to do this stuff, I can use these skills in any organization. I worked hard, got an internship with KPMG in their assurance practice in Washington, DC, and I was offered a full-time position when I graduated. All I could think was wow this is so awesome I have a job and I get to actually make money. My role at KPMG took me all over the U.S., I made it through several busy seasons on both corporate and federal government clients, managed to find some time to get my CPA, and lucky me, I found my husband out in Colorado Springs during my second year staff associate training. However, after 3 or so years in public accounting, I knew it just was not where I saw myself when I looked ahead twenty years from now. I wanted to feel part of something to build something, I thought. So I switched sides and found myself working at a private equity firm in New York City handling much of the accounting for both the management company and the funds. Fast forward another 3 years and I still had this feeling that this was not where I should be. I wanted to be challenged, to continuously learn, to feel rewarded by the work I was doing, and so it was back to school for me to get my PhD. Four years flew by, although day-to-day I questioned whether I was going to make it through, but I did! And so, here I am, an Assistant Professor of Accounting at Virginia Commonwealth University. I teach undergraduate auditing, the PhD auditing seminar, and spend much of my time working on research to understand and improve feedback and coaching in public accounting firms. I also love trying to innovate in the classroom with experiential learning cases that help my students connect the boring book knowledge with tasks and cases that let the students see the "real world" of auditing. I love what I do (although some days I hate it). The energy you feel when working with students is amazing and I do not know another career where you truly get to choose who you work with, when you work, and what you work on.</p>
        
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
