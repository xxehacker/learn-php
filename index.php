<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 PHP</title>
</head>
<body style="background-color:rgb(0, 0, 0); color:white; font-family: Arial, sans-serif;">
   <!-- Day 1 PHP -->
    <?php
    echo 'Hello World';
    echo '<br>';
    echo '<br>';
    // Variable and Data Types
    echo "<h3>Variable and Data Types</h3>";
    $name = 'Mridupawan Bordoloi'; // string
    $age = 20; // integer
    $isStudent = false; // boolean
    $gpa = 3.0; // float
    $friends = array("Mridupawan", "Bordoloi", "Dhunu"); // array
    echo 'The value of gpa is: ' . $gpa;
    echo '<br>';
    //! Associative array is an array that allows you to store key-value pairs.
    $address = array('street' => '123 Main St', 'city' => 'Guwahati', 'state' => 'Assam'); // associative array
    $gpa = 3.5; // reassigning the value of $gpa

    echo $name;
    echo '<br>';
    echo $age;
    echo '<br>';
    echo $isStudent;
    echo '<br>';
    echo $gpa;
    echo '<br>';
    echo $friends[0];
    echo '<br>';
    echo $address['street'];
    echo '<br>';
    echo $address['city'];
    echo '<br>';
    echo $address['state'];
    echo '<br>';
    echo $friends[1];
    echo '<br>';
    echo $friends[2];
    echo '<br>';
    echo $gpa;
    echo '<br>';
    echo 'The value of gpa is: ' . $gpa;
    echo '<br>';

    // Additional Examples for Variables and Data Types
    echo '<br>';
    echo '<h4>Additional Variable and Data Type Examples</h4>';
    $email = "mridu@example.com"; // string example
    echo 'Email: ' . $email;
    echo '<br>';
    $height = 5.9; // float example
    echo 'Height: ' . $height . ' feet';
    echo '<br>';
    $hobbies = array("Reading", "Coding", "Gaming"); // another array example
    echo 'First hobby: ' . $hobbies[0];
    echo '<br>';
    $car = array('brand' => 'Toyota', 'model' => 'Corolla', 'year' => 2020); // another associative array
    echo 'Car brand: ' . $car['brand'];
    echo '<br>';
    $isEmployed = true; // boolean example
    echo 'Is employed: ' . ($isEmployed ? 'Yes' : 'No');
    echo '<br>';

    // Operators
    echo '<br>';
    echo '<h3>Operators</h3>';
    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x - $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x * $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x / $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x % $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x ** $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';

    // Additional Examples for Operators
    echo '<br>';
    echo '<h4>Additional Operator Examples</h4>';
    $a = 15;
    $b = 4;
    echo 'Addition: ' . ($a + $b);
    echo '<br>';
    echo 'Subtraction: ' . ($a - $b);
    echo '<br>';
    echo 'Multiplication: ' . ($a * $b);
    echo '<br>';
    echo 'Division: ' . ($a / $b);
    echo '<br>';
    echo 'Modulus: ' . ($a % $b);
    echo '<br>';
    echo 'Exponentiation: ' . ($a ** 2); // 15^2
    echo '<br>';

    // Comparison Operators
    echo '<br>';
    echo '<h3>Comparison Operators</h3>';
    $x = 10;
    $y = 20;
    $z = $x == $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x != $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x > $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x < $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x >= $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x <= $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x <=> $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';

    // Additional Examples for Comparison Operators
    echo '<br>';
    echo '<h4>Additional Comparison Operator Examples</h4>';
    $p = 5;
    $q = "5";
    echo 'Equal (==): ' . ($p == $q); // true because of type coercion
    echo '<br>';
    echo 'Identical (===): ' . ($p === $q); // false because different types
    echo '<br>';
    echo 'Not equal (!=): ' . ($p != $q); // false
    echo '<br>';
    echo 'Not identical (!==): ' . ($p !== $q); // true
    echo '<br>';
    echo 'Greater than (>): ' . ($p > 3); // true
    echo '<br>';
    echo 'Spaceship (<=>): ' . ($p <=> 7); // -1 because 5 < 7
    echo '<br>';

    // Logical Operators
    echo '<br>';
    echo '<h3>Logical Operators</h3>';
    $x = 10;
    $y = 20;
    $z = $x && $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x || $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = $x xor $y;
    echo 'The value of z is: ' . $z;
    echo '<br>';
    $z = !$x;
    echo 'The value of z is: ' . $z;
    echo '<br>';

    // Additional Examples for Logical Operators
    echo '<br>';
    echo '<h4>Additional Logical Operator Examples</h4>';
    $m = true;
    $n = false;
    echo 'AND (&&): ' . ($m && $n); // false
    echo '<br>';
    echo 'OR (||): ' . ($m || $n); // true
    echo '<br>';
    echo 'XOR: ' . ($m xor $n); // true
    echo '<br>';
    echo 'NOT (!): ' . (!$m); // false
    echo '<br>';
    echo 'Complex: ' . (($m || $n) && !$n); // true
    echo '<br>';

    // Conditional Statements
    echo '<br>';
    echo '<h3>Conditional Statements</h3>';
    $x = 10;
    $y = 20;
    if($x > $y){
        echo 'x is greater than y';
    }
    else{
        echo 'x is not greater than y';
    }
    echo '<br>';

    // Additional Examples for Conditional Statements
    echo '<br>';
    echo '<h4>Additional Conditional Statement Examples</h4>';
    $score = 85;
    if ($score >= 90) {
        echo 'Grade: A';
    } elseif ($score >= 80) {
        echo 'Grade: B';
    } elseif ($score >= 70) {
        echo 'Grade: C';
    } else {
        echo 'Grade: F';
    }
    echo '<br>';
    $isRaining = true;
    if ($isRaining) {
        echo 'Take an umbrella!';
    } else {
        echo 'Enjoy the sunshine!';
    }
    echo '<br>';

    // Nested if Statement
    echo '<br>';
    echo '<h3>Nested if Statement</h3>';
    $x = 10;
    $y = 20;
    if($x > $y){
        echo 'x is greater than y';
    }
    else{
        echo 'x is not greater than y';
    }
    echo '<br>';

    // Additional Examples for Nested if Statements
    echo '<br>';
    echo '<h4>Additional Nested if Statement Examples</h4>';
    $age = 25;
    $isMember = true;
    if ($age >= 18) {
        if ($isMember) {
            echo 'Adult member: Full access granted';
        } else {
            echo 'Adult non-member: Limited access';
        }
    } else {
        echo 'Under 18: No access';
    }
    echo '<br>';
    $temperature = 30;
    $isSunny = false;
    if ($temperature > 25) {
        if ($isSunny) {
            echo 'Hot and sunny: Wear sunscreen!';
        } else {
            echo 'Hot but cloudy: Stay hydrated!';
        }
    } else {
        echo 'Cool weather: Enjoy!';
    }
    echo '<br>';

    // Switch Statement 
    echo '<br>';
    echo '<h3>Switch Statement</h3>';
    $x = 10;
    switch($x){
        case 10:
            echo 'x is 10';
            break;
        case 20:
            echo 'x is 20';
            break;
        default:
            echo 'x is not 10 or 20';
    }
    echo '<br>';
    $x = 10;
    switch($x){
        case 10:
            echo 'x is 10';
            break;
        case 20:
            echo 'x is 20';
            break;
        default:
            echo 'x is not 10 or 20';
    }
    echo '<br>';

    ?>
</body>
</html>