<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>iShortener</title>
	<meta name="description" content="Your_Description" />
    <meta name="keywords" content="Your_Keywords" />
	<meta name="author" content="IDVSE Developer, iDeveloper" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="./css/aquaadmin.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(function()
		{
			$("#ajaxShorten").click(function() {
				
				$(this).hide();
				$("#load").show();
				$("#error").hide();
				
			 	$.post('ajax.php', {url : $("#longURL").val()}, function(data)
			 	{
			 		if(data.indexOf("http") == -1)
			 		{
			 			$("#error").show();
			 			$("#error").html(data);
			 		}else{
			 			$("#longURL").val(data);
			 		}
			 		$("#load").hide();
			 		$("#ajaxShorten").show();
			 	});
			});
		});
	</script>
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
                    
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
							<li><a href="about.html"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
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
                            <li><a href="about.html"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-tasks icon-aqua"></i> Contact</a></li>
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
		                            Enter your long URL: <input type="text" id="longURL" value="http://idvse.com/" onclick="if(this.value=='http://cut.zz.mu/') { this.value = '';}else{this.select();}"/>
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
                                <h2>Ads Zone</h2>
                            </div>
                            <div class="panel-content">
                                <p>
                                    <center>
									<p><img src="ads.png" width="162" height="154" alt="" longdesc="./contact" />
                                    <img src="ads.png" width="162" height="154" alt="" longdesc="./contact" />
									<img src="ads.png" width="162" height="154" alt="" longdesc="./contact" />
									<img src="ads.png" width="162" height="154" alt="" longdesc="./contact" />
									<img src="ads.png" width="162" height="154" alt="" longdesc="./contact" />
                                    <img src="ads.png" width="162" height="154" alt="" longdesc="./contact" /></p>
									</center>
                                </p>
                            </div>
                        </div><!--/span-->
                    </div><!-- content -->
                </div>
            </div><!--/row-->

			<hr />
            <footer>
                <p>Copyright &copy; 2013 <a href="./">iShortener</a></p>
            </footer>
        </div><!--/.fluid-container-->
        <script type='text/javascript' src='./js/bootstrap.min.js'></script>
			
</body>
</html>