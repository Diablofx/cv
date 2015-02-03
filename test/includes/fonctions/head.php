<head>
	<!-- CharSet -->
	<meta charset="utf-8">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Name / Icon -->
	<?php 
		if (!isset($_GET['id']))
			{
				echo "<title>"."CV Clément Perret</title>";
			}

		else 
			{
				$filename = "./includes/pages/" . $_GET['id'] .".php";
				$id = $_GET['id'];
				$id = ucfirst($id);
				if (strpos($filename, '../') == true) 
					{
						echo "<title>Page d'erreur</title>";
					}
					elseif (file_exists($filename)) 
						{
							echo "<title>". $id . " Clément Perret</title>";
						}
					else
						{
							echo "<title>Page d'erreur</title>";
						}	
			}
	 ?>	
	<link rel="shortcut icon" type="image/x-icon" href="./images/logo.png" />
	<link rel="apple-touch-icon" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png" />
	<link rel="icon" sizes="192x192" href="http://cv.perret.ovh/images/android/android192.png"  />
	<link rel="icon" sizes="128x128" href="http://cv.perret.ovh/images/android/android128.png" />
	<!-- CSS -->
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">	
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<!-- Meta -->
	<meta name="description" content="Ce site a pour but de me présenter en tant que professionel, il retrace mon cursus scolaire, mes expériences professionelles et mes compétences" >
	<meta name="robots" content="noodp,noydir" />
	<meta name="keywords" content="clément,perret,ebusiness,photoshop,css,html,css3,html5,php,javascript,prestashop,wordpress,bootstrap,woocommerce">

	<!-- prevent mail spam -->
	<script type="text/javascript">
	function create_mail(naam, domain, tld, label) {
	    var mail = "";
	    mail += '<a class="contacttxt" href="mailto:' + naam;
	    mail += '@' + domain + '.' + tld;
	    mail += '"><span class="sprite-mail"></span>  ' + label + '</a>';
	    return mail;
	}
	</script>	
</head>

