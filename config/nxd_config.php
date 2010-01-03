<?php





  require_once('config/nxd_base_config.php');
  require_once('config/nxd_local_config.php');





  function nxd_check_config($item) {
      
      if (!(isset($GLOBALS['nxd_config'][$item]))) {
          return error::instance()->fatal('Missing configuration item requested', $item);
      }

      return $GLOBALS['nxd_config'][$item];
  }





  function nxd_set_config($item, $value) {
      $GLOBALS['nxd_config'][$item] = $value;
  }





?>