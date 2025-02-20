<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppearanceCertification extends Model
{
    use HasFactory;
    protected $table = 'appearance_certifications';

    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'suffix',
        'sex',
        'agency',
        'date_issues',
        'dateOfAppearance',
        'dateOfAppearance_two',
        'purpose',
        'signatoriesid',
        'person_role_id',
    ];

    public function profession()
    {
        return $this->belongsTo(Professions::class, 'professionID');
    }

    public function personRole()
    {
        return $this->belongsTo(PersonRole::class, 'person_role_id');
    }
}
