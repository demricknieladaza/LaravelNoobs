<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_informations', function (Blueprint $table) {
            $table->increments('p_id');
            $table->string('project_title');
            $table->string('project_id');
            $table->string('location');
            $table->string('type_of_development');
            $table->string('construction_value');
            $table->string('procurement_nd_route');
            $table->string('status')->default('pyts');
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
        Schema::dropIfExists('project_informations');
    }
}
