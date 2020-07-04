<?php
namespace Myckhel\Vtpass\Support;

use Myckhel\Vtpass\Request;

/**
 *
 */
class Electric
{
  use Request;

  public static function verify($params)
  {
    return self::post("merchant-verify", self::merge(
      $params,
      []
    ))->json();
  }
}
