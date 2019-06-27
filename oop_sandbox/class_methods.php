<?php
    class Student {
        var $first_name;
        var $last_name;
        var $country = 'None';

        function sayHello() {
            return 'Hello world!';
        }

        function full_name() {
            return $this->first_name . ' ' . $this->last_name;
        }
    }

    $student1 = new Student();
    $student1->first_name = 'Lucy';
    $student1->last_name = 'Ricardo';

    $student2 = new Student();
    $student2->first_name = 'Ethel';
    $student2->last_name = 'Mertz';

    echo $student1->full_name() . '<br>';
    echo $student2->full_name() . '<br>';

    echo $student1->sayHello() . '<br>';
    echo $student2->sayHello() . '<br>';

    $class_methods = get_class_methods('Student');
    echo "Class methods: " . implode(', ', $class_methods) . '<br>';

    if(method_exists('Student', 'sayHello')) {
        echo "Method sayHello exists in class Student. <br>";
    }else {
        echo "Method sayHello does not exist in class Student. <br>";
    }
?>