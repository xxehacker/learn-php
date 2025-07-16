<!-- calculator.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Day 5 - Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    #form {
      background: #fff;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      gap: 15px;
      width: 300px;
    }

    label {
      font-weight: bold;
    }

    input,
    select,
    button {
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #28a745;
      color: white;
      cursor: pointer;
      border: none;
    }

    button:hover {
      background-color: #218838;
    }

    #result {
      margin-top: 10px;
      font-weight: bold;
      color: #333;
    }

    .cal-error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <form id="form" method="post" action="">
    <label for="num1">Number 1</label>
    <input type="number" name="num1" id="num1" required />

    <label for="num2">Number 2</label>
    <input type="number" name="num2" id="num2" required />

    <label for="operator">Operator</label>
    <select name="operator" id="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>

    <button type="submit">Calculate</button>

    <div id="result"> 

      <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $op = htmlspecialchars($_POST['operator']);

    $errors = false;

    if ($num1 === '' || $num2 === '' || $op === '') {
        echo "<p class='cal-error'>Please fill all the fields!</p>";
        $errors = true;
    } elseif (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<p class='cal-error'>Please enter valid numeric values!</p>";
        $errors = true;
    }

    if (!$errors) {
        switch ($op) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    echo "<p class='cal-error'>Cannot divide by zero!</p>";
                    $result = null;
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "<p class='cal-error'>Invalid operator!</p>";
                $result = null;
        }
        // ! isset() is a PHP built-in function that checks if a variable is set and is not null.
        if (isset($result)) {
            echo "Result: $result";
        }
    }
}
?>
    </div>
  </form>
</body>
</html>
