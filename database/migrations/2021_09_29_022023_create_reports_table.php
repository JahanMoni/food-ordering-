<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');  
           
            $table->double('total_payment',10,2)->default(0.00);
         
            $table->string('receiver_name',100);
            $table->string('receiver_email',100);
            $table->string('receiver_phone_number');
            $table->string('receiver_address');
             $table->string('status',10)->default('');
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
        Schema::dropIfExists('reports');
    }
}
