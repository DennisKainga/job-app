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
        Schema::table('blogs', function (Blueprint $table) {
            // Add fields for title, content, image_path, and timestamps
            $table->text('content')->nullable();
            $table->string('image_path')->nullable();
            
            // Timestamps, if not already present
            if (!Schema::hasColumn('blogs', 'created_at') && !Schema::hasColumn('blogs', 'updated_at')) {
                $table->timestamps();
            }
        });
    }

    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Drop the fields if the migration is rolled back
            
            $table->dropColumn('content');
            $table->dropColumn('image_path');
            $table->dropTimestamps(); // Drops created_at and updated_at columns
        });
    }

};
