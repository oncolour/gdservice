<?php
// Assign Google analytics javascript file to $js variable
$js = file_get_contents('https://www.google-analytics.com/analytics.js');
// Save file named ga.min.js using $js as content. 
file_put_contents('js/vendor/ga.min.js', $js, FILE_USE_INCLUDE_PATH); 
?>


