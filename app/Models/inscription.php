<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;
    protected $fillable=['ID', 'EtudiantID', 'NiveauEtude', 'ClasseID', 'AnneeScolaire'];

    public function etudiant()
{
    return $this->belongsTo(etudiant::class, 'EtudiantID', 'ID');
}

}
