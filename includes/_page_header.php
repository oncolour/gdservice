<!DOCTYPE html>
<html class="no-js" lang="sv" itemscope itemtype="http://schema.org/LocalBusiness" prefix="og: http://ogp.me/ns#">

<head>
    <title>Busstvätt och Chaufförsbemanning - GDService</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <?php require '_above_the_fold_css.php';?>
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
    <?php if($local = $_SERVER['REMOTE_ADDR']=='::1' ? 1 : 0) { 
    // Development
    ?>
    
    <script>
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = 'src/_build/f6.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
          
          var font = document.createElement('link'); font.rel = 'stylesheet';
        font.href = 'css/font-awesome.min.css';
        var fontH = document.getElementsByTagName('head')[0]; fontH.parentNode.insertBefore(font, fontH);
          
          var gd = document.createElement('link'); gd.rel = 'stylesheet';
        gd.href = 'src/_build/gdservice.css';
        var gdH = document.getElementsByTagName('head')[0]; gdH.parentNode.insertBefore(gd, gdH);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    
    <?php } else {
    // Production
    ?>
       
        <script>
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = 'css/f6.min.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
          
          var font = document.createElement('link'); font.rel = 'stylesheet';
        font.href = 'css/font-awesome.min.css';
        var fontH = document.getElementsByTagName('head')[0]; fontH.parentNode.insertBefore(font, fontH);
          
          var gd = document.createElement('link'); gd.rel = 'stylesheet';
        gd.href = 'css/gdservice.min.css';
        var gdH = document.getElementsByTagName('head')[0]; gdH.parentNode.insertBefore(gd, gdH);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    <?php } ?>
    
</head>

<body>
<?php include_once("analyticstracking.php") ?>