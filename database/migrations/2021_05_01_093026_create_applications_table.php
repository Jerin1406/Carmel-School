<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("address");
            $table->string("gender");
            $table->date("dob");
            $table->string("phoneno");
            $table->unique('phoneno');
            $table->string("email");
            $table->unique('email');
            $table->string("fname");
            $table->string("mname");
            $table->string("admission");
            $table->string("mark1");
            $table->string("mark2");
            $table->string("mark3");
            $table->date("interviewdate");

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
        Schema::dropIfExists('applications');
    }
}
