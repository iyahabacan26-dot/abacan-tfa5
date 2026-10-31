<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        // Static PHP array containing sample customer records
        $customers = [
            [
                'id' => 1,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
                'status' => 'Active',
            ],
            [
                'id' => 3,
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
                'status' => 'Inactive',
            ],
            [
                'id' => 4,
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
                'status' => 'Active',
            ],
            [
                'id' => 5,
                'name' => 'Carlo Mendoza',
                'email' => 'carlo@example.com',
                'phone' => '09211234567',
                'status' => 'Active',
            ],
        ];

        return view('customers', compact('customers'));
    }
}