<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators with Examples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        main {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px auto;
            max-width: 900px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        section {
            margin-bottom: 30px;
        }
        h2 {
            color: #007BFF;
        }
        pre {
            background-color: #eee;
            padding: 10px;
            border-left: 5px solid #007BFF;
            overflow-x: auto;
        }
        code {
            font-family: Consolas, monospace;
        }
        footer {
            text-align: center;
            color: #777;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>PHP Operators with Examples</h1>
    </header>

    <main>
        <section>
            <h2>1. Arithmetic Operators</h2>
            <p>Used for mathematical calculations:</p>
            <pre><code>&lt;?php
$a = 10;
$b = 5;
echo $a + $b;  // 15
echo $a - $b;  // 5
echo $a * $b;  // 50
echo $a / $b;  // 2
echo $a % $b;  // 0
?&gt;</code></pre>
        </section>

        <section>
            <h2>2. Assignment Operators</h2>
            <p>Used to assign values to variables:</p>
            <pre><code>&lt;?php
$x = 10;
$x += 5;  // $x = $x + 5 → 15
$x -= 3;  // $x = $x - 3 → 12
$x *= 2;  // $x = $x * 2 → 24
$x /= 6;  // $x = $x / 6 → 4
$x %= 3;  // $x = $x % 3 → 1
?&gt;</code></pre>
        </section>

        <section>
            <h2>3. Comparison Operators</h2>
            <p>Used to compare two values:</p>
            <pre><code>&lt;?php
$a = 10;
$b = 5;
var_dump($a == $b);  // false
var_dump($a != $b);  // true
var_dump($a &gt; $b);   // true
var_dump($a &lt; $b);   // false
var_dump($a &gt;= 10);  // true
var_dump($a === "10"); // false (strict comparison)
?&gt;</code></pre>
        </section>

        <section>
            <h2>4. Logical Operators</h2>
            <p>Used to combine conditional statements:</p>
            <pre><code>&lt;?php
$a = true;
$b = false;
var_dump($a && $b); // false
var_dump($a || $b); // true
var_dump(!$a);      // false
?&gt;</code></pre>
        </section>

        <section>
            <h2>5. Increment/Decrement Operators</h2>
            <p>Used to increase or decrease a variable's value:</p>
            <pre><code>&lt;?php
$a = 5;
echo ++$a; // 6 (pre-increment)
echo $a--; // 6 (post-decrement, then becomes 5)
echo $a;   // 5
?&gt;</code></pre>
        </section>

        <section>
            <h2>6. String Operators</h2>
            <p>Used to manipulate strings:</p>
            <pre><code>&lt;?php
$first = "Hello";
$second = "World";
echo $first . " " . $second; // Hello World
$first .= " PHP";
echo $first; // Hello PHP
?&gt;</code></pre>
        </section>
    </main>

    <footer>
        &copy; 2025 PHP Learning Hub. All rights reserved.
    </footer>

</body>
</html>
