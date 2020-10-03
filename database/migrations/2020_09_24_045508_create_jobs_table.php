<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('job_type');
            $table->string('gender');
            $table->longText('detail')->nullable();
            
            $table->string('company_email')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_url')->nullable();
            $table->string('company_image')->nullable();
            $table->string('application_link')->nullable();
            
            $table->string('experience')->nullable();
            $table->string('qualification')->nullable();
            
            $table->string('compensation');
            $table->string('compensation_type');
            $table->string('compensation_currency');
            
            $table->string('location');
            $table->boolean('remote')->default(false);
            $table->boolean('relocation_support')->default(false);
            
            $table->integer('job_category_id')->unsigned();
            
            $table->date('dead_line');
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
        Schema::dropIfExists('jobs');
    }
}
