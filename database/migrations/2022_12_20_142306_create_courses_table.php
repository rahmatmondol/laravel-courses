<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->integer('video')->default(0);
            $table->integer('book')->default(0);
            $table->integer('level')->default(0)->comment('0=Beginner, 1=Intermediate, 2=Advanced ');
            $table->boolean('type')->default(0)->comment('0=video, 1=book');
            $table->integer('duration')->default(0)->comment('0=1-5 hours, 1=5-10 hours, 2=10+ hours');
            $table->year('year')->default(2022);
            $table->text('sort_description')->nullable();
            $table->text('description')->nullable();
            $table->float('price')->default(0.00)->comment('0=free');

            $table->foreignId('series_id')->nullable()->constrained('series')->onDelete('set null');
            $table->foreignId('submited_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('platform_id')->nullable()->constrained('platforms')->onDelete('set null');
            $table->foreignId('img_id')->nullable()->constrained('imgs')->onDelete('set null');

            $table->timestamps();
        });
        
        Schema::create('author_course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('course_id')->constrained('courses');
            $table->timestamps();
        });

        Schema::create('course_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('topic_id')->constrained('topics');
            $table->timestamps();
        });

        Schema::create('course_episods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('episod_id')->constrained('episods');
            $table->timestamps();
        });

        Schema::create('course_review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('review_id')->constrained('reviews');
            $table->timestamps();
        });

        Schema::create('purchased_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_topics');
        Schema::dropIfExists('course_series');
        Schema::dropIfExists('course_episods');
        Schema::dropIfExists('course_user_review');
        Schema::dropIfExists('author_course');
    }
};
