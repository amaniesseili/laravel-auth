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
        Schema::table('projects', function (Blueprint $table) {
            //crea la colonna type_id di tipo unsignedBigIntegger
            $table->unsignedBigInteger('type_id')->nullable();  
            //rendo la colonna type id una foreign key
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //rimuovo la foreign key 
            $table->dropForeign('type_id'); //rimuove le chiave esterna
            $table->dropColumn('type_id'); //rimuove il colonna type_id
        });
    }
};
