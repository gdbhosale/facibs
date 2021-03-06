<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php if(isset($title)) { echo $title; } else { echo $site_name; } ?></title>
	<meta name="description" content="Sample Description">
	<meta name="keywords" content="">
	<meta name="author" content="Dwij IT Solutions">
	
	<meta property="og:title" content="Sample Title">
	<meta property="og:type" content="article">
	<meta property="og:image" content="">
	<meta property="og:url" content="">
	<meta property="og:description" content="Sample Description">
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo $base_url; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $base_url; ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $base_url; ?>/css/styles.css" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>