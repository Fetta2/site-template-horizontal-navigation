<?php 
//load the configuration file and the templated elements of the page
require('/var/www/site.com/inc/config.php');
define('TITLE', ORGNAME);//what is the name of the page?
define('BODY','home');
head();
?>
<h1><?=TITLE?></h1>
<p>The site has been published and is responding. Now it is time to start customizing the theme and building out the site. Here are a few suggested steps:</p>
<ol>
	<li>Edit the company name in config</li>
	<li>theme & favicon</li>
	<li>google analytics</li>
</ol>

<?=foot()?>