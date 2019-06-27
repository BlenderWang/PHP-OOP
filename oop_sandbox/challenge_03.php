<?php
    class Bicycle {
        public $brand;
        public $model;
        public $year;
        public $description = 'new';
        private $weight_kg = 0;
        protected $wheels = 2;

        public function name() {
            return $this->brand . '  ' . $this->model . "  " . $this->year;
        }

        public function weight_lbs() {
            return floatval($this->weight_kg) * 2.2046226218 . 'lbs' . '<br>';
        }

        public function set_weight_lbs($lbs) {
            return floatval($lbs) / 2.2046226218 . 'kg';
        }

        public function set_weight_kg($value) {
            $this->weight_kg = floatval($value);
        }

        public function weight_kg() {
            return $this->weight_kg . 'kg';
        }

        public function wheel_details() {
            $wheels_str = $this->wheels == 1 ? '1 wheel' : "{$this->wheels} wheels";
            return "It has " . $wheels_str . '.<br>';
        }
    }

    class Unicycle extends Bicycle {
        protected $wheels = 1;

        public function bug_test() {
            return $this->weight_kg;
        }
    }

    $bicycle1 = new Bicycle();
    echo 'Bicycle: ' . $bicycle1->wheel_details() . '<br>';
    $bicycle1->set_weight_kg(1);
    echo $bicycle1->weight_kg() . '<br>';
    echo $bicycle1->weight_lbs() . '<br>';
    echo '<hr>';

    $unicycle1 = new Unicycle();
    echo 'Unicycle: ' . $unicycle1->wheel_details() . '<br>';
    $unicycle1->set_weight_kg(0.5);
    echo $unicycle1->weight_kg() . '<br>';
    echo $unicycle1->weight_lbs() . '<br>';
    echo '<hr>';

    echo $unicycle1->bug_test() . '<br>';

?>