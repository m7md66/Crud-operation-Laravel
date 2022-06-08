<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();// id auto prim biginteger
            $table->timestamps(); // created_at updated_at
            $table->string('title'); // not null
            $table->text('description')->nullable(); //
            $table->integer('number')->default(1);
            $table->softDeletes(); // deleted_at
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
