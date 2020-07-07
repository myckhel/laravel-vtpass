<?php
namespace Myckhel\VtPass\Traits;

use Illuminate\Support\Facades\Http;
use Myckhel\Vtpass\Vtpass;

/**
 *
 */
trait HasQuery
{
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

  public function variations($params)
  {
    return self::post("service-variations", $params)->json();
  }
}
