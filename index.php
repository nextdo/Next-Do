<?php





  require_once('infrastructure/nxd_notice.php');

  require_once('config/nxd_config.php');

  if ($GLOBALS['nxd_config']['disable_this_install']) { die('This installation has been disabled.'); }

  require_once('nxd_simple_renderer.php');
  require_once('nxd_initializer.php');





?>