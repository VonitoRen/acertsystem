<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Signatories;

class FormerFilipinoCertificationModel extends Model
{
    use HasFactory;
    protected $table = 'certification_of_former_filipino';

    protected $fillable = [
        'id',
        'lname',
        'fname',
        'mname',
        'suffix',
        'sex',
        'professionID',
        'licenseNo',
        'dateIssued',
        'purpose',
        'dateOfIssuance',
        'person_role_id',
        'orNo',
        'orDate',
    ];

    public function signatory()
    {
        return $this->belongsTo(Signatories::class, 'signatoriesid');
    }

    public function profession()
    {
        return $this->belongsTo(Professions::class, 'professionID');
    }

    public function personRole()
    {
        return $this->belongsTo(PersonRole::class, 'person_role_id');
    }

}
