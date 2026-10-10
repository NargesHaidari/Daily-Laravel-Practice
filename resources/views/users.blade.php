<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users Management</title>

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
            max-width: 1100px;
            margin: auto;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 28px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #64748b;
            font-size: 14px;
        }

        .add-btn {
            display: inline-block;
            padding: 12px 20px;
            background: #0f766e;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .add-btn:hover {
            background: #115e59;
        }

        /* Summary card */
        .summary-card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(15, 23, 42, 0.05);
            border-left: 5px solid #0f766e;
        }

        .summary-card span {
            color: #64748b;
            font-size: 14px;
        }

        .summary-card h2 {
            margin-top: 10px;
            font-size: 30px;
            color: #0f766e;
        }

        /* Table */
        .table-wrapper {
            overflow-x: auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(15, 23, 42, 0.06);
        }

        .table-title {
            padding: 22px;
            border-bottom: 1px solid #e2e8f0;
        }

        .table-title h2 {
            font-size: 18px;
            color: #0f172a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 700px;
        }

        th, td {
            padding: 17px 20px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }

        th {
            background: #f8fafc;
            color: #475569;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tbody tr {
            transition: background 0.2s;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .user-name {
            font-weight: bold;
            color: #0f172a;
        }

        .user-email {
            color: #64748b;
        }

        .number-badge {
            display: inline-block;
            padding: 7px 10px;
            background: #f1f5f9;
            border-radius: 6px;
            color: #334155;
        }

        /* Action buttons */
        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn {
            display: inline-block;
            border: none;
            border-radius: 7px;
            padding: 9px 12px;
            font-size: 12px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .edit-btn {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .edit-btn:hover {
            background: #bfdbfe;
        }

        .delete-btn {
            background: #fee2e2;
            color: #b91c1c;
        }

        .delete-btn:hover {
            background: #fecaca;
        }

        .delete-form {
            display: inline;
        }

        /* Empty state */
        .empty {
            padding: 45px 20px;
            text-align: center;
            color: #64748b;
        }

        .empty strong {
            display: block;
            color: #334155;
            font-size: 17px;
            margin-bottom: 8px;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #94a3b8;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            body {
                padding: 25px 12px;
            }

            .page-header h1 {
                font-size: 23px;
            }

            .page-header {
                align-items: flex-start;
            }

            .add-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1>Users Management</h1>
            <p>View, edit and manage registered users.</p>
        </div>

        <a href="{{ route('adduser') }}" class="add-btn">
            + Add New User
        </a>
    </div>

    <!-- Total Users -->
    <div class="summary-card">
        <span>Total Registered Users</span>
        <h2>{{ $users->count() }}</h2>
    </div>

    <!-- Users Table -->
    <div class="table-wrapper">

        <div class="table-title">
            <h2>All Users</h2>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td class="user-name">
                            {{ $user->name }}
                        </td>

                        <td class="user-email">
                            {{ $user->email }}
                        </td>

                        <td>
                            <span class="number-badge">
                                {{ $user->number }}
                            </span>
                        </td>

                        <td>
                            <div class="actions">

                                <!-- Edit User -->
                                <a
                                    href="{{ route('useraccount.edit', [$user->id]) }}"
                                    class="btn edit-btn"
                                >
                                    Edit
                                </a>

                                <!-- Delete User -->
                                <form
                                    action="{{ url('/users/' . $user->id) }}"
                                    method="POST"
                                    class="delete-form"
                                    onsubmit="return confirm('Are you sure you want to delete this user?');"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn delete-btn"
                                    >
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="5" class="empty">
                            <strong>No users found</strong>
                            There are no registered users yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    <div class="footer">
        Users Management System
    </div>

</div>

</body>
</html>
