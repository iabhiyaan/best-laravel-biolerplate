<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->bigIncrements('id');

            // meta infos about website
            $table->string('site_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('page_title')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('keyword')->nullable();


            // website inner pages banner images
            $table->string('blog_banner_image')->nullable();
            $table->string('team_banner_image')->nullable();
            $table->string('imagegallery_banner_image')->nullable();
            $table->string('videogallery_banner_image')->nullable();
            $table->string('contactus_banner_image')->nullable();

            // contact and address info
            $table->string('post_box')->nullable();
            $table->text('googlemap')->nullable();

            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();

            // social info
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();

            // homepage setup
            $table->string('banner_slogan_1')->nullable();
            $table->string('banner_slogan_2')->nullable();
            $table->text('banner_description')->nullable();
            $table->text('about_description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('about_us_videoLink')->nullable();
            $table->string('middlesection_slogan_1')->nullable();
            $table->string('middlesection_slogan_2')->nullable();
            $table->text('middlesection_description')->nullable();
            $table->string('middlesection_image')->nullable();

            // footer
            $table->string('footer_logo')->nullable();
            $table->text('footer_description')->nullable();
            $table->string('appstore_link')->nullable();
            $table->string('playstore_link')->nullable();

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
        Schema::dropIfExists('dashboards');
    }
}
