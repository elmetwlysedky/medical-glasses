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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('frame_types_id')->constrained('frame_types')->cascadeOnDelete()->nullable();
            $table->string('frame_material')->nullable();
            $table->string('lens_type')->nullable();
            $table->string('lens_material')->nullable();
            $table->string('r_spil');
            $table->string('r_cyl');
            $table->string('r_ax');
            $table->string('l_spil');
            $table->string('l_cyl');
            $table->string('l_ax');
            $table->string('i_p_d');
            $table->decimal('price',10,2);
            $table->decimal('paid_up',10,2);
            $table->decimal('remainder',10,2);

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
        Schema::dropIfExists('clients');
    }
};
