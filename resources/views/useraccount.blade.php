<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            padding: 40px 20px;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
        }

        /* Header */
        .page-header {
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 28px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.8;
        }

        /* Form Card */
        .form-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(15, 23, 42, 0.06);
            border-top: 5px solid #0f766e;
        }

        .form-title {
            margin-bottom: 25px;
            padding-bottom: 18px;
            border-bottom: 1px solid #e2e8f0;
        }

        .form-title h2 {
            font-size: 19px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .form-title p {
            color: #64748b;
            font-size: 13px;
            line-height: 1.7;
        }

        /* Form Fields */
        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 9px;
            font-size: 14px;
            font-weight: bold;
            color: #334155;
        }

        .form-group input {
            display: block;
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
            background: #fff;
            color: #1e293b;
            font-size: 14px;
            transition: 0.2s;
        }

        .form-group input:focus {
            border-color: #0f766e;
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.12);
        }

        .form-group input::placeholder {
            color: #94a3b8;
        }

        /* Buttons */
        .actions {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: 0.2s;
        }

        .update-btn {
            background: #0f766e;
            color: white;
        }

        .update-btn:hover {
            background: #115e59;
        }

        .back-btn {
            background: #f1f5f9;
            color: #334155;
        }

        .back-btn:hover {
            background: #e2e8f0;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #94a3b8;
            font-size: 12px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            body {
                padding: 25px 12px;
            }

            .page-header h1 {
                font-size: 23px;
            }

            .form-card {
                padding: 22px 18px;
            }

            .actions {
                flex-direction: column;
            }

            .actions .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Page Header -->
    <div class="page-header">
        <h1>Edit User</h1>
        <p>Update the account information of the selected user.</p>
    </div>

    <!-- Edit Form -->
    <div class="form-card">

        <div class="form-title">
            <h2>Account Information</h2>
            <p>Change the fields you want to update.</p>
        </div>

        <form action="{{ route('useraccount.update', [$user->id]) }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ $user->name }}"
                    placeholder="Enter full name"
                    required
                >
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ $user->email }}"
                    placeholder="Enter email address"
                    required
                >
            </div>

            <!-- Phone Number -->
            <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                    type="text"
                    id="number"
                    name="number"
                    value="{{ $user->number }}"
                    placeholder="Enter phone number"
                    required
                >
            </div>

            <!-- Buttons -->
            <div class="actions">
                <button type="submit" class="btn update-btn">
                    Update User
                </button>

                <a href="{{ url('/users') }}" class="btn back-btn">
                    Back to Users
                </a>
            </div>

        </form>

    </div>

    <div class="footer">
        Users Management System
    </div>

</div>

</body>
</html>