<?php





  class nxd_initializer {

      
      
      private static $IsSetup  = false;
      private static $Instance = false;
      private static $errors   = array();




      public static function get_errors() { 
          return $errors;
      }




      public static function instance() {

          if ($Instance === false) {
              $Instance = new nxd_initializer();
          }

          return $Instance;

      }




      private function security_setup() {

          // @todo turn off magic quotes
          // @todo clear globals

          return true;

      }




      private function __construct() {

          $security_result = security_setup();
          if (!($security_result === true)) {
              $errors[] = $security_result;
              return;
          }

          $IsSetup = true;

      }



  };





?>