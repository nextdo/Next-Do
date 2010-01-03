<?php

  
  
  
  
  class nxd_error {





      private static $Instance = false;
      private static $errors   = array();






      public static function get_errors() {
          return $errors;
      }





      public static function clear_errors() {

          $intE   = $errors;
          $errors = array();

          return $intE;

      }





      public static function add($type, $reason, $args) {

          $new_error = array('type'=>$type, 'reason'=>$reason, 'args'=>$args, 'time'=>now());
          $errors[]  = $new_error;

          return $new_error;

      }





      public static function add_notice($reason, $args) {
          return add('notice', $reason, $args);
      }





      public static function add_warning($reason, $args) {
          return add('warning', $reason, $args);
      }





      public static function add_error($reason, $args) {
          return add('error', $reason, $args);
      }





      public static function add_fatal($reason, $args) {
          return add('fatal', $reason, $args);
      }





      public static function instance() {

          if ($Instance === false) {
              $Instance = new nxd_error();
          }

          return $Instance;

      }





      private __construct() {}





  };





?>