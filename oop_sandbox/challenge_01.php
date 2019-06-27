<?php
    class Bicycle {
        var $brand;
        var $model;
        var $year;
        var $description = 'new';
        var $weight_kg = 0;

        function name() {
            return $this->brand . '  ' . $this->model . "  " . $this->year;
        }

        function weight_lbs() {
            return floatval($this->weight_kg) * 2.2046226218;
        }

        function set_weight_lbs($lbs) {
            return floatval($lbs) / 2.2046226218 . 'kg';
        }
    }

    $bicycle1 = new Bicycle();
    $bicycle1->brand = 'Fiat';
    $bicycle1->model = 'XZ0418';
    $bicycle1->year = 2016;
    $bicycle1->weight_kg = 2;

    echo $bicycle1->name() . '<br>';
    echo 'Weight in lbs: ' . $bicycle1->weight_lbs() . 'lbs' . '<br>';
    echo 'Weight in kg: ' . $bicycle1->set_weight_lbs(2) . '<br>';
?>