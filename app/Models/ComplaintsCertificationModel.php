<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintsCertificationModel extends Model
{
    use HasFactory;
    
    protected $table = 'certification_of_complaints';

    protected $fillable = [
        'id_reset',
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
        'date_issues',
        'signatoriesAtty',
        'person_role_id',
    ];

    protected $casts = [
        'registeredDate' => 'datetime',
    ];

    public function profession()
    {
        return $this->belongsTo(Professions::class, 'professionID');
    }

    public function personRole()
    {
        return $this->belongsTo(PersonRole::class, 'person_role_id');
    }

    // public function attorneyRole()
    // {
    //     return $this->belongsTo(PersonRole::class, 'signatoriesAtty');
    // }

    public function attorneyRole()
    {
        return $this->belongsTo(PersonRole::class, 'signatoriesAtty');
    }

    
}
