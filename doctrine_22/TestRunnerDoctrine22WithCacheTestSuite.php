<?php

  require dirname(__FILE__) . '/Doctrine22WithCacheTestSuite.php';
  $time = microtime(true);
  $memory = memory_get_usage();
  $test = new Doctrine22WithCacheTestSuite();
  $test->initialize();
  $test->run();
  echo sprintf(" %11d | %6.2f |\n", (memory_get_usage(true) - $memory), (microtime(true) - $time));
