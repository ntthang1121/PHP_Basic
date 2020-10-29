<?php
    class myArr{
        protected $so1,$so2;
        public function __Construct($a,$b){
            $this->so1 = $a;
            $this->so2 = $b;
        }
        public function Cong(){
            $soA = $this->so1;
            $soB = $this->so2;
            return $soA + $soB;
        }
        public function Tru(){
            $soA = $this->so1;
            $soB = $this->so2;
            return $soA - $soB;
        }
        public function Nhan(){
            $soA = $this->so1;
            $soB = $this->so2;
            return $soA * $soB;
        }
        public function Chia(){
            $soA = $this->so1;
            $soB = $this->so2;
            return $soA / $soB;
        }
    }
    $arr = new myArr(8,4);
    echo $arr->Cong()."<br>";
    echo $arr->Tru()."<br>";
    echo $arr->Nhan()."<br>";
    echo $arr->Chia()."<br>";






?>