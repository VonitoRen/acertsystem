<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintsCertificationModel extends Model
{
    use HasFactory;
    protected $table = 'certification_of_complaints';

    protected $fillable = [
        'id',
        'lname',
        'fname', 
        'mname', 
        'suffix', 
        'sex',
        'professionID',
        'regnum', 
        'registeredDate', 
        'OR_No',
        'initials',
        'amount',
        'signatoriesAtty',
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
