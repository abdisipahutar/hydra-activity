<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('m_instagram_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 100);
            $table->text('owner')->nullable();
            $table->text('user_photo')->nullable();
            $table->char('user_name', 100)->nullable();
            $table->datetime('taken_at')->nullable();
            $table->boolean('is_video')->nullable();
            $table->integer('likes')->nullable();
            $table->text('images')->nullable();
            $table->text('caption')->nullable();
            $table->enum('is_approved', ['PENDING', 'APPROVED', 'REJECT'])->nullable();
            $table->dateTime('created_datetime');
            $table->dateTime('updated_datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_instagram_post');
    }
}
