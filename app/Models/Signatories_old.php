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

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'person_roles');
    }
}
