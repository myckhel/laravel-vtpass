<?php

return [
  "username"          => env("VTPASS_USERNAME"),
  "password"          => env("VTPASS_PASSWORD"),
  "mode"              => env("VTPASS_MODE", "sandbox"), // app mode sandbox ?? live
];
