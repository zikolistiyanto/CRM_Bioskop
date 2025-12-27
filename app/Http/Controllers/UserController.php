<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Tampilkan daftar user
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        $totalUsers = User::count();
        $adminCount = User::where('role', 'admin')->count();
        $csCount = User::where('role', 'cs')->count();

        return view('backend.user.index', compact('users', 'totalUsers', 'adminCount', 'csCount'));
    }

    /**
     * Tampilkan detail user
     */
    public function show($id)
    {
        $user = User::with(['customers', 'interactions', 'leads', 'tickets'])->findOrFail($id);
        return view('backend.user.show', compact('user'));
    }
}
