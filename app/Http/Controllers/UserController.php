<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // Static PHP array containing sample user accounts
        $users = [
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'John Smith',
                'email' => 'john@example.com',
                'role' => 'Manager',
                'status' => 'Active',
            ],
            [
                'id' => 3,
                'name' => 'Sarah Lopez',
                'email' => 'sarah@example.com',
                'role' => 'Cashier',
                'status' => 'Active',
            ],
            [
                'id' => 4,
                'name' => 'Mark Reyes',
                'email' => 'mark@example.com',
                'role' => 'Staff',
                'status' => 'Inactive',
            ],
            [
                'id' => 5,
                'name' => 'Anna Cruz',
                'email' => 'anna@example.com',
                'role' => 'Cashier',
                'status' => 'Active',
            ],
        ];

        return view('users', compact('users'));
    }
}