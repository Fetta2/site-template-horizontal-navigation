<?php
define('ORGNAME','website');
//set the page section calls using functions so that they are easier and cleaner to call on the page
function head(){
	require('/var/www/site.com/inc/head.php');
}

function foot(){
	require('/var/www/site.com/inc/foot.php');
}

?>