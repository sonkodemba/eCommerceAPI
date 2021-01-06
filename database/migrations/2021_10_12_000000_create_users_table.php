<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table -> integer('mobile_num') -> unsigned()-> unique();
            $table -> bigInteger('department_id') -> unsigned();
            $table -> bigInteger('designation_id') -> unsigned();
            $table -> bigInteger('grade_id')-> unsigned();
            $table -> bigInteger('gender_id') -> unsigned();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table -> foreign('department_id') -> references('id') -> on('departments')-> onDelete('cascade');
            $table -> foreign('designation_id') -> references('id') -> on('designations')-> onDelete('cascade');
            $table -> foreign('grade_id') -> references('id') -> on('pay_grades')-> onDelete('cascade');
            $table -> foreign('gender_id') -> references('id') -> on('genders')-> onDelete('cascade');
            $table -> softDeletes();
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
        Schema::dropIfExists('users');
    }
}
