<?php

use classes\interfaces\IGadget;
use classes\interfaces\i3D;

function autoLoader1($class)
{
  $file = __DIR__ . "/classes/{$class}.php";

  if (file_exists($file)) {
    require_once $file;
  }
}
spl_autoload_register('autoLoader1');

function autoLoader2($class)
{
  $file = __DIR__ . "/classes/interfaces/{$class}.php";

  if (file_exists($file)) {
    require_once $file;
  }
}

spl_autoload_register('autoLoader2', true, true);
