<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->nullable()->constrained();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('tenant_scholarship_id')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('tenant_scholarship_id')->references('id')->on('tenant_scholarships')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_applications');
    }
}
