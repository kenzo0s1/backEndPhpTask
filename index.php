<?php
class Farm {
    public $arr = array();
    public $production = array();
    public $countAnimal;
    public function addAnimal($value){
        if($this->arr[$value->name] == null){
            $this->arr[$value->name] = array();
        }
        $newObj = (object)[];
        $newObj->name = $value->name;
        $newObj->productionName = $value->productionName;
        $newObj->minProductionValue = $value->minProductionValue;
        $newObj->maxProductionValue = $value->maxProductionValue;

        $newObj->id = count($this->arr[$value->name]);
        $this->arr[$value->name][]= $newObj;
//        echo print_r($this->arr);
    }
    public function showAllAnimal(){
        echo 'Animals:' . '<br>';
        foreach ($this->arr as $row) {
            echo '___' . $row[0]->name . '-' . count($row) . '<br>';
        }
    }
    public function claimProduction(){
        foreach ($this->arr as $row) {
            foreach ($row as $element){
                $min= $element->minProductionValue;
                $max = $element->maxProductionValue;

                $this->production[$element->productionName] += rand($min,$max) ;

            }
        }
    }
    public function countProduction(){
        echo '<br>'. 'All Productions: ' .'<pre>' ;
        print_r($this->production) ;
        echo '</pre>';
    }
    public function countAnimal(){
        foreach ($this->arr as $row){
            $this->countAnimal += count($row);

        }
        echo $this->countAnimal;
    }
}

class Paddock extends Farm {

}


class Animal {
    public $name;
    public $productionName;
    public $minProductionValue;
    public $maxProductionValue;


    public function __construct($name,$production,$minProdValue,$maxProdValue){
        $this->name = $name;
        $this->productionName = $production->productionName;
        $this->minProductionValue = $minProdValue;
        $this->maxProductionValue = $maxProdValue;
    }

}

class Production{
    public $productionName;

    public function __construct($productionName){
        $this->productionName = $productionName;
    }
}

//$paddock->countProduction();
//$paddock->countAnimal();
