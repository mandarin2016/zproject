<?php
namespace Zproject\System\Routing{
    class mainRout{
        static $loader; 
        private static function classLoader(string $cn){
            if('Application\\System\\Routing\\classLoaderObj'===$cn){
                require_once __DIR__ ."/compose.php";
            } 
        }

        public static function rout(){
        spl_autoload_register([__CLASS__ ,"classLoader"],true,true);
        self::$loader= new \Zproject\System\Routing\classLoaderObj();
        spl_autoload_unregister([__CLASS__ ,"classLoader"]);
        if(ob_start()){
                self::$loader->init()->superListenner();
                ob_end_flush();
            }
        }
    }
}