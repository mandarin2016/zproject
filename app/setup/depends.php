<?php
return [
    'kernel'=>require_once(__DIR__.'/../kernel/setup.php'),
    'models'=>require_once(__DIR__.'/model.php'),
    'controls'=>require_once(__DIR__.'/control.php'),
    'customs'=>require_once(__DIR__.'/custom.php'),
];