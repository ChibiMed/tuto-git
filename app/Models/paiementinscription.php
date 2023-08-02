<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiementinscription extends Model
{
    use HasFactory;
    protected $fillable=['ID', 'EtudiantID', 'ClasseID', 'MontantPaye', 'DatePaiement', ' Statut'];
}
