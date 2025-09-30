<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtaSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cta_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page_type'); // home, about, services, contact
            $table->string('title');
            $table->text('content');
            $table->string('button_text');
            $table->string('button_link');
            $table->string('background_color')->nullable();
            $table->string('text_color')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
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
        Schema::dropIfExists('cta_sections');
    }
}
