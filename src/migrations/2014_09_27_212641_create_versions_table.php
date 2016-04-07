<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVersionsTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'versions', function (Blueprint $table) {
            $table->increments('version_id');
            $table->integer('versionable_id');
            $table->text('versionable_type');
            $table->string('user_id', 55)
                  ->nullable();
            $table->binary('model_data');
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
        Schema::drop('versions');
    }
    
}
