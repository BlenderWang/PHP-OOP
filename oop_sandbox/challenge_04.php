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

    class Unicycle extends Bicycle {
        protected static $wheels = 1;

        public function bug_test() {
            return $this->weight_kg;
        }

        // create a method in Unicycle which extends a method in Bicycle by executing code before / after it.
        public static function ride() {
            parent::ride();
            echo "However it is not the same as riding an unicycle. <br>";
        }

        // create a method in Unicycle which overrides a method in Bicycle but then falls back to the original method if the condition is not met.
        public static function wheel_details() {
            if(self::$wheels == 1) {
                echo 'Unicycle has 1 wheel only.';
            }else {
                parent::$wheels;
                echo 'A bicycle has ' . parent::$wheels . ' wheels';
            }
        }
    }

    $trek = new Bicycle();
    $trek->brand = 'Trek';
    $trek->model = 'Edmond';
    $trek->year = 2017;

    echo 'Bicycle count: ' . Bicycle::$instance_count . '<br>';
    echo 'Unicycle count: ' . Unicycle::$instance_count . '<br>';
    echo '<hr>';

    $bike = Bicycle::create();
    $uni = Unicycle::create();

    echo 'Bicycle count: ' . Bicycle::$instance_count . '<br>';
    echo 'Unicycle count: ' . Unicycle::$instance_count . '<br>';
    echo '<hr>';

    echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br>';
    $trek->category = Bicycle::CATEGORIES[1];
    echo 'Category: ' . $trek->category . '<br>';
    echo '<hr>';

    echo Bicycle::wheel_details() . '<br>';
    echo Unicycle::wheel_details() . '<br>';

    echo '<hr>';
    echo 'Bicycle: ' . '<br>';
    Bicycle::ride();
    echo '<br>';
    echo 'Unicycle: ' . '<br>';
    Unicycle::ride();

    echo '<hr>';
    echo Bicycle::wheel_details() . '<br>';
    echo Unicycle::wheel_details() . '<br>';
?>