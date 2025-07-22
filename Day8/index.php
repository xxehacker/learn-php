<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 8 - var_dump , print_r,Constants etc</title>
</head>
<body>
    
    <h2>var_dump</h2>
    <?php 
        $a = array(1, 2.3, 3, "Hello", 5);
        var_dump($a);

    ?>

    <h2>print_r</h2>
    <?php 
        $a = array(1, 2, 3, 4, 5);  
        print_r($a);

    ?>

    <!-- Constants -->
    <h2>Constants</h2>
    <?php 
        define("NAME", "Mridupawan");
        echo NAME;
        echo "<br>";
    ?>

    <!-- Magic Constants -->
    <h2>Magic Constants</h2>
    <?php
        $x="Hello World";
        echo "$x. The current Line number is " . __LINE__ . ".";
        echo "</br>";
    ?>
    <?php
        $x="Hello World";
        echo "$x. Current PHP script name is " . __FILE__ . ".";
        echo "</br>";
    ?>
    <?php
        function hello(){    
            $x="Hello World";  
            echo "$x. The function name is ". __FUNCTION__ . "";  
            echo "</br>"; 
        } 
        hello();   
    ?>
    <?php
        class myclass {    
            public function __construct() {    
                echo "Inside the constructor of ". __CLASS__ . PHP_EOL;
                echo "</br>";   
            }    
            function getClassName(){                      
                echo "from an instance method of " . __CLASS__ . "";
                echo "</br>";   
            }    
        }    
        $obj = new myclass;    
        $obj->getClassName();    
    ?>
    <?php
        class myclass {    
            public function __construct() {    
                echo "Calling " . __METHOD__ . " of " . __CLASS__ ."<br>";
                echo "</br>";
            }    
            function mymethod(){                      
                echo "Calling " . __METHOD__ . " of " . __CLASS__ ."";
                echo "</br>";
            }    
        }    
        $obj = new myclass;    
        $obj->mymethod();
    ?>
    <?php
        trait mytrait {
            public function hello() {
                echo "Hello World from " . __TRAIT__ ."";
                echo "</br>";
            }
        }
        class myclass {
            use mytrait;
        }
        $obj = new myclass();
        $obj->hello();
    ?>
    <?php
        // namespace myspace;
        class myclass {    
            public function __construct() {    
                echo "Name of the class: " . __CLASS__ . " in " . __NAMESPACE__ . "";
                echo "</br>"; 
            }     
        }    
        $class_name = __NAMESPACE__ . '\myclass';    
        $a = new $class_name;   
    ?>
    




</body>
</html>