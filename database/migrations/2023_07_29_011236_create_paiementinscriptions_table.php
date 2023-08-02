<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paiementinscriptions', function (Blueprint $table) {
            $table->increments->ID();
            $table->integer('EtudiantID ');
            $table->integer('ClasseID');
            $table->decimal('MontantPaye');
            $table->date('DatePaiement');
            $table->string('Statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiementinscriptions');
    }
};
