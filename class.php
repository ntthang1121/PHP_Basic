<?php
    Class infor{
        public $name;
        public $age;
        
        public function __Construct(String $name, Int $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function getName(){
            if($this->name != ""){
                echo "get success";
            }
            else{
                echo "Loi";
            }
        }

        public function __toString(){
            return $this->name;
        }

    }
    $thang = new infor('thao', 12);
    echo $thang;










?>