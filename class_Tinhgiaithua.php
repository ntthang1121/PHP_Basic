<?php
    class GiaiThua{
        protected $n2 ;
        public function __construct($n){
            if(!is_int($n)){
                echo "Hãy nhập số";
            }
            $this->n2 = $n;
        }
        public function tinh_giai_thua(){
            $result = 1;
            for($i = 1;$i<= $this->n2;$i++){
                $result *= $i;
            }
            return $result;
        }
    }
    $gt = new GiaiThua(5);
    echo $gt->tinh_giai_thua();



?>