<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signatories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position'
    ];

    // public function roles()
    // {
    //     return $this->belongsToMany(Roles::class, 'person_roles');
    // }

     // Define the relationship with PersonRole
    public function personRoles()
    {
        return $this->hasMany(PersonRole::class, 'person_id'); // Assuming 'signatory_id' is the foreign key in the PersonRole table
    }

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'person_roles', 'person_id', 'role_id');
    }
}
