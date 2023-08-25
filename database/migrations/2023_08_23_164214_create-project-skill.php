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
        Schema::create('project-skill', function (Blueprint $table) {
            $table->foreignId('skill_id');
            $table->foreignId('project_id');
            $table->primary(['skill_id','project_id']);

    });

}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project-skill');
    }

};
