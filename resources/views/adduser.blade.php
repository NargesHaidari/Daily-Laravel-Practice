<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background: #f2f4f7;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        width: 400px;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .input-group {
        margin-bottom: 16px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        color: #555;
        font-size: 14px;
    }

    input {
        width: 100%;
        padding: 11px;
        border: 1px solid #ccc;
        border-radius: 7px;
        font-size: 14px;
        outline: none;
    }

    input:focus {
        border-color: #4f46e5;
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 7px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        margin-top: 5px;
    }

    .create-btn {
        background: #4f46e5;
    }

    .create-btn:hover {
        background: #3730a3;
    }
</style>

</head>

<body>

<div class="form-container">

    <h2>Create Account</h2>

    <form action="{{ route('useraccount.store') }}" method="POST">

        @csrf

        <div class="input-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name"
                   placeholder="Enter your name" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                   placeholder="Enter your email" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                   placeholder="Enter your password" required>
        </div>

        <div class="input-group">
            <label for="number">Phone Number</label>
            <input type="text" id="number" name="number"
                   placeholder="Enter your phone number" required>
        </div>

        <button type="submit" class="create-btn">Create Account</button>

    </form>

</div>

</body>
</html>
