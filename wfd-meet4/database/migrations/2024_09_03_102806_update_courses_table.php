<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->after('course_name', function (Blueprint $table) {
                $table->string('course_name_en', 255);
                $table->foreignId('course_owner_unit_code');
            });
        });
    }
    

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropSoftDeletes(['course_name_en', 'course_owner_unit_code']);
        });
    }
};
