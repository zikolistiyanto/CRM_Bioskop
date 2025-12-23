<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        $users = User::all();
        return view('backend.user.index', compact('users'));
    }

    // Tampilkan form untuk membuat user baru
    public function create()
    {
        return view('backend.user.create');
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6',
            'role'=>'required|in:admin,staff,manager',
            'status'=>'required|in:active,inactive'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect()->route('users.index')->with('success','User berhasil dibuat');
    }

    // Tampilkan detail user
    public function show(User $user)
    {
        return view('backend.user.show', compact('user'));
    }

    // Tampilkan form edit user
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    // Update user
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'=>'sometimes|required|string|max:100',
            'email'=>'sometimes|required|email|unique:users,email,'.$user->id_user.',id_user',
            'password'=>'nullable|string|min:6',
            'role'=>'sometimes|required|in:admin,staff,manager',
            'status'=>'sometimes|required|in:active,inactive'
        ]);

        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);
        return redirect()->route('users.index')->with('success','User berhasil diperbarui');
    }

    // Hapus user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','User berhasil dihapus');
    }
}