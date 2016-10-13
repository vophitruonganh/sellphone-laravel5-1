<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',150);
            $table->string('password', 24);
            $table->string('firstname',150);
            $table->string('lastname',150);
            $table->text('address');
            $table->string('idcard',9);
            $table->string('email')->unique();
            $table->boolean('sex',false);
            $table->boolean('admin',false);
            $table->rememberToken();
            $table->timestamps();
        });



        //  Schema::create('categories',function(Blueprint $table){
        //     $table->increments('id');
        //     $table->string('name',150);
        //     $table->string('images',255);
        //     $table->rememberToken();
        //     $table->timestamps();

        // });
        //  Schema::create('trademarks',function(Blueprint $table){
        //     $table->increments('id');
        //     $table->string('name',150);
        //     $table->string('images',255);
        //     $table->rememberToken();
        //     $table->timestamps();

        // });
        // Schema::create('products',function(Blueprint $table){
        //     $table->increments('id');
        //     $table->string('name',150);
        //     $table->string('images',255);
        //     $table->demical('price',18,9);
        //     $table->integer('amount');
        //     $table->text('detail');
        //     $table->integer('categories_id')->unsigned();
        //     $table->integer('trademark_id')->unsigned();
        //     $table->boolean('feature',false);
        //     $table->boolean('hot',false);
        //     $table->boolean('sale',false);

        //     $table->rememberToken();
        //     $table->timestamps();

        //     // $table->primary('id');
        //     $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        //     $table->foreign('trademark_id')->references('id')->on('trademarks')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
