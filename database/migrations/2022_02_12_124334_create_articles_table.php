<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained();#on craie une relation entre les deux tables
            $table->string('name');
            $table->string('title');
            $table->text('boby');
            $table->string('url');
            $table->timestamps();
        });
        // activer la contrainte au niveau des clés étrangères
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // supprimé la contrainte au niveau des clés étrangères
       Schema::table('articles', function (Blueprint $table) {
        $table->dropForeign(['categories_id']);
    });
        Schema::dropIfExists('articles');
    }
};
