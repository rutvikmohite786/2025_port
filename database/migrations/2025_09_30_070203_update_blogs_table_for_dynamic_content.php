<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBlogsTableForDynamicContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Add new columns (skip title as it already exists)
            $table->string('slug')->unique()->after('title');
            $table->text('excerpt')->nullable()->after('slug');
            $table->longText('content')->after('excerpt');
            $table->string('featured_image')->nullable()->after('content');
            $table->string('meta_title')->nullable()->after('featured_image');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->foreignId('category_id')->nullable()->constrained('blog_categories')->onDelete('set null')->after('meta_description');
            $table->json('tags')->nullable()->after('category_id');
            $table->string('status')->default('draft')->after('tags');
            $table->boolean('is_featured')->default(false)->after('status');
            $table->integer('views')->default(0)->after('is_featured');
            $table->timestamp('published_at')->nullable()->after('views');
            
            // Rename existing columns
            $table->renameColumn('image', 'old_image');
            $table->renameColumn('description', 'old_description');
            $table->renameColumn('url', 'old_url');
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
