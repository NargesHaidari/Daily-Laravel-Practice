<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            margin: 100px auto;
            background-color: white;
            padding: 40px;
            width: 60%;
            border-radius: 15px;
            box-shadow: 0 4px 15px #ccc;
        }

        h1 {
            color: #2563eb;
        }

        p {
            color: #555;
            font-size: 18px;
            line-height: 2;
        }

        button {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Welcome to My Website!</h1>

        <p>
            Hello! Welcome to my home page.
            <br>
            This page is created using Laravel and Blade.
        </p>

        <button onclick="alert('Welcome!')">
            Click Me
        </button>

    </div>

</body>
</html>

