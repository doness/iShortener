<?php
session_start();
require_once('contact_files/includes/recaptchalib.php');
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php require_once('header.php'); ?>
  </head>

  <body>
<script type="text/javascript" src="js/jquery.min.js"></script>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="./">iShortener</a>
					<a href="https://github.com/IDVSE" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
							<li><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li><a href="tos.php"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li class="active"><a href="privacy.php"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12 top-bar">
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li><li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> <li><span>Privacy policy</span></li></ul><!-- breadcrumbs -->
                </div>
                <div class="span2 sp2 all-left">
                    <div class="sidebar-nav">
                        <ul class="nav nav-list">
                            <li><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
                            <li><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li><a href="tos.php"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li class="active"><a href="privacy.php"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div>
                </div><!--/span-->
                <div class="span10 content">
                    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/netbeans/bootstrap/js/excanvas.min.js"></script><![endif]-->
                    <div id="content">
                        <div class="span11 panel">
                            <div class="panel-header">
                                <i class="icon-info-sign icon-aqua"></i>
                                <h2>Privacy policy</h2>
                            </div>

<div id="about">
		<p>Privacy policy of YourDomain.com service:</p>
		<p>YourDomain.com does not require registration in order to <b>Upload Images and Short Long URL</b>, so it doesn't record any email addresses.</p>
		<p>We do not collect any personally identifiable data on people who view images. However, when visitor uploads image to YourDomain.com server information about visitor is recorded so in case of abuse of terms of service our staff can easily identify and block offending user. Information about uploader is available only to staff members that do moderation of images, that information will not be displayed anywhere in public or given to anyone.</p>
	</div>

</p>

<hr>
                    </div><!-- content -->
                </div>
            </div><!--/row-->

			
            <?php require_once('footer.php'); ?> 
			
        </div><!--/.fluid-container-->
        <script type='text/javascript' src='./js/bootstrap.min.js'></script>
			
</body></html>