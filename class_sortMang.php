<?php
    class myArr{
        protected $a_sort;
        public function __Construct(array $arr){
            $this->a_sort = $arr;
        }
        public function sap_xep(){
            $sorted = $this -> a_sort;
            sort($sorted);
            return $sorted;
        }

    }
    $a = new myArr(array(11, -2, 4, 35, 0, 8, -9));
    print_r($a->sap_xep());



?>