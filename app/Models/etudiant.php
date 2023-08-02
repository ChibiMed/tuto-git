<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;
    protected $fillable=['ID', 'CodeEtu', 'Prenom', 'Nom', 'Genre', 'DateNaissance', 'LieuNaissance'];

    public function mensualite()
    {
        return $this->hasMany(Mensualites::class, 'EtudiantID', 'ID');
    }

    public function inscription()
    {
        return $this->hasMany(Inscription::class, 'EtudiantID', 'ID');
    }

}
