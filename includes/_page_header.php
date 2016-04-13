<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busstvätt och Chaufförsbemanning - GD Service</title>
    <meta name="description" content="GD Service erbjuder högkvalitativ tvätt, service och underhåll av turistbussar samt chaufförsbemanning inom Sverige med utgångspunkt i Stockholm.">
    
    <?php // Check REMOTE_ADDR  phpinfo(); ?>
    
    <?php if($local = $_SERVER['REMOTE_ADDR']=='::1' ? 1 : 0) { ?>
    <!-- Development -->
    <link rel="stylesheet" href="src/_build/f6.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="src/_build/gdservice.css">
    
    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
    
    <?php } else {?>
    <!-- Production -->
    <link rel="stylesheet" href="css/f6.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/gdservice.min.css">
    
    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
    <!-- End Production imports -->
    <?php } ?>

</head>

<body>