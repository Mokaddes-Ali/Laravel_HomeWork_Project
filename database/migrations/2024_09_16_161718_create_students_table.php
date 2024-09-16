<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone');
        $table->string('address');
        $table->date('date_of_birth');
        $table->enum('gender', ['male', 'female', 'other']);
        $table->string('course');
        $table->string('year');
        $table->string('nationality');
        $table->string('language');
        $table->string('blood_group');
        $table->string('religion');
        $table->text('hobbies')->nullable();
        $table->text('parents_info')->nullable();
        $table->text('emergency_contact')->nullable();
        $table->string('profile_image')->nullable();
        $table->boolean('is_active')->default(true);
        $table->text('additional_notes')->nullable();
        $table->string('guardian_name')->nullable();
        $table->string('guardian_phone')->nullable();
        $table->text('guardian_address')->nullable();
        $table->string('guardian_relation')->nullable();
        $table->string('scholarship_status')->nullable();
        $table->string('admission_year')->nullable();
        $table->string('graduation_year')->nullable();
        $table->text('previous_education')->nullable();
        $table->text('extracurricular_activities')->nullable();
        $table->text('academic_achievements')->nullable();
        $table->string('transportation_mode')->nullable();
        $table->text('health_issues')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
