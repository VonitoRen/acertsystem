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
        'dateOfAppearance',
        'purpose',
        'signatoriesid',
    ];

    public function profession()
    {
        return $this->belongsTo(Professions::class, 'professionID');
    }

    public function signatory()
    {
        return $this->belongsTo(Signatories::class, 'signatoriesid');
    }
}
