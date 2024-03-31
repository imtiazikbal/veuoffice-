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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title',500);
            $table->text('nBody');
            $table->text('nCaption');
            $table->string('nTag');
            $table->string('image');
            $table->enum('status',['published','unpublished'])->default('published');
            $table->boolean('scroll')->default(0);
            
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->foreign('topic_id')->references('id')->on('topics')->restrictOnDelete()->cascadeOnUpdate();


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->restrictOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('featured_id');
            $table->foreign('featured_id')->references('id')->on('featureds')->restrictOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('division_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('upazila_id')->nullable();

            $table->foreign('division_id')->references('id')->on('divisions')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('district_id')->references('id')->on('districts')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('upazila_id')->references('id')->on('upazilas')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
