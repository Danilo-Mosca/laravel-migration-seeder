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
        Schema::table('trains', function (Blueprint $table) {
            //aggiungo varie colonne
            $table->string("azienda", 30);
            $table->string("stazione_di_partenza", 40);
            $table->string("stazione_di_arrivo", 40);
            $table->time("orario_di_partenza");
            $table->time("orario_di_arrivo");
            $table->string("codice_treno", 20);
            $table->tinyInteger("totale_carrozze")->unsigned()->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean("cancellato")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //elimino le varie colonne indispensabili per il reverse migration
            $table->dropColumn("azienda");
            $table->dropColumn("stazione_di_partenza");
            $table->dropColumn("stazione_di_arrivo");
            $table->dropColumn("orario_di_partenza");
            $table->dropColumn("orario_di_arrivo");
            $table->dropColumn("codice_treno");
            $table->dropColumn("totale_carrozze");
            $table->dropColumn("in_orario");
            $table->dropColumn("cancellato");
        });
    }
};