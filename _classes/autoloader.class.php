<?php
namespace freamework
{
    
    class autoloader
    {   
            private function __construct()
            {
                
            }

            private function __clone()
            {
                
            }
            public static function  autoload($calssname)
            {
                
                echo $calssname;
            
            }
    }
}