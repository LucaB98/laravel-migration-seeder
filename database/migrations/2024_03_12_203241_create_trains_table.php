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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',50);
            $table->string('station_start',50);
            $table->string('station_end',50);
            $table->time('hours_start');
            $table->time('hours_end');
            $table->string('code_train',10);
            $table->char('n_carrozze',2);
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
