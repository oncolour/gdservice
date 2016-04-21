<!DOCTYPE html>
<html class="no-js" lang="sv" itemscope itemtype="http://schema.org/LocalBusiness" prefix="og: http://ogp.me/ns#">

<head>
    <title>Busstvätt och Chaufförsbemanning - GDService</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GDService erbjuder högkvalitativ busstvätt, service och underhåll av turistbussar samt chaufförsbemanning inom Sverige med utgångspunkt i Stockholm."/> 
    <meta itemprop="name" content="GDService">
    <meta itemprop="description" content="GDService erbjuder högkvalitativ busstvätt, service och underhåll av turistbussar samt chaufförsbemanning inom Sverige med utgångspunkt i Stockholm.">       
    <meta property="og:locale" content="sv_SE" />
	<meta property="og:type" content="website" />
    <meta property="og:title" content="GDService" />
	<meta property="og:description" content="GDService erbjuder högkvalitativ busstvätt, service och underhåll av turistbussar samt chaufförsbemanning inom Sverige med utgångspunkt i Stockholm." />
	<meta property="og:url" content="http://www.gdservice.se" />
	<meta property="og:site_name" content="GDservice" />
 	<meta property="og:image" content="http://www.gdservice.se/src/images/gdservice-logo.png" />
    <meta name="application-name" content="GDservice" />
    
    
    <?php // Check REMOTE_ADDR  phpinfo(); ?>  
    <?php if($local = $_SERVER['REMOTE_ADDR']=='::1' ? 1 : 0) { ?>
    <!-- Development -->
    <link rel="stylesheet" href="src/_build/f6.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="src/_build/gdservice.css">
    
    <?php } else {?>
    <!-- Production -->
    <link rel="stylesheet" href="css/f6.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/gdservice.min.css">
    <!-- End Production imports -->
    <?php } ?>
</head>

<body>
<?php include_once("analyticstracking.php") ?>