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



      public static function add($reason, $args) {

          $new_error = array('reason'=>$reason, 'args'=>$args, 'time'=>now());
          $errors[]  = $new_error;

          return $new_error;

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