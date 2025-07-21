<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7: Internal (Built-in) Functions in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            color: #333;
            padding: 20px;
        }

        h1 {
            color: #0a58ca;
            border-bottom: 3px solid #0a58ca;
            padding-bottom: 10px;
        }

        h2 {
            color: #198754;
            margin-top: 30px;
        }

        p,
        div {
            background-color: #fff;
            border-left: 5px solid #0d6efd;
            padding: 10px;
            margin: 10px 0;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        code {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Day 7: Internal (Built-in) Functions in PHP</h1>

    <h2>1. String Functions</h2>
    <?php
    echo "<div>Length of 'Hello': <code>" . strlen("Hello") . "</code></div>";
    echo "<div>Reverse of 'hello': <code>" . strrev("hello") . "</code></div>";
    echo "<div>Uppercase 'php': <code>" . strtoupper("php") . "</code></div>";
    echo "<div>Lowercase 'PHP': <code>" . strtolower("PHP") . "</code></div>";
    echo "<div>Position of 'e' in 'hello': <code>" . strpos("hello", "e") . "</code></div>";
    echo "<div>Replace 'world' with 'PHP': <code>" . str_replace("world", "PHP", "Hello world") . "</code></div>";
    ?>

    <h2>2. Math Functions</h2>
    <?php
    echo "<div>Absolute of -5: <code>" . abs(-5) . "</code></div>";
    echo "<div>Square root of 16: <code>" . sqrt(16) . "</code></div>";
    echo "<div>2 power 3: <code>" . pow(2, 3) . "</code></div>";
    echo "<div>Round 3.6: <code>" . round(3.6) . "</code></div>";
    echo "<div>Random number (1-10): <code>" . rand(1, 10) . "</code></div>";
    echo "<div>Max of (1, 5, 8): <code>" . max(1, 5, 8) . "</code></div>";
    echo "<div>Min of (2, 4, -1): <code>" . min(2, 4, -1) . "</code></div>";
    ?>

    <h2>3. Array Functions</h2>
    <?php
    $arr = array("apple", "banana", "cherry");
    echo "<div>Count: <code>" . count($arr) . "</code></div>";
    array_push($arr, "mango");
    echo "<div>After push: <code>" . implode(", ", $arr) . "</code></div>";
    array_pop($arr);
    echo "<div>After pop: <code>" . implode(", ", $arr) . "</code></div>";
    $arr2 = array("grape", "orange");
    $merged = array_merge($arr, $arr2);
    echo "<div>Merged: <code>" . implode(", ", $merged) . "</code></div>";
    echo "<div>Is 'banana' in array? <code>" . (in_array("banana", $arr) ? "Yes" : "No") . "</code></div>";
    echo "<div>Reversed: <code>" . implode(", ", array_reverse($arr)) . "</code></div>";
    ?>

    <h2>4. Date and Time Functions</h2>
    <?php
    echo "<div>Current Date: <code>" . date("Y-m-d H:i:s") . "</code></div>";
    echo "<div>Current Timestamp: <code>" . time() . "</code></div>";
    echo "<div>Timestamp for next Sunday: <code>" . strtotime("next Sunday") . "</code></div>";
    echo "<div>Custom timestamp (21 July 2025): <code>" . mktime(0, 0, 0, 7, 21, 2025) . "</code></div>";
    ?>

    <h2>5. File System Functions (Demo Only)</h2>
    <?php
    $filename = "sample.txt";
    if (!file_exists($filename)) {
        file_put_contents($filename, "Hello, File!");
    }
    echo "<div>File exists? <code>" . (file_exists($filename) ? "Yes" : "No") . "</code></div>";
    echo "<div>File contents: <code>" . file_get_contents($filename) . "</code></div>";
    // unlink($filename); // delete the file
    ?>

    <h2>6. Variable Handling Functions</h2>
    <?php
    $x = 100;
    echo "<div>Is \$x set? <code>" . (isset($x) ? "Yes" : "No") . "</code></div>";
    $emptyVar = "";
    echo "<div>Is \$emptyVar empty? <code>" . (empty($emptyVar) ? "Yes" : "No") . "</code></div>";
    echo "<div>Type of \$x: <code>" . gettype($x) . "</code></div>";
    echo "<div>Value of \$x before unset: <code>$x</code></div>";
    unset($x);
    echo "<div>Is \$x still set? <code>" . (isset($x) ? "Yes" : "No") . "</code></div>";
    ?>

    <h2>7. PHP Info & Environment</h2>
    <?php
    echo "<div>PHP Version: <code>" . phpversion() . "</code></div>";
    echo "<div>OS: <code>" . PHP_OS . "</code></div>";
    echo "<div>PHP_INT_MAX: <code>" . PHP_INT_MAX . "</code></div>";
    echo "<div>PHP_FLOAT_MAX: <code>" . PHP_FLOAT_MAX . "</code></div>";
    // phpinfo(); // show full PHP config
    ?>
    <h2>8. Type Checking Functions</h2>
    <?php
    $val1 = 42;
    $val2 = "hello";
    $val3 = 3.14;
    echo "<div>is_int(42): <code>" . (is_int($val1) ? "Yes" : "No") . "</code></div>";
    echo "<div>is_string('hello'): <code>" . (is_string($val2) ? "Yes" : "No") . "</code></div>";
    echo "<div>is_float(3.14): <code>" . (is_float($val3) ? "Yes" : "No") . "</code></div>";
    echo "<div>is_numeric('42'): <code>" . (is_numeric("42") ? "Yes" : "No") . "</code></div>";
    ?>

    <h2>9. Superglobals (GET, POST, SERVER)</h2>
    <?php
    echo "<div>\$_SERVER['PHP_SELF']: <code>" . $_SERVER['PHP_SELF'] . "</code></div>";
    echo "<div>\$_SERVER['SERVER_NAME']: <code>" . $_SERVER['SERVER_NAME'] . "</code></div>";
    echo "<div>\$_SERVER['HTTP_HOST']: <code>" . $_SERVER['HTTP_HOST'] . "</code></div>";
    echo "<div>\$_SERVER['REQUEST_METHOD']: <code>" . $_SERVER['REQUEST_METHOD'] . "</code></div>";
    ?>

    <h2>10. Miscellaneous Functions</h2>
    <?php
    echo "<div>uniqid(): <code>" . uniqid() . "</code></div>";
    echo "<div>md5('hello'): <code>" . md5('hello') . "</code></div>";
    echo "<div>sha1('hello'): <code>" . sha1('hello') . "</code></div>";
    echo "<div>getenv('PATH'): <code>" . getenv('PATH') . "</code></div>";
    echo "<div>microtime(): <code>" . microtime() . "</code></div>";
    ?>

    <h2>11. JSON Functions</h2>
    <?php
    $person = array("name" => "Mridupawan", "age" => 23);
    $json = json_encode($person);
    echo "<div>json_encode(): <code>$json</code></div>";
    echo "<div>json_decode(): <code>" . print_r(json_decode($json, true), true) . "</code></div>";
    ?>

    <h2>12. URL Functions</h2>
    <?php
    $url = "https://example.com/index.php?name=test&age=23";
    $parsed = parse_url($url);
    echo "<div>parse_url(): <code>" . print_r($parsed, true) . "</code></div>";
    echo "<div>urlencode('Hello World!'): <code>" . urlencode("Hello World!") . "</code></div>";
    echo "<div>urldecode('Hello+World%21'): <code>" . urldecode("Hello+World%21") . "</code></div>";
    ?>

</body>

</html>