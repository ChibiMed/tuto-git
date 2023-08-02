<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;
    protected $fillable=['ID', 'NomClasse', 'FraisInscription', 'Mensualite', 'NiveauID'];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'NiveauID', 'ID');
    }
}
