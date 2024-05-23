<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use MongoDB\Laravel\Schema\Blueprint; // Asegúrate de importar el Blueprint correcto

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::connection('mongodb')->create('alumnos', function (Blueprint $collection) {
            $collection->index('nombre');
            $collection->index('apellido');
            $collection->index('edad');
            $collection->index('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('alumnos');
    }
}
