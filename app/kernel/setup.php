<?php
use Zproject\System\Depends\depRegist;
depRegist::addItem('Zproject\\System\\Files\\aExplorer',__DIR__.'/file.system.php','setup');
depRegist::addItem('Zproject\\System\\Depends\\depRegist',__DIR__.'/dep.registration.php','setup');
/**
 * interfaces 
 */
depRegist::addItem('Zproject\\System\\Interfaces\\View',__DIR__.'/interface/view.php','interface');


return [
    'setup'=>depRegist::getByCategory('setup'),
    'kernels'=>depRegist::getByCategory('kernel'),
    'interfaces'=>depRegist::getByCategory('interface')
];