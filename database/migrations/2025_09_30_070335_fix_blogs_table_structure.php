<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixBlogsTableStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // First, let's update existing blog records with proper slugs
        $blogs = \App\Models\Blog::all();
        foreach ($blogs as $blog) {
            if (empty($blog->slug)) {
                $blog->slug = \Illuminate\Support\Str::slug($blog->title . '-' . $blog->id);
                $blog->save();
            }
        }

        // Now make slug unique
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
