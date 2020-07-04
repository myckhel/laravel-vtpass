<?php
namespace Myckhel\VtPass;

use Illuminate\Support\Facades\Http;
use Myckhel\Vtpass\Vtpass;

/**
 *
 */
trait Request
{
  public static function vt(){
    return new Vtpass;
  }

  public static function post($endpoint, $params)
  {
    return self::request($endpoint, $params, 'post');
  }

  public static function get($endpoint, $params)
  {
    return self::request($endpoint, $params);
  }

  private static function merge($ar, $arr){
    return array_merge($ar, $arr);
  }

  public static function request($endpoint, $params, $method = 'get')
  {
    $vt       = self::vt();
    $username = $vt->username;
    $password = $vt->password;

    $res = Http::withBasicAuth($username, $password)
    // ->withHeaders([
    //   'Content-Type' => 'application/json'
    // ])
    ->$method(
      $vt->url.$endpoint,
      self::merge([
      ], $params)
    );

    if ($res->failed()) {
      $res->throw();
    } else {
      return $res;
    }
  }
}
