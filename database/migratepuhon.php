<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_infos', function (Blueprint $table) {
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

        Schema::create('transport_links', function (Blueprint $table) {
            $table->increments('t_id');
            $table->integer('p_id');
            $table->string('main_roads');
            $table->string('tube_station1');
            $table->string('tube_station2');
            $table->string('bus_lines');
        });

        Schema::create('area_specific_information', function (Blueprint $table) {
            $table->increments('area_id');
            $table->integer('p_id');
            $table->string('main_roads');
            $table->string('adjacent_uses');
            $table->string('history');
        });

        Schema::create('_constraints', function (Blueprint $table) {
            $table->increments('cons_id');
            $table->integer('p_id');
            $table->string('cons1');
            $table->string('cons2');
            $table->string('cons3');
        });

        Schema::create('types_of_use', function (Blueprint $table) {
            $table->increments('types_id');
            $table->integer('p_id');
            $table->string('res1_m2');
            $table->string('res1_units');
            $table->string('res1_type');
            $table->string('res2_m2');
            $table->string('res2_units');
            $table->string('res2_type');
            $table->string('office');
            $table->string('ret_m2');
            $table->string('ret_units');
        }); 

        Schema::create('milestones', function (Blueprint $table) {
            $table->increments('ms_id');
            $table->integer('p_id');
            $table->string('riba_s1comp');
            $table->string('riba_s2comp');
            $table->string('riba_s3comp');
            $table->string('riba_s4comp');
        });

        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('meeting_id');
            $table->integer('p_id');
            $table->string('design_team');
            $table->string('project_progress');
        });

        Schema::create('project_team', function (Blueprint $table) {
            $table->increments('projt_id');
            $table->integer('p_id');
            $table->string('architect');
            $table->string('structural');
            $table->string('services');
            $table->string('fire');
            $table->string('acoustic');
        });

        Schema::create('supporting_docs', function (Blueprint $table) {
            $table->increments('projt_id');
            $table->integer('p_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_information');
        Schema::dropIfExists('area_specific_information');
        Schema::dropIfExists('transport_links');
        Schema::dropIfExists('_constraints');
        Schema::dropIfExists('types_of_use');
        Schema::dropIfExists('milestones');
        Schema::dropIfExists('meetings');
        Schema::dropIfExists('project_team');
        Schema::dropIfExists('supporting_docs');
    }
}
