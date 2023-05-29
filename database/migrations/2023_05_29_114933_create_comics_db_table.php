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
        Schema::create('comics_db', function (Blueprint $table) {
            $table->id();
            $table->char('title', 100);
            $table->text('description');
            $table->char('thumb');
            $table->decimal('price', 8, 2);
            $table->char('series', 100);
            $table->date('sale_date');
            $table->char('type', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics_db');
    }
};
