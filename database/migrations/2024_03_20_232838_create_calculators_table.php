<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculators', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('deviceType', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('baseload', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('device')->nullable();
            $table->string('deviceType')->nullable();
            $table->string('baseload', 191)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('device', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('date')->nullable();
            $table->string('dateOfPurchase', 191)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('error', function (Blueprint $table) {
            $table->id();
            $table->string('device');
            $table->string('deviceType')->nullable();
            $table->string('error')->nullable();
            $table->string('other', 191)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('watt', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department')->nullable();
            $table->string('device')->nullable();
            $table->string('baseload', 191)->nullable();
            $table->string('error', 191)->nullable();
            $table->string('hour', 191)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculators');
        Schema::dropIfExists('department');
        Schema::dropIfExists('deviceType');
        Schema::dropIfExists('baseload');
    }
}
