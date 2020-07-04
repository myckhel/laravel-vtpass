<?php
namespace Myckhel\Vtpass\Support;

use Myckhel\Vtpass\Request;

/**
 *
 */
class Electric
{
  use Request;

  public static function status($params)
  {
    return self::post("requery", $params)->json();
  }

  public static function purchase($params)
  {
    return self::post("pay", $params)->json();
  }

  public static function verify($params)
  {
    return self::post("merchant-verify", $params)->json();
  }
}
