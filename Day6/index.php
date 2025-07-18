<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Day 6 - Arrays in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        h1,
        h2 {
            color: #2c3e50;
        }

        .output {
            background: #ecf0f1;
            padding: 12px;
            border-left: 5px solid #3498db;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }

        .label {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Day 6 - Arrays and Arrays methods in PHP</h1>
    <h2>Indexed Arrays</h2>

    <?php
    $colors = ["red", "green", "blue"];
    echo "<div class='output'><span class='label'>Colors:</span> " . implode(", ", $colors) . "</div>";

    $colors[] = "yellow";
    $colors[] = "black";

    echo "<div class='output'><span class='label'>Total colors:</span> " . count($colors) . "</div>";

    unset($colors[1]);
    echo "<div class='output'><span class='label'>After unset:</span> " . implode(", ", $colors) . "</div>";

    array_push($colors, "white", "gray");
    echo "<div class='output'><span class='label'>After push:</span> " . implode(", ", $colors) . "</div>";

    array_pop($colors);
    array_shift($colors);
    echo "<div class='output'><span class='label'>After pop & shift:</span> " . implode(", ", $colors) . "</div>";

    array_unshift($colors, "brown");
    echo "<div class='output'><span class='label'>After unshift:</span> " . implode(", ", $colors) . "</div>";

    sort($colors);
    echo "<div class='output'><span class='label'>Sorted colors:</span> " . implode(", ", $colors) . "</div>";

    $reversed = array_reverse($colors);
    echo "<div class='output'><span class='label'>Reversed:</span> " . implode(", ", $reversed) . "</div>";

    $moreColors = ["pink", "violet"];
    $merged = array_merge($colors, $moreColors);
    echo "<div class='output'><span class='label'>Merged colors:</span> " . implode(", ", $merged) . "</div>";

    $sliced = array_slice($merged, 1, 3);
    echo "<div class='output'><span class='label'>Sliced (index 1 to 3):</span> " . implode(", ", $sliced) . "</div>";

    $spliceColors = ["a", "b", "c", "d"];
    array_splice($spliceColors, 1, 2, ["x", "y"]);
    echo "<div class='output'><span class='label'>Spliced array:</span> " . implode(", ", $spliceColors) . "</div>";

    echo "<div class='output'>" . (in_array("pink", $merged) ? "<span class='highlight'>Pink is in the array.</span>" : "Pink is not in the array.") . "</div>";

    $searchIndex = array_search("violet", $merged);
    echo "<div class='output'><span class='label'>Violet found at index:</span> $searchIndex</div>";

    $dupColors = ["red", "green", "red", "blue", "green"];
    $uniqueColors = array_unique($dupColors);
    echo "<div class='output'><span class='label'>Unique colors:</span> " . implode(", ", $uniqueColors) . "</div>";

    $associative = ["name" => "Alice", "age" => 25, "city" => "Delhi"];
    echo "<div class='output'><span class='label'>Keys:</span> " . implode(", ", array_keys($associative)) . "<br><span class='label'>Values:</span> " . implode(", ", array_values($associative)) . "</div>";

    $string = "banana,apple,mango";
    $fruitArray = explode(",", $string);
    echo "<div class='output'><span class='label'>Exploded:</span> " . implode(" | ", $fruitArray) . "<br><span class='label'>Imploded back:</span> " . implode(", ", $fruitArray) . "</div>";
    ?>
</body>

</html>