<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->integer('price');
            $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users'); // SQLSTATE[HY000]: General error: 1005 Can't create table `memory`.`#sql-34a0_60e` 
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
        
        Schema::dropIfExists('books'
            , function (Blueprint $table) {
                $table->dropForeign(`books_user_id_foreign`);
                // $table->dropForeign(`books__dropforeign`);

                // $table->dropUnique(`books_user_id_foreign`);
            }
        );
    }
}
