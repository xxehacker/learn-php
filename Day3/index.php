<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Handling</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 40px 20px;
      background-color: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 400px;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    fieldset {
      border: none;
      padding: 0;
      margin: 0;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #444;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #4CAF50;
      outline: none;
      box-shadow: 0 0 3px rgba(76, 175, 80, 0.5);
    }

    input:invalid:focus {
      border-color: red;
    }

    button {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    .note {
      font-size: 0.9em;
      color: #777;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Basic Form Handling</h2>
    <form action="action.php" method="post" novalidate>
      <fieldset>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required aria-label="Name" placeholder="Enter your full name" />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required aria-label="Email" placeholder="Enter your email address" />

        <button type="submit">Submit</button>
      </fieldset>
    </form>
    <div class="note">All fields are required.</div>
    
    <hr>
    <a href="view.php">View All Submissions</a>

  </div>

  
</body>
</html>
