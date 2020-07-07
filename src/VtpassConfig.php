<?php
namespace Myckhel\Vtpass;

/**
 *
 */
class VtPassConfig
{

  public function __construct()
  {
    $this->username    = config('vtpass.username');
    $this->password    = config('vtpass.password');

    $this->live_url    = "https://vtpass.com/api/";
    $this->sandbox_url = "https://sandbox.vtpass.com/api/";

    $this->url         = true ? $this->sandbox_url : $this->live_url;
  }

}
