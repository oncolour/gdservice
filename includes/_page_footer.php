
<!-- Scripts -->
<?php if($local = $_SERVER['REMOTE_ADDR']=='::1' ? 1 : 0) { ?>
<!-- Development -->
<script type="text/javascript" src="js/vendor/foundation.min.js"></script>
<script type="text/javascript" src="js/vendor/motion-ui.min.js"></script>
<script type="text/javascript" src="src/javascripts/gdservice.js"></script>
  <?php } else {?>
<!-- Production -->
<script type="text/javascript" src="js/vendor/foundation.min.js"></script>
<script type="text/javascript" src="js/vendor/motion-ui.min.js"></script>
<script type="text/javascript" src="js/gdservice.min.js"></script>
<!-- End Production imports -->
<?php } ?>
</body>

</html>