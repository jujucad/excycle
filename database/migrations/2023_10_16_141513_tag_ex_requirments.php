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
        //
        // Schema::create('tagexrequirement', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->unsignedBigInteger('tag_id'); #Tag name id from tag table
        //     $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade'); #reference on tag id in Tags Table
        //     $table->string('zone')->nullable(); #Zone area classification
        //     $table->string('temperature_class')->nullable(); #Temperature Class
        //     $table->string('group_area')->nullable(); #Group Area
        //     $table->boolean('isolated_on_detection')->nullable(); #Isolated upon gas detection
        //     $table->string('certificate_no')->nullable(); #Certificat Number
        //     $table->integer('certificate_rev')->nullable(); #Certificat Revision Number
        //     $table->string('certificate_authority')->nullable(); #Certificat Authority

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tagexrequirement');
    }
};
