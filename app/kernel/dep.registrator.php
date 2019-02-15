<?php
namespace Zproject\System\Depends{
    class depRegist{
        private static $deps=[];
        private static $typs=[];
        public static function addItem(string $namespace,string $objFilePath,$category=null){
            if($category!==null){
                (array_key_exists($category,self::$deps))?(is_array(self::$deps[$category]))?:self::$deps[$category]=[]:null;
                self::$deps[$category][$namespace]=$objFilePath;
                self::$typs[$namespace]=$category;
            }else self::$deps[$namespace]=$objFilePath;
        }

        public static function remove(string $namespace, string $category=null){
            if($category!==null){
                unset(self::$deps[$category][$namespace]);
            }else unset(self::$deps[$namespace]);
        }

        public static function addCategory(string $category){
            self::$deps[$category]=[];
        }

        public static function getByCategory($category){
            if(!array_key_exists($category,self::$deps))return null;
            if(is_array(self::$deps[$category])){
                return self::$deps[$category];
            }else return null;
        }


        public static function getCategoryOfClass($namespace){
            if (array_key_exists($namespace,self::$typs)){
                return self::$typs[$namespace];
            }else return false;
        }

        public static function test(){
            echo '<br>Hallo World!!!<br>';
        }
    }
}