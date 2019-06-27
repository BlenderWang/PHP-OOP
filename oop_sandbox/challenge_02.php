<?php
    class Drawing {
        var $author;
        var $title;
        var $year;

        function description() {
            return $this->title . " ($this->year)" . ' by '. $this->author . '<br>';
        }
    }

    class Digital extends Drawing {
        var $file_size;

        function output_size() {
            return 'The size of this painting is ' . $this->file_size . 'MB. <br>';
        }
    }

    class Traditional extends Drawing {
        var $is_colored = false;

        function style() {
            if($this->is_colored) {
                echo 'This image is colored.';
            }else {
                echo 'This image is black and white.';
            }
        }
    }

    $digital1 = new Digital();
    $digital1->author = 'Kathy B';
    $digital1->title = 'Untitled';
    $digital1->year = 2019;
    $digital1->file_size = 26.1;

    echo $digital1->description();
    echo $digital1->output_size();

    $tradional1 = new Traditional();
    $tradional1->author = 'Kenny Stall';
    $tradional1->year = 1984;
    $tradional1->title = 'The Cube';
    // $tradional1->is_colored = false;

    echo $tradional1->description();
    echo $tradional1->style();
?>