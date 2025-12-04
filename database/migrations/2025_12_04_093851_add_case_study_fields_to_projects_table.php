<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('is_case_study')->default(false)->after('published_at');
            $table->text('case_study_goal')->nullable()->after('is_case_study');
            $table->text('case_study_process')->nullable()->after('case_study_goal');
            $table->text('case_study_result')->nullable()->after('case_study_process');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['is_case_study', 'case_study_goal', 'case_study_process', 'case_study_result']);
        });
    }
};
