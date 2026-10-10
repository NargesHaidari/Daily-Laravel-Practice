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
            font-family: Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            padding: 30px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f1f5f9;
            color: #1e293b;
        }

        .form-container {
            width: 100%;
            max-width: 450px;
            background: white;
            padding: 32px;
            border-radius: 12px;
            border-top: 5px solid #0f766e;
            box-shadow: 0 4px 15px rgba(15, 23, 42, 0.06);
        }

        /* Header */
        .form-header {
            margin-bottom: 28px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
            text-align: center;
        }

        .form-header h1 {
            font-size: 26px;
            color: #0f172a;
            margin-bottom: 10px;
        }

        /* Input Fields */
        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            color: #334155;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            display: block;
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: white;
            color: #1e293b;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input::placeholder {
            color: #94a3b8;
        }

        input:focus {
            border-color: #0f766e;
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.12);
        }

        /* Create Button */
        .create-btn {
            width: 100%;
            padding: 13px;
            margin-top: 5px;
            border: none;
            border-radius: 8px;
            background: #0f766e;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .create-btn:hover {
            background: #115e59;
        }

        .create-btn:active {
            transform: scale(0.99);
        }

        /* Footer */
        .footer {
            margin-top: 22px;
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .form-container {
                padding: 25px 20px;
            }

            .form-header h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

    <div class="form-container">

        <div class="form-header">
            <h1>Create Account</h1>
        </div>

        <form action="{{ route('useraccount.store') }}" method="POST">

            @csrf

            <div class="input-group">
                <label for="name">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                    required
                >
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                    autocomplete="new-password"
                >
            </div>

            <div class="input-group">
                <label for="number">Phone Number</label>
                <input
                    type="text"
                    id="number"
                    name="number"
                    placeholder="Enter your phone number"
                    value="{{ old('number') }}"
                    required
                >
            </div>

            <button type="submit" class="create-btn">
                Create Account
            </button>

        </form>

        <div class="footer">
            Users Management System
        </div>

    </div>

</body>
</html>