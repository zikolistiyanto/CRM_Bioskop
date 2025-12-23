<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_customer'; // sesuai migration
    protected $fillable = ['name', 'phone', 'email', 'address', 'created_by', 'status'];

    // RELASI: Customer → User (creator)
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id_user');
    }

    // RELASI: Customer → Interactions
    public function interactions()
    {
        return $this->hasMany(Interaction::class, 'customer_id', 'id_customer');
    }

    // RELASI: Customer → Tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'customer_id', 'id_customer');
    }

    // RELASI: Customer → Leads
    public function leads()
    {
        return $this->hasMany(Lead::class, 'customer_id', 'id_customer');
    }
}
