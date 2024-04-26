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

        DB::table("projects")->insert([
            [
                'title' => 'Project: Jorge el curioso',
                'description' => 'Excepteur enim reprehenderit minim nisi esse cillum..',
            ],
            [
                'title' => 'Project: La manzana verde',
                'description' => 'Consectetur et cillum nisi culpa ut deserunt cillum aliquip eu aliquip dolore quis ut dolor..',
            ],
            [
                'title' => 'Project: Pelicano, una aventura',
                'description' => 'Do duis excepteur elit do magna sint in ex. Id exercitation esse occaecat dolor. Ullamco esse est non non excepteur irure ad commodo anim veniam ipsum veniam..',
            ],
            [
                'title' => 'Project: La verdad de la buena',
                'description' => 'Cillum incididunt duis esse nostrud non quis.',
            ],
            ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('projects')->delete();
    }
};
