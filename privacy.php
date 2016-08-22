<?php
session_start();
require_once('contact_files/includes/recaptchalib.php');
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php require_once('inti/header.php'); ?>
  </head>

<body>
  <div class="row">
        <div class="col s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
				<span class="card-title">Privacy policy</span>
				<p>Privacy policy of YourDomain.com service:</p>
				<blockquote>YourDomain.com does not require registration in order to <b>Upload Images and Short Long URL</b>, so it doesn't record any email addresses.</blockquote>
				<blockquote>We do not collect any personally identifiable data on people who view images. However, when visitor uploads image to YourDomain.com server information about visitor is recorded so in case of abuse of terms of service our staff can easily identify and block offending user. Information about uploader is available only to staff members that do moderation of images, that information will not be displayed anywhere in public or given to anyone.</blockquote>
            </div>
          </div>
        </div>
      </div> 
		
    <script type='text/javascript' src='./js/bootstrap.min.js'></script>
	<?php require_once('inti/footer.php'); ?>
		
</body></html>