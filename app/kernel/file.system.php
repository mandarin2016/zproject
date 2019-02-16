<?php
namespace Zproject\System\Files{
    class aExplorer{

        public static function returnDirs(string $path):array{
            $t=glob($path.'/*');$t1=[];
            foreach($t as $k=>$v ){
                if(is_dir($v))$t1[]=$v;
            };
            return $t1;
        }

        public static function scanPhpInDir(string $path):array{
            return glob($path.'/*.php');
        }
    }
}