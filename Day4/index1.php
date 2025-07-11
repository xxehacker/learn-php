<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditions and Control Structures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
        }
        header {
            background-color: #28a745;
            color: white;
            padding: 15px;
            text-align: center;
        }
        main {
            background-color: white;
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
            color: #28a745;
        }
        pre {
            background-color: #eee;
            padding: 10px;
            border-left: 5px solid #28a745;
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
        <h1>PHP Conditions and Control Structures</h1>
    </header>

    <main>
        <section>
            <h2>1. if Statement</h2>
            <pre><code>&lt;?php
$age = 20;
if ($age >= 18) {
    echo "You are an adult.";
}
?&gt;</code></pre>
        </section>

        <section>
            <h2>2. if-else Statement</h2>
            <pre><code>&lt;?php
$score = 45;
if ($score >= 50) {
    echo "You passed.";
} else {
    echo "You failed.";
}
?&gt;</code></pre>
        </section>

        <section>
            <h2>3. if-elseif-else</h2>
            <pre><code>&lt;?php
$marks = 75;
if ($marks >= 90) {
    echo "Grade A";
} elseif ($marks >= 70) {
    echo "Grade B";
} else {
    echo "Grade C";
}
?&gt;</code></pre>
        </section>

        <section>
            <h2>4. switch Statement</h2>
            <pre><code>&lt;?php
$day = "Wednesday";
switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Wednesday":
        echo "Midweek";
        break;
    case "Friday":
        echo "Weekend starts";
        break;
    default:
        echo "Just another day";
}
?&gt;</code></pre>
        </section>

        <section>
            <h2>5. while Loop</h2>
            <pre><code>&lt;?php
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
?&gt;</code></pre>
        </section>

        <section>
            <h2>6. do-while Loop</h2>
            <pre><code>&lt;?php
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
?&gt;</code></pre>
        </section>

        <section>
            <h2>7. for Loop</h2>
            <pre><code>&lt;?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
?&gt;</code></pre>
        </section>

        <section>
            <h2>8. foreach Loop</h2>
            <pre><code>&lt;?php
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo $color . " ";
}
?&gt;</code></pre>
        </section>


        <section>
    <h2>9. match Expression (PHP 8+)</h2>
    <pre><code>&lt;?php
$grade = 'B';

$result = match ($grade) {
    'A' => 'Excellent',
    'B' => 'Good',
    'C' => 'Fair',
    'D' => 'Poor',
    default => 'Invalid grade',
};

echo $result;  // Output: Good
?&gt;</code></pre>
</section>


    </main>

    <footer>
        &copy; 2025 PHP Learning Hub. All rights reserved.
    </footer>

</body>
</html>
