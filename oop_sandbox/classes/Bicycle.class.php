<?php
    class Bicycle {
        public $brand;
        public $model;
        public $year;
        public $description = 'new';
        private $weight_kg = 0;

        protected static $wheels = 2;

        public static $instance_count = 0;

        public static function create() {
            $class_name = get_called_class();   // get the class from runtime
            $obj = new $class_name;
            // $obj = new static;   // equal to $class_name

            self::$instance_count++;
            return $obj;
        }

        public const CATEGORIES = ['Road', 'Hybrid', 'Mountain', 'Cruiser', 'City', 'BMX'];

        public $category;

        public static function wheel_details() {
            $wheels_str = static::$wheels == 1 ? '1 wheel' : static::$wheels . " wheels";
            return "It has " . $wheels_str . '.<br>';
        }

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

        // extra steps ...

        public static function ride() {
            echo "Once you've learned how to ride a bicycle, you will never forget. <br>";
        }

        public static $switch_gear = true;

        public static function current_gear() {
            echo 'This bike can switch gears.';
        }

    }
?>