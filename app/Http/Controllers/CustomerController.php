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
     * Tampilkan detail customer (nanti)
     */
    public function show($id)
    {
        return view('backend.customer.show');
    }
}
