<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal Variables: $_SERVER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Superglobal Variables: $_SERVER">
    <meta name="keywords" content="PHP, Superglobal, Variables, $_SERVER">
    <meta name="author" content="Mridupawan Bordoloi">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .note {
            font-size: 0.9em;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Built-In Superglobal Variables in PHP ($_SERVER)</h1>

<table>
    <thead>
        <tr>
            <th>Variable</th>
            <th>Description</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Array of selected $_SERVER variables with labels (key and value)
        $server_vars = [
            'HTTP_USER_AGENT'   => 'Browser User Agent',
            'HTTP_HOST'         => 'Host Header',
            'REQUEST_URI'       => 'Requested URI',
            'SCRIPT_NAME'       => 'Script Path',
            'REMOTE_ADDR'       => 'Client IP Address',
            'REMOTE_PORT'       => 'Client Port',
            'SERVER_NAME'       => 'Server Hostname',
            'SERVER_PORT'       => 'Server Port',
            'SERVER_PROTOCOL'   => 'Server Protocol',
            'SERVER_SOFTWARE'   => 'Server Software',
            'SERVER_SIGNATURE'  => 'Server Signature'
        ];

        foreach ($server_vars as $key => $value) {
            echo "<tr>
                    <td><code>\$_SERVER['$key']</code></td>
                    <td>$value</td>
                    <td>" . htmlspecialchars($_SERVER[$key] ?? 'Not Set') . "</td>
                </tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>
