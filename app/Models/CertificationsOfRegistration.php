<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationsOfRegistration extends Model
{
    use HasFactory;
    protected $table = 'certification_of_registrations';

    protected $fillable = [
        'id',
        'lname',
        'fname', 
        'mname', 
        'suffix', 
        'professionID',
        'regnum', 
        'registeredDate', 
        'signatoriesid'
    ];

    protected $casts = [
        'registeredDate' => 'datetime',
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
