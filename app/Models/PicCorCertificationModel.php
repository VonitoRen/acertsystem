<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Signatories;

class PiccorCertificationModel extends Model
{
    use HasFactory;
    protected $table = 'piccor_certifications';

    protected $fillable = [
        'id',
        'board',
        'regDate',
        'lname',
        'fname',
        'mname',
        'suffix',
        'sex',
        'professionID',
        'regNo',
        'returnedDate',
        'penalty',
        'caseTitle',
        'administrativeCaseNo',
        'dateOfDocument',
        'dateofIssuance',
        'hearingOfficer',
        'person_role_id',
        'complainantlname',
        'complainantfname',
        'complainantmname',
        'complainantsuffix',
        'complainantsex',
        'legalDivisionChief',
        'position_officer',
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
