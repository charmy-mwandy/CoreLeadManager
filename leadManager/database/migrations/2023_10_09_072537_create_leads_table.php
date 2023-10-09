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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("led_type")->default("agent_based");
            $table->enum("status",["accepted","denied","call back","pending","survey booked","survey conducted ","installed"])->default("pending");
            $table->string("firstName");
            $table->string("middleName")->nullable();
            $table->string("lastName");
            $table->text("address1");
            $table->text("address2")->nullable();
            $table->string("portalCode");
            $table->integer("contactNumber1");
            $table->integer("contactNumber2")->nullable();
            $table->string("email")->nullable();
            $table->date("dateOfBirth");
            $table->enum("benefits",["Child tax credit (CTC)", "Child Benefit","Job seekers Allowance (JSA)","Employment seekers Allowance (ESA)","Income support","Pension credit guarantee credit","Pension credit saving credit","Universal credit","Housing benefits","Working tax credit","Warm home discount scheme rebate"]);
            $table->enum("energyRating",["E","F","G","no EPC",])->nullable();
            $table->enum("boilerType",["non condensing boiler","back boiler","condensing boiler","combination boiler"])->nullable();
            $table->integer("boilerYears")->nullable();
            $table->string("boilerModel")->nullable();
            $table->enum("heatingTimer",["yes","no"])->nullable();
            $table->enum("roomThermostat",["yes","no"])->nullable();
            $table->enum("radiatorDials",["yes","no"])->nullable();
            $table->enum("secondaryHeating",["no","wood or log burners","electric heaters"])->default("no")->nullable();
            $table->enum("propertyType",["detached","semi detached","terraced","bungalow","flat"])->nullable();
            $table->date("buildDate")->nullable();
            $table->integer("numberOfBedrooms")->nullable();
            $table->boolean('habitableRoomsUnheated')->nullable();
            $table->string('habitableRoomsUnheatedNotes')->nullable();
            $table->boolean('extensionsOnProperty')->nullable();
            $table->string('extensionsOnPropertyNotes')->nullable();
            $table->date('extensionBuiltDate')->nullable();
            $table->boolean('availableRoomsOrLoftSpace')->nullable();
            $table->date('RIR_date')->nullable();
            $table->enum('groundFloorType',['concrete floors', 'suspended wooden floorboards','both'])->nullable();
            $table->enum('propertyWallType',['cavity walls, and they have been filled' , 'solid brick'])->nullable();
            $table->string('propertyWallTypeNotes')->nullable();
            $table->string('wallInsulationNotes')->nullable();
            $table->enum('thicknessOfLoftInsulation',['above','below','middle'])->nullable();
            $table->enum('glazeType',['fully double glazed' , 'partially double glazed']);
            $table->boolean('solarOrAshp')->nullable();
            $table->boolean('thermostatAttachment')->nullable();
            $table->dateTime('callbackTime')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
