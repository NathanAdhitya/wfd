<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id')->autoIncrement();
            $table->string('course_code', 8)->unique();
            $table->year('curriculum_year');
            $table->string('course_name', 255);
            $table->boolean('course_active')->default(true);
            $table->timestamps();
            $table->foreignId('created_by_user_id')->constrained('users');
            $table->ipAddress('ip_address');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
