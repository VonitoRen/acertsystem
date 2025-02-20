<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professions;
use App\Models\Signatories;

class AccreditationCertificationModel extends Model
{
    use HasFactory;
    protected $table = 'accreditation_certifications';

    protected $fillable = [
        'accreditation_no',
        'lname',
        'fname',
        'mname',
        'suffix',
        'sex',
        'professionID',
        'validityDate',
        'broker_name',
        'broker_reg_no',
        'date_issues',
        'registeredDate',
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
