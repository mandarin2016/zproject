<?php
namespace Zproject\System\Routing{
    use Application\System\Depends\depRegist as dpnds;
    include __DIR__."/../setup/include.php";
    require_once __DIR__.'/../kernel/dep.registrator.php';


    class classLoaderObj{
        private $varPath,$appSystDepnds;
        private final function compose(string $cn){
            if(array_key_exists($cn,$this->appSystDepnds)){
             if(file_exists($this->appSystDepnds[$cn]))
                require_once($this->appSystDepnds[$cn]);
            } 
        } 

        protected final function TParse(){
            $this->appSystDepnds=$this->buildFinalDepend(require_once($this->varPath."/depends.php"));
        }

        private final function buildFinalDepend(array $dpnds):array{
            $t=[];
            foreach ($dpnds as $dk => $dv) {
                if(!is_array($dv))die("<br> \n 3001 - must be array \n <br>");
                 $t= ($dk==='kernel')?array_merge($t,$this->buildFinalDepend($dv)):($dk==='customs')?array_merge($t,$this->buildFinalDepend($dv)): array_merge($t,$dv);
            }
            ksort($t);return $t;unset($t);
        }

        public final function init(){
            $this->varPath= dirname(dirname(__FILE__)).'/setup';
            $this->TParse();return $this;
        }

        public final function superListenner(){     
                spl_autoload_register([__CLASS__ ,"compose"],true,true);
                spl_autoload_unregister([__CLASS__ ,"compose"]);
        }
    }
}