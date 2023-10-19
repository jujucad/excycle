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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tag_name')->unique(); #Tag name
            $table->string('type_of_equipment')->nullable(); #Tag description
            $table->string('parent_tag')->nullable(); #Parent Tag
            $table->string('po_number')->nullable(); #PO Number
            $table->string('equipment_model')->nullable(); #equipement model
            $table->string('equipment_manufacturer')->nullable(); #Equipment Manufacturer
            $table->string('equipment_category')->nullable(); #Equipement cat Elec / Inst / Non Electrical
            $table->string('equipment_location')->nullable(); #Location
            $table->string('zone')->nullable(); #Zone area classification
            $table->string('temperature_class')->nullable(); #Temperature Class
            $table->string('group_area')->nullable(); #Group Area
            $table->boolean('isolated_on_detection')->nullable(); #Isolated upon gas detection
            $table->string('certificate_no')->nullable(); #Certificat Number
            $table->integer('certificate_rev')->nullable(); #Certificat Revision Number
            $table->string('certificate_authority')->nullable(); #Certificat Authority
            $table->string('explosion_protection')->nullable(); #Explosion protection
            $table->string('equipment_group_protection')->nullable(); #Equipment Group protection
            $table->string('temperature_class_protection')->nullable(); #Temperature class protection
            $table->string('ambiant_temperature_range')->nullable(); #Ambiant temperature range
            $table->string('ingress_protection')->nullable(); #Ingress Protection
            $table->string('simple_apparatus_check_sheets')->nullable(); #Simple apparatus
            $table->string('is_loop_doc_reference')->nullable(); #IS Loop diagram doc reference
            $table->string('is_barrier_manufacturer')->nullable(); #IS barrier manufacturer
            $table->string('is_barrier_type_reference')->nullable(); #IS barrier type reference
            $table->string('is_barrier_certificate')->nullable(); #IS barrier certificate No
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
