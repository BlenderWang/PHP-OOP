<?php
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
?>