<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects_tabel', function (Blueprint $table) {
            //crea la colonna user_id
            // $table->unsignedBigInteger('user_id')->nullable();

            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('projects_tabel', function (Blueprint $table) {
            //rimuovere la foreign key
            $table->dropForeign('user_id');
            //rimuovo la colonna
            $table->dropColumn('user_id');
        });*/
    }
};
