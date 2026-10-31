@extends('layouts.app')

@section('title', 'User Accounts | POS Management System')
@section('page-title', 'User Accounts')

@section('content')

<p style="color: #8E7C87; font-size: 14px; margin-bottom: 28px;">
    View system user accounts and their assigned roles.
</p>

<!-- User Records Table -->
<div class="table-card">

    <div class="table-header">
        <h3>User List</h3>
        <p>List of sample system users and their account information.</p>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td>
                        <span class="status {{ strtolower($user['status']) }}">
                            {{ $user['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection