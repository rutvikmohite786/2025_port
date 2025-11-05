<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBlogsTableAddMissingColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Add columns if they don't exist
            if (!Schema::hasColumn('blogs', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('blogs', 'description')) {
                $table->text('description')->after('title');
            }
            if (!Schema::hasColumn('blogs', 'tag')) {
                $table->string('tag')->nullable()->after('description');
            }
            if (!Schema::hasColumn('blogs', 'date')) {
                $table->date('date')->nullable()->after('tag');
            }
            if (!Schema::hasColumn('blogs', 'image')) {
                $table->string('image')->nullable()->after('date');
            }
            if (!Schema::hasColumn('blogs', 'url')) {
                $table->string('url')->nullable()->after('image');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'tag', 'date', 'image', 'url']);
        });
    }
}
