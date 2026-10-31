@extends('layouts.app')

@section('title', 'Customer Accounts | POS Management System')
@section('page-title', 'Customer Accounts')

@section('content')

<p style="color: #8E7C87; font-size: 14px; margin-bottom: 28px;">
    View the customer records registered in the POS Management System.
</p>

<!-- Customer Records Table -->
<div class="table-card">

    <div class="table-header">
        <h3>Customer List</h3>
        <p>List of sample customer accounts and their information.</p>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>

                    <td>
                        <span class="status {{ strtolower($customer['status']) }}">
                            {{ $customer['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection