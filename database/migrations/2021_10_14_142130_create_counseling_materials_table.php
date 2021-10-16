<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_materials', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('written_by');
            $table->string('image');
            $table->enum('category', ['marriage', 'faith', 'relationships', 'health', 'family', 'encouragement', 'career', 'miscellaneous']);
            $table->text('content');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counseling_materials');
    }
}