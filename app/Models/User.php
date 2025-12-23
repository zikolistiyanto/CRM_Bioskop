<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_user'; // primary key custom
    protected $fillable = ['name', 'email', 'password', 'role', 'status'];

    // RELASI: User → Customers
    public function customers()
    {
        return $this->hasMany(Customer::class, 'created_by', 'id_user');
    }

    // RELASI: User → Interactions
    public function interactions()
    {
        return $this->hasMany(Interaction::class, 'user_id', 'id_user');
    }

    // RELASI: User → Tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'created_by', 'id_user');
    }

    // RELASI: User → Leads
    public function leads()
    {
        return $this->hasMany(Lead::class, 'assigned_to', 'id_user');
    }
}
