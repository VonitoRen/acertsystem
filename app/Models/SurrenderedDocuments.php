<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurrenderedDocuments extends Model
{
    use HasFactory;
    protected $table = 'surrendered_documents';

    protected $fillable = [
        'board',
        'doc_surrendered',
        'lname',
        'fname',
        'mname',
        'suffix',
        'sex',
        'professionID',
        'date_issues',
        'returnedDate',
        'regnum',
        'penalty',
        'case_title',
        'case_no',
        'hearing_officer',
        'person_role_id',
        'complainant_lname',
        'complainant_fname',
        'complainant_mname',
        'complainant_suffix',
        'complainant_sex',
        'chief',
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
