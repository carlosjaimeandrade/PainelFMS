<?php
ob_start("ob_gzhandler");
require_once 'config.php';
require_once(CONNECT);
include_once(FUNCTIONS);
include_once(CONTROL);
header('Location: '.BASEURL.'app/usuario/home');
?>
 


<script src="<?php echo BASEURL;?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo BASEURL;?>bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo BASEURL;?>js/ui-load.js"></script>
<script src="<?php echo BASEURL;?>js/ui-jp.config.js"></script>
<script src="<?php echo BASEURL;?>js/ui-jp.js"></script>
<script src="<?php echo BASEURL;?>js/ui-nav.js"></script>
<script src="<?php echo BASEURL;?>js/ui-toggle.js"></script>
<script src="<?php echo BASEURL;?>js/jquery.flot.min.js"></script>
<script src="<?php echo BASEURL;?>js/jquery.flot.orderBars.js"></script>

