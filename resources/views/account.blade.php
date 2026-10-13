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
            background:
                radial-gradient(circle at top left, rgba(13, 148, 136, 0.12), transparent 35%),
                linear-gradient(135deg, #f0fdfa 0%, #f1f5f9 48%, #ecfeff 100%);
            color: #1e293b;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-card {
            width: 100%;
            max-width: 720px;
            margin: 0 auto;
            overflow: hidden;
            background: #fff;
            border: 1px solid rgba(226, 232, 240, 0.9);
            border-radius: 22px;
            box-shadow: 0 22px 60px rgba(15, 23, 42, 0.10);
        }

        .profile-banner {
            height: 130px;
            background: linear-gradient(120deg, #115e59 0%, #0f766e 48%, #14b8a6 100%);
            position: relative;
        }

        .profile-banner::after {
            content: "";
            position: absolute;
            width: 210px;
            height: 210px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 50%;
            right: -45px;
            top: -105px;
            box-shadow: 0 0 0 25px rgba(255,255,255,0.05),
                        0 0 0 50px rgba(255,255,255,0.04);
        }

        .profile-content {
            padding: 0 34px 30px;
        }

        .profile-header {
            text-align: center;
            margin-top: -55px;
            padding-bottom: 26px;
            border-bottom: 1px solid #e2e8f0;
            position: relative;
        }

        .avatar {
            width: 108px;
            height: 108px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #ccfbf1;
            color: #0f766e;
            font-size: 40px;
            font-weight: bold;
            border: 5px solid #fff;
            box-shadow: 0 5px 18px rgba(15, 118, 110, 0.18);
        }

        .profile-header h1 {
            font-size: 27px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .profile-header p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.8;
        }

        .section-heading {
            margin: 26px 0 16px;
        }

        .section-heading h2 {
            font-size: 18px;
            color: #0f172a;
            margin-bottom: 6px;
        }

        .section-heading p {
            color: #64748b;
            font-size: 13px;
            line-height: 1.7;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .info-item {
            min-width: 0;
            padding: 17px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            transition: border-color 0.2s, background 0.2s, transform 0.2s;
        }

        .info-item:hover {
            border-color: #5eead4;
            background: #f0fdfa;
            transform: translateY(-2px);
        }

        .info-item label {
            display: block;
            margin-bottom: 9px;
            font-size: 12px;
            font-weight: bold;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-item p {
            color: #1e293b;
            font-size: 15px;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 18px;
            border: 1px solid transparent;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .back-btn {
            background: #f1f5f9;
            border-color: #e2e8f0;
            color: #334155;
            margin-right: auto;
        }

        .back-btn:hover {
            background: #e2e8f0;
        }

        .edit-btn {
            background: #0f766e;
            color: #fff;
        }

        .edit-btn:hover {
            background: #115e59;
        }

        .delete-btn {
            background: #fff1f2;
            border-color: #fecdd3;
            color: #be123c;
        }

        .delete-btn:hover {
            background: #ffe4e6;
            border-color: #fda4af;
        }

        .footer {
            text-align: center;
            margin-top: 26px;
            padding-top: 18px;
            border-top: 1px solid #e2e8f0;
            color: #94a3b8;
            font-size: 12px;
            line-height: 1.8;
        }

        @media (max-width: 600px) {
            body {
                padding: 22px 12px;
                align-items: flex-start;
            }

            .profile-banner {
                height: 105px;
            }

            .profile-content {
                padding: 0 18px 22px;
            }

            .profile-header h1 {
                font-size: 23px;
            }

            .avatar {
                width: 96px;
                height: 96px;
                font-size: 35px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .actions {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .actions .back-btn {
                grid-column: 1 / -1;
                margin-right: 0;
            }

            .actions .btn {
                width: 100%;
            }
        }

        @media (max-width: 360px) {
            .actions {
                grid-template-columns: 1fr;
            }

            .actions .back-btn {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>
    <main class="profile-card">
        <div class="profile-banner"></div>

        <div class="profile-content">
            <header class="profile-header">
                <div class="avatar">
                    {{ strtoupper(substr($account->name ?? 'U', 0, 1)) }}
                </div>

                <h1>{{ $account->name }}</h1>
                <p>User profile and account details</p>
            </header>

            <section aria-labelledby="account-details-heading">
                <div class="section-heading">
                    <h2 id="account-details-heading">Account Information</h2>
                    <p>View the details associated with this account.</p>
                </div>

                <div class="info-grid">
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
                        <p>{{ $account->number ?: 'Not provided' }}</p>
                    </div>

                    <div class="info-item">
                        <label>User ID</label>
                        <p>#{{ $account->id }}</p>
                    </div>
                </div>
            </section>

            <div class="actions">
                <a href="{{ route('users.index') }}" class="btn back-btn">
                    &#8592; Back to Users
                </a>

                <a href="{{ route('useraccount.edit', $account->id) }}" class="btn edit-btn">
                    &#9998; Edit Profile
                </a>

                <form action="{{ route('useraccount.delete', $account->id) }}"
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this user? This action cannot be undone.');">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn delete-btn">
                        &#128465; Delete User
                    </button>
                </form>
            </div>

            <footer class="footer">
                Keep your account information accurate and up to date.
            </footer>
        </div>
    </main>
</body>
</html>
