<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Tampilkan daftar customer
     */
    public function index()
    {
        return view('backend.customer.index');
    }

    /**
     * Tampilkan detail customer
     */
    public function show($id)
    {
        // sementara dummy data
        $customer = [
            'id' => $id,
            'name' => 'Andi Pratama',
            'email' => 'andi@gmail.com',
            'phone' => '+62 812-3456-7890',
            'status' => 'Active'
        ];

        return view('backend.customer.show', compact('customer'));
    }
}
