<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Tampilkan daftar user
     */
    public function index()
    {
        return view('backend.user.index');
    }

    /**
     * Tampilkan detail user (nanti)
     */
    public function show($id)
    {
        return view('backend.user.show');
    }
}
