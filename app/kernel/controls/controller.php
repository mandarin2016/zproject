<?php
namespace zproject\app\controllers{
    use zproject\app\intfc\{ModeInt,ViewInt};
    class KernelControl{
        protected $model=null,$view=null;
        /**
         * inicialize KernelControl
         * 
         * @param ModelInt $pushModel - pushed by child control class model,
         * by default null
         * @param ViewInt $pushViewer - pushed by child control class viewer,
         * by default null
         */
        public function __construct(ModelInt $pushModel=null,ViewInt $pushView=null){
            $this->model=($pushModel!=null)?$pushModel:new \zproject\app\models\KernelModel();
            $this->view=($pushView!=null)?$pushView:new \zproject\app\views\KernelView();
                }
        }
        
        protected function buildPage($parts){
            $this->viewe->generate($page);
        }

    }
}