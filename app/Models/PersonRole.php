<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'role_id',
    ];

    public function person()
    {
        return $this->belongsTo(Signatories::class);
    }

    public function role()
    {
        return $this->belongsTo(Roles::class);
    }
}
