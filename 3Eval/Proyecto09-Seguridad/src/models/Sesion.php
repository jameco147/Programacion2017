<?php

namespace Daw\models;

/**
 *
 */
class Sesion
{

  function __construct()
  {

  }

  public static function start()
  {
    session_start();
  }

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

 public static function get($key)
 {
   if (isset($_SESSION[$key])){
     return $_SESSION[$key];
   }
 }

 public static function destroy()
 {
   session_unset();
   session_destroy();
 }


}


?>
