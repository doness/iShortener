<?php
ob_start();
session_start();
require_once 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>URL Shortener Script</title>
	<meta name="description" content="Your_Description" />
    <meta name="keywords" content="Your_Keywords" />
	<meta name="author" content="IDVSE Developer, iDeveloper" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="./css/aquaadmin.css" />
</head>
<body>

<div id="main" style="text-align: left;">
	
    <?php
if (isset($_GET['out'])) {
    session_destroy();
    session_unset();
    header("Location: admin.php");
    exit;
}
if (!isset($_SESSION['admin']) OR $_SESSION['admin'] != 'xyz0') {
    if (isset($_POST['sb'])) {
        $u = trim(strip_tags($_POST['u']));
        $p = trim(strip_tags($_POST['p']));
        $u = addslashes($u);
        $p = addslashes($p);
        if ($u == ADMIN AND $p = PASSWORD) {
            $_SESSION['admin'] = 'xyz0';
            session_regenerate_id();
            header("Location: admin.php");
            exit;
        } else {
            print '<h3>Wrong details</h3>';
        }
    }
?>
	<script type="text/javascript" src="js/jquery.min.js"></script>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12 content">
                    <div id="content">
                        <div class="panel login">
                            <div class="panel-header">
                                <i class="icon-user icon-blue"></i>
                                <h2>Login form</h2>
                            </div>
                            <div class="panel-content">
                                <form method="post" />
                                    <fieldset>
	                                	Username : <br/>
	                                	<input type="text" name="u"/><br/>
	                                	Password : <br />
	                                	<input type="password" name="p"/><br/>
										<hr />
                                        <a class="btn btn-large" href="./"><i class="icon-arrow-left icon-blue"></i> Back to Home</a>
                                        <button class="btn btn-primary btn-large" type="submit" name="sb"><i class="icon-ok icon-white"></i> Login</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div><!--/span-->
<?php
} else {
    if (isset($_GET['delID'])) {
        $id = intval($_GET['delID']);
        mysql_query("DELETE FROM links WHERE linkID = $id") or die(mysql_error());
        header("Location: admin.php");
        exit;
    }
    print '<a class="btn btn-inverse" href="?out=logout"><i class="icon-off"></i> Log Out!</a><br/><hr/><br/>';
    $rs = mysql_query("SELECT * FROM links ORDER BY linkID DESC");
    if (mysql_num_rows($rs)) {
?>
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
                            <li><a href="about.html"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li><a href="tos.html"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li><a href="privacy.html"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12 top-bar">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li><li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> <li><span>Table</span></li></ul><!-- breadcrumbs -->
                    <div class="actions-bar">
                        <div class="btn-group pull-right">
                            <a class="btn btn-inverse"><i class="icon-cog icon-white"></i> Settings</a>
                            <a class="btn btn-inverse"><i class="icon-edit icon-white"></i> Actions</a>
                            <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-plus-sign"></i> Do something</a></li>
                                <li><a href="#"><i class="icon-cog"></i> Something else</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="span2 sp2 all-left">
                    <div class="sidebar-nav">
                        <ul class="nav nav-list">
                            <li><a href="./"><i class="icon-home icon-aqua"></i> Home</a></li>
							<li class="active"><a href="admin.php"><i class="icon-user icon-aqua"></i> Admin</a></li>
                            <li><a href="about.html"><i class="icon-user icon-aqua"></i> About</a></li>
                            <li><a href="contact.php"><i class="icon-envelope icon-aqua"></i> Contact</a></li>
							<li><a href="tos.html"><i class="icon-exclamation-sign icon-aqua"></i> TOS</a></li>
							<li><a href="privacy.html"><i class="icon-info-sign icon-aqua"></i> Privacy policy</a></li>
                        </ul>
                    </div>
                </div><!--/span-->
                <div class="span10 content">
                    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/netbeans/bootstrap/js/excanvas.min.js"></script><![endif]-->
                    <div id="content">
                        <div class="span11 panel">
                            <div class="panel-header">
                                <i class="icon-list-alt icon-blue"></i>
                                <h2>A total of <b><em><?php
        print mysql_num_rows($rs);
?></em></b> links shortened</h2>
                            </div>
			<table width="640">
				<tr style="font-weight: bold">
					<td width="250">Destination URL</td>
					<td width="200">Shortened</td>
					<td width="100">Added</td>
					<td width="70">IP</td>
					<td width="20">Remove</td>
				</tr>
			<?php
        $i = 0;
        while ($row = mysql_fetch_object($rs)) {
            $i++;
            if ($i % 2 != 0) {
                $rowColor = "#e9e9e9";
            } else {
                $rowColor = "#cccccc";
            }
            print '<tr bgcolor="' . $rowColor . '">
					  <td><a href="http://' . $row->destination . '" target="_blank">
					  	' . wordwrap($row->destination, 40, '<br/>', true) . '
					  	 </a>
					  <td>http://' . $_SERVER['SERVER_NAME'] . '/' . $row->string . '</td>
					  <td>' . date('d/m/Y H:iA', $row->added) . '</td>
					  <td>' . long2ip($row->ip) . '</td>
					  <td><a href="?delID=' . $row->linkID . '"><a class="btn btn-small btn-danger"><i class="icon-remove"></i></a></a></td>
					  </tr>';
        }
?>
			</table>
			<?php
    }
}
?>
                            
                    </div><!-- content -->
                </div>
            </div><!--/row-->
			
			
	
</div>
	
</body>
</html>
<?php
ob_end_flush();
?>