<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
                            <li class="active"><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
							<li><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
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
                        <li><a href="./">Home</a></li><li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> <li><span>Dashboard</span></li></ul><!-- breadcrumbs -->
                </div>
                <div class="span2 sp2 all-left">
                    <div class="sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="active"><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
                            <li><a href="about.php"><i class="icon-user icon-aqua"></i> About</a></li>
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
                                <i class="icon-list icon-blue"></i>
                                <h2>iShortener</h2>
                            </div>
                            <div class="panel-content">
                                <center>
								<div id="shorten">
		                            Enter your long URL: <input type="text" id="longURL" value="http://idvse.com/" onclick="if(this.value=='http://idvse.com/') { this.value = '';}else{this.select();}"/>
		                            <br/><br/><br/>
		                            <a href="javascript:void(0);" id="ajaxShorten" style="text-decoration: none;border:0">
		                            	<button class="btn btn-primary" alt="shorten button" border="0" type="submit"><i class="icon-ok icon-white"></i> Shorten URL</button>
		                            </a>
		                            <img src="ajax-loader.gif" id="load" style="display: none;" alt=""/>
	                            </div>
								</center><br/>
								<div style="display: none;position:relative;margin:0 auto; background-color:#cc0000;color:white;padding:10px;width:500px;font-size:18px;" id="error"></div>
                            </div>
                        </div><!--/span-->
						<div class="span11 panel">
                            <div class="panel-header">
                                <i class="icon-th icon-blue"></i>
                                <h2>Preimum Image Hosting</h2>
                            </div>
                            <div class="panel-content">
                                <p>
                                    <html>
<center><div style="width:950px;height:auto;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;border:0px solid #7A6E6E;background:transparent;">
<?php

///////////////////////////////////  iOPTIONS  ///////////////////////////////////////////


$siteurl = "stelso.tk"; // Your domains or subdomains (e.g. idvse.com or idvse.com/folder)


$folder = "i"; // To upload the Folder (folder chmod to 777)


$maxsizekb = 5000; // Maximum file size allowed


$filetype = array("jpeg", "jpg", "gif", "bmp", "png", "ico", "psd"); // Allowed image formats


////////////////////////////////////////////////////////////////////////////////////////

    echo "<body style='-moz-user-select: true; curs'>\n";
    print("<body vlink=\"white\" alink=\"white\" link=\"white\" text=\"white\">\n");
    print("<center>\n");
    print("Upload images (Maximum " . $maxsizekb . " KB)<br>\n");
    print("<p>\n");
    print("<form enctype=\"multipart/form-data\" action=\"\" method=\"post\">\n");


    print("<input name=\"file\" type=\"file\" size=\"60\">\n");
    print("<br><br>\n");
    print("<button class=\"btn btn-primary\" type=\"submit\" name=\"upload\"><i class=\"icon-upload icon-white\"></i> Upload</button>\n");
    print("</form>");
    echo "<Script Language='Javascript'>document.write(unescape(''));</Script>\n";


$maxbyte = $maxsizekb * 1024;


if(isset($_POST["upload"])) {
    $temp = explode(".", $_FILES['file']['name']);
    $tip = array_pop($temp);
    if($_FILES['file']['size'] > $maxbyte) {
    print("<hr>This File has reached the maximum size allowed!<br>Maximum size: <b>" . $maxsizekb . "KB</b>\n");
    }
    else if(!in_array($tip, $filetype)) {
    print("<hr>Image formats are not allowed!<br>Are allowed: <b>" . implode(", ", $filetype) . "</b>\n");
    }
    else {
    $newplace = $folder . "/" . time() . ".jpg";
    $n = 2;
    if(move_uploaded_file($_FILES['file']['tmp_name'], $newplace)) {
    print("<hr><h2>Upload successful!</h2><br><br>");
    print("Images Name: " . time() . ".jpg<br>\n");
    print("Images Size: " . $_FILES['file']['size'] . "<br><br>\n");
    print("Images Link: <input type=text name=1 class=code onClick='this.select()' size=50 value='http://" . $siteurl . "/" . $newplace . "'><br><br>\n");
    print("HTML code: <input type=text name=2 class=code onClick='this.select()' size=50 value='<a href=http://" . $siteurl . "/" . $newplace . "><img src=http://" . $siteurl . "/" . $newplace . "></a>'><br><br>\n");
    print("Forum code: <input type=text name=2 class=code onClick='this.select()' size=50 value='[url=http://" . $siteurl . "/" . $newplace . "][img]http://" . $siteurl . "/" . $newplace . "][/img][/url]'><br><br>\n");
    print("<br><img src=" . $newplace . " width=50% height=50%><br><br><br>\n");
    }
    else
    print("<hr><h2>Offence!</h2><br><br>\n");
            
    }
}

?>
</div>
</html>
                                </p>
                            </div>
                        </div><!--/span-->
                    </div><!-- content -->
                </div>
            </div><!--/row-->

			<?php require_once('footer.php'); ?> 
			
        </div><!--/.fluid-container-->
        <script type='text/javascript' src='./js/bootstrap.min.js'></script>
			
</body>
</html>