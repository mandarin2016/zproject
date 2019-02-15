<?php
use Application\System\Depends\depRegist;
$customDir=__DIR__.'/../custom';
$customsDirs=\Application\System\Files\aExplorer::returnDirs($customDir);
foreach($customsDirs as $k => $v){
$domain= require_once($v.'/domain.php');
if(strpos($_SERVER['HTTP_HOST'], $domain) !== false){
    if(is_file($v.'/index.php'))require_once $v.'/index.php';
    }
}

return [
    'custom'=>depRegist::getByCategory('custom')
];