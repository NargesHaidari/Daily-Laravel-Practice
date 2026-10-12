<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-card {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(15, 23, 42, 0.06);
            border-top: 5px solid #0f766e;
        }

        /* Profile Header */
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 25px;
            border-bottom: 1px solid #e2e8f0;
        }

        .avatar {
            width: 90px;
            height: 90px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #ccfbf1;
            color: #0f766e;
            font-size: 35px;
            font-weight: bold;
            border: 3px solid #99f6e4;
        }

        .profile-header h1 {
            font-size: 28px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .profile-header p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.8;
        }

        /* Account Information */
        .profile-title {
            margin-bottom: 22px;
        }

        .profile-title h2 {
            font-size: 19px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .profile-title p {
            color: #64748b;
            font-size: 13px;
            line-height: 1.7;
        }

        .info-item {
            margin-bottom: 18px;
            padding: 16px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: 0.2s;
        }

        .info-item:hover {
            border-color: #0f766e;
            background: #f0fdfa;
        }

        .info-item label {
            display: block;
            margin-bottom: 9px;
            font-size: 13px;
            font-weight: bold;
            color: #64748b;
        }

        .info-item p {
            color: #1e293b;
            font-size: 15px;
            line-height: 1.8;
            overflow-wrap: anywhere;
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

        .back-btn {
            background: #0f766e;
            color: white;
        }

        .back-btn:hover {
            background: #115e59;
        }

        .edit-btn {
            background: #f1f5f9;
            color: #334155;
        }

        .edit-btn:hover {
            background: #e2e8f0;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 25px;
            padding-top: 18px;
            border-top: 1px solid #e2e8f0;
            color: #94a3b8;
            font-size: 12px;
            line-height: 1.8;
        }

        /* Responsive */
        @media (max-width: 600px) {
            body {
                padding: 25px 12px;
            }

            .profile-card {
                padding: 22px 18px;
            }

            .profile-header h1 {
                font-size: 23px;
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

    <div class="profile-card">

        <div class="profile-header">
            <div class="avatar">
                {{ strtoupper(substr($account->name, 0, 1)) }}
            </div>

            <h1>User Profile</h1>
            <p>Welcome to your account</p>
        </div>

        <div class="info-item">
            <label>Full Name</label>
            <p>{{ $account->name }}</p>
        </div>

        <div class="info-item">
            <label>Email Address</label>
            <p>{{ $account->email }}</p>
        </div>

        <div class="info-item">
            <label>Phone Number</label>
            <p>{{ $account->number }}</p>
        </div>

        <a href="{{ route('users.index') }}" class="back-button">
            Back to Users
        </a>

    </div>

</body>
</html>