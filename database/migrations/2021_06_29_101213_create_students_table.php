<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('roll');
            $table->string('name');
            $table->date('DOB');
            $table->string('slug')->unique();
            $table->enum('gender',['male','female']);
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('email')->unique();
            $table->foreignId('student_parent_id')->nullable()->constrained('student_parents','id')->nullOnDelete();
            $table->foreignId('teacher_id')->nullable()->constrained('teachers','id')->nullOnDelete();
            $table->foreignId('school_class_id')->nullable()->constrained('school_classes','id')->nullOnDelete();
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
        Schema::dropIfExists('students');
    }
}
