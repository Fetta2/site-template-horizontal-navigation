<?php 
//load the configuration file and the templated elements of the page
require('/var/www/site.com/inc/config.php');
define('TITLE',"Not Found | ".ORGNAME);//what is the name of the page?
define('BODY','oops');
head();
?>
<h2>404 Error</h2>
<p>The page that you came to see is not here. Please use the links at the top of the page or visit our <a href="/">homepage</a></p>

<?=foot()?>