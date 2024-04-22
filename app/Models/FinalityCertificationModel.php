<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Signatories;

class FinalityCertificationModel extends Model
{
    use HasFactory;
    protected $table = 'finality_certifications';

    protected $fillable = [
        'id',
        'board',
        'complainants',
        'respondents',
        'for_',
        'caseNo',
        'caseDate',
        'description',
        'finalAndExecutoryDate',
        // 'dateDate',
        'signatoriesid',
    ];

    public function signatory()
    {
        return $this->belongsTo(Signatories::class, 'signatoriesid');
    }
}
