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
							<li class="active"><a href="tos.php"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li><a href="privacy.php"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12 top-bar">
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li><li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> <li><span>Terms of use</span></li></ul><!-- breadcrumbs -->
                </div>
                <div class="span2 sp2 all-left">
                    <div class="sidebar-nav">
                        <ul class="nav nav-list">
                            <li><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
                            <li><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li class="active"><a href="tos.php"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li><a href="privacy.php"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div>
                </div><!--/span-->
                <div class="span10 content">
                    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/netbeans/bootstrap/js/excanvas.min.js"></script><![endif]-->
                    <div id="content">
                        <div class="span11 panel">
                            <div class="panel-header">
                                <i class="icon-exclamation-sign icon-aqua"></i>
                                <h2>Terms of use</h2>
                            </div>

<div id="about">
		<p>Terms of use of YourDomain.com service.</p>
		<p>What cannot be <b>Uploaded Images and Short Long Url</b> to YourDomain.com servers:<br>
		- Copyrighted images if you don't own copyright for it<br>
		- Violence, racial intolerance, or advocate against any individual, group, or organization<br>
		- Any other images that might be considered illegal in USA or EU countries</p>
		<p>If you are not sure whether image you want to upload is allowed then do not upload that image. All uploaded images are checked by staff and images that violate terms will be removed without warning and uploader of such images might be banned from website.</p>
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