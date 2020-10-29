<?php
    class myClass{
        public $th = "xin chao";
        public function dung($name){
            return $this->th. $name;
        }
    }
    $haha = new myClass();
    echo $haha->dung('thang');





?>