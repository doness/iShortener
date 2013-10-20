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
							<li class="active"><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li><a href="tos.php"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
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
                        <li><a href="./">Home</a></li><li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> <li><span>About</span></li></ul><!-- breadcrumbs -->
                </div>
                <div class="span2 sp2 all-left">
                    <div class="sidebar-nav">
                        <ul class="nav nav-list">
                            <li><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
                            <li class="active"><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li><a href="tos.php"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li><a href="privacy.php"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div>
                </div><!--/span-->
                <div class="span10 content">
                    <div id="content">
                        <div class="span11 panel">
                            <div class="panel-header">
                                <i class="icon-user icon-blue"></i>
                                <h2>About Us</h2>
                            </div>
                            <blockquote style="text-align: left">

<span style="font-family: arial;">



<meta name="keywords" content="best URL shortener,url redirection,link,encurtador de url"> 
<meta name="description" content="What is URL shortener - FAQ - How does url shortening works.">

<h2>What is URL Shortener service ?</h2>

<p>

URL shortening is a technique to convert a long URL (site or page address) to a shorter version.
This shorter version of the URL is usually cleaner and easier to share or remember. When someone accesses the 
shortened address, the browser redirects to the original (large) url address. It is also called URL redirection or URL redirect.

</p><p>
For example, the large version of this url:<br>
<code>http://en.wikipedia.org/wiki/URL_shortening</code><br>
<br>
Can be shortened with iShortener service to this small address, that redirects to the previous longer address:<br>
<code><a href="./1" target="_blank">yoururl/1</a></code><br>

</p><p>

</p><h2>Uses and purposes:</h2>
<p>

</p><ul>
 <li>Share links inside email messages without breaking lines
 </li><li>Share short links in Twitter messages
 </li><li>Easily remember your favorite addresses
 </li><li>Share short links in instant-messaging
 </li><li>Share easy-to-type links in news and printed material
 </li><li>Have clean and compact urls for your use
 </li><li>Hide real URL (user will see the real link only after clicking the short url)
 </li><li>Create human-readable links
 </li><li>Avoid errors when typing long urls links with parameters
</li></ul>

<p>
</p><hr>

<b>URL Shortener FAQ</b>

<p>
<b>* Is it possible to use iShortener to store "Data URI scheme"?</b>
<br>
<br>
We currently don't allow Data URL scheme.
Data URL is a way to encode all page content in the URL.<br>
Click to see example:<br>
<a href="data:text/html,&lt;b&gt;Sample%20Page&lt;/b&gt;" target="_blank">data:text/html,&lt;b&gt;Sample%20Page&lt;/b&gt;</a>

</p>

<hr>







</p></span></blockquote>
                    </div><!-- content -->
                </div>
            </div><!--/row-->

			
            <?php require_once('footer.php'); ?> 
			
        </div><!--/.fluid-container-->
        <script type='text/javascript' src='./js/bootstrap.min.js'></script>
			
</body></html>