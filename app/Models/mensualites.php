<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\etudiant;

class mensualites extends Model
{
    use HasFactory;
    protected $fillable=['ID', 'EtudiantID', 'ClasseID', 'MoisMensualite', 'MontantMensuel', 'DateMensualite', 'Statut'];

    public function etudiant()
{
    return $this->belongsTo(etudiant::class, 'EtudiantID', 'ID');
}
}




