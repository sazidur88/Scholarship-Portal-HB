<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_scholarships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->nullable()->constrained();
            $table->string('scholarship_title'); 
            $table->string('eligibility'); 
            $table->double('amount'); 
            $table->dateTime('deadline')->nullable();
            $table->string('status'); 

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
        Schema::dropIfExists('tenant_scholarships');
    }
}
