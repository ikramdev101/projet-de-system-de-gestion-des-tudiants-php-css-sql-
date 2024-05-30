
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8f5; /* Light green background */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #e8f5e9; /* Light green form background */
            padding: 20px;
            border: 1px solid #c8e6c9; /* Light green border */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #a5d6a7; /* Light green border */
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #66bb6a; /* Medium green button */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #388e3c; /* Dark green button on hover */
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="modificationa.php" method="post">
        <label for="code">Code :</label>
        <input type="text" id="code" name="code" required>
        <button type="submit"><a href="modificationa.php">modifier</a> </button>
    </form>
</body>
</html>
