<?php 
//load the configuration file and the templated elements of the page
require('/var/www/site.com/inc/config.php');
define('TITLE',"Contact ".ORGNAME);//what is the name of the page?
define('BODY','contact');
head();
?>

<p>add1<br />
city, state zip<br />
(401) 555-1212</p>
<?php
if(isset($_POST['submit'])){
	//send the message by email
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = 'Inquiry from website: '.$_POST['subject'];
	//$message = "from: $name\r\n". $_POST['message'];
	$message = $_POST['message'];
	$headers = "From: $email";
	mail('<EMAIL ADDRESS>', $subject, $message, $headers);
	echo "<p>Thank you for getting in touch. We will respond soon.</p>";
}else{?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
<ul class="formlist">
	<li>
		<label for="name">Name <span class="required">(required)</span></label>
		<input type="text" name="name" size="50" />
	</li>
	<li>
		<label for="email">Email</label>
		<input type="text" name="email" size="50" />
	</li>
	<li>
		<label for="subject">Subject <span class="required">(required)</span></label>
		<input type="text" name="subject" size="50" />
	</li>
	<li>
		<label for="message">Comment <span class="required">(required)</span></label>
		<textarea name="message" cols="50" rows="5"></textarea>
	</li>
	<li>
		<input type="submit" name="submit" value="Send Message" />
	</li>
</form>
<?php } ?>
</div>

<?=foot()?>