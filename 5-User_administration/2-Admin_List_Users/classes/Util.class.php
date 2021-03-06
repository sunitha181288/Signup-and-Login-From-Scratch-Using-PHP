<?php
 
/**
 * Utilities class
 */

class Util
{

  /**
   * Redirect to a different page
   *
   * @param string $url  The relative URL
   * @return void
   */
  public static function redirect($url)
  {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url);
    exit;
  }


  /** 
   * Deny access by sending an HTTP 403 header and outputting a message
   *
   * @return void
   */
  public static function denyAccess()
  {
    header('HTTP/1.0 403 Forbidden');
    echo '403 Forbidden';
    exit;
  }

}
