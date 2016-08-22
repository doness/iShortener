<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php require_once('inti/header.php'); ?>
</head>

<body>
	<div class="row">	
	<div class="col s12">
		<div class="row">
			<div class="col s12">
			  <div class="card blue-grey darken-1">
				<div class="card-content white-text">
				  <span class="card-title">iShortener</span>
				  <div id="shorten">
		              Enter your long URL: <input type="text" id="longURL" value="http://www.google.com" onclick="if(this.value=='http://www.google.com') { this.value = '';}else{this.select();}"/>		              
	              </div>
				</div>
				<div class="card-action">
				  <a href="javascript:void(0);" id="ajaxShorten" style="text-decoration: none;border:0">Shorten URL</a>
				  <img src="ajax-loader.gif" id="load" style="display: none;" alt=""/>
				</div>
			  </div>
			</div>
			<div class="col s12">
			<div class="card-panel teal">
			  <div class="card-stacked">
				<div class="card-content">
				  <h3>Image Upload</h3>
				  <p>
						<html>
						<center>
						<div style="width:950px;height:auto;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;border:0px solid #7A6E6E;background:transparent;">
						<?php

						///////////////////////////////////  iOPTIONS  ///////////////////////////////////////////


						$siteurl = "localhost/iShortener"; // Your domains or subdomains (e.g. domain.com or domain.com/folder)


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
							print("<a class=\"waves-effect waves-light btn\" type=\"submit\" name=\"upload\"><i class=\"material-icons right\">swap_vert</i> Upload</a>\n");
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
						</center>
						</html>
				  </p>
				</div>
			  </div>
			</div>
			</div>
		</div>
		
	</div>
	
	</div>	
    
	<script type='text/javascript' src='./js/bootstrap.min.js'></script>
<<<<<<< HEAD
	<?php require_once('inti/footer.php'); ?> 
=======
	<?php require_once('footer.php'); ?> 
>>>>>>> origin/master
</body>
</html>