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