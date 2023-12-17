<?php


// от корня принято указывать
namespace classes\interfaces;

// В интерфейсах можем создавать свойства, константы

interface i3D
{
  // переопределять константу, которая объявлена в интерфейсе мы не можем
  const TEST2 = 'test interface';

  public function test(); // не должен иметь реализацию
}
