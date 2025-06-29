<?php
session_start();  // Required for $_SESSION to work
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobals Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        form {
            margin-bottom: 20px;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <h1>Superglobal: $_GET</h1>
    <p>Use <code>?name=YourName</code> in the URL.</p>
    <pre><?php echo htmlspecialchars($_GET['name'] ?? 'Not Set'); ?></pre>

    <h1>Superglobal: $_POST</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit (POST)">
    </form>
    <pre><?php echo htmlspecialchars($_POST['name'] ?? 'Not Set'); ?></pre>

    <h1>Superglobal: $_REQUEST</h1>
    <form method="get">
        <label for="fullname">Full Name (GET):</label><br>
        <input type="text" name="fullname" id="fullname" placeholder="Enter full name">
        <input type="submit" value="Submit (GET)">
    </form>

    <form method="post">
        <label for="age">Age (POST):</label><br>
        <input type="number" name="age" id="age" placeholder="Enter age">
        <input type="submit" value="Submit (POST)">
    </form>

    <pre>
Full Name: <?php echo htmlspecialchars($_REQUEST['fullname'] ?? 'Not Set'); ?>
Age: <?php echo htmlspecialchars($_REQUEST['age'] ?? 'Not Set'); ?>
    </pre>

    <h1>Superglobal: $_FILES</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="uploadFile">
        <input type="submit" value="Upload">
    </form>
    <pre>
<?php
if (isset($_FILES['uploadFile']) && is_uploaded_file($_FILES['uploadFile']['tmp_name'])) {
    echo 'File Name: ' . htmlspecialchars($_FILES['uploadFile']['name']) . "\n";
    echo 'File Type: ' . htmlspecialchars($_FILES['uploadFile']['type']) . "\n";
    echo 'File Size: ' . $_FILES['uploadFile']['size'] . " bytes\n";
} else {
    echo 'No file uploaded.';
}
?>
    </pre>

    <h1>Superglobal: $_COOKIE</h1>
    <?php
    setcookie('name', 'Mridupawan', time() + 3600, '/');
    ?>
    <pre>
Cookie Name: <?php echo htmlspecialchars($_COOKIE['name'] ?? 'Not Set'); ?>
    </pre>

    <h1>Superglobal: $_SESSION</h1>
    <?php
    $_SESSION['name'] = 'John Doe';
    $_SESSION['age'] = 20;
    $_SESSION['email'] = 'john@example.com';
    $_SESSION['phone'] = '1234567890';
    $_SESSION['address'] = '123 Main St, Anytown, USA';
    ?>
    <pre>
Name: <?php echo htmlspecialchars($_SESSION['name'] ?? 'Not Set'); ?>
Age: <?php echo htmlspecialchars($_SESSION['age'] ?? 'Not Set'); ?>
Email: <?php echo htmlspecialchars($_SESSION['email'] ?? 'Not Set'); ?>
Phone: <?php echo htmlspecialchars($_SESSION['phone'] ?? 'Not Set'); ?>
Address: <?php echo htmlspecialchars($_SESSION['address'] ?? 'Not Set'); ?>
    </pre>

    <h1>Superglobal: $_ENV</h1>
    <?php
    putenv('APP_NAME=SuperglobalDemo');
    $env = getenv('APP_NAME');
    ?>
    <pre>
APP_NAME: <?php echo htmlspecialchars($env ?? 'Not Set'); ?>
    </pre>

</body>
</html>
